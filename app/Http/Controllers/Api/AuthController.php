<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Carbon\Carbon; 
use Mail;
use DB;
use Auth;
use Validator;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

class AuthController extends BaseController
{
    //
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['loginEmail','registerEmail', 'forgetPassword', 'resetPassword', 'loginSendOTP', 'loginPhone', 'registerPhone', 'verifyOTPRegister', 'verifyEmail', 'resendOTP']]);
    }

    public function loginEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        
        $credentials = $request->only('email', 'password');
        
        $token = Auth::attempt($credentials);
        
        if (!$token) {
            return response()->json([
                'status' => 'error',
                'message' => 'Unauthorized',
            ], 401);
        }

        $user = Auth::user();

        return response()->json([
            'status' => 'success',
            'user' => $user,
            'authorisation' => [
                'token' => $token,
                'type' => 'bearer',
            ]
        ]);
    }

    public function registerEmail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'          => 'required|string|max:255',
            'email'         => 'required|string|email|max:255|unique:users',
            'password'      => 'required|string|min:6',
            'c_password'    => 'required|string|min:6|same:password',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $input = $request->all();

        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($request->password),
            'is_active' => 1,
        ]);

        $token = Auth::login($user);

        date_default_timezone_set('Asia/Dubai');

        //send email for activation
        $now = date("Y-m-d H:i:s");
        $endTime = strtotime("+10 minutes", strtotime($now));
        $expires = date("Y-m-d H:i:s", $endTime);

        $verificationToken = Crypt::encryptString($input['email'] . '~' . $now . '~' . $expires);

        try {
            Mail::send('emails.activateAccount', ['token' => $verificationToken], function($message) use($request){
                $message->to($request->email);
                $message->subject('Welcome to Results! Please activate your Account.');
            });
        } catch (Exeption $e)
        {}

        return response()->json([
            'status' => 'success',
            'message' => 'User created successfully',
            'user' => $user,
            // 'permissions' => $user->getPermissionsViaRoles(),
            'authorisation' => [
                'token' => $token,
                'type' => 'bearer',
            ]
        ]);
    }

    public function resendVerificationLink() 
    {
        $user = Auth::user();

        date_default_timezone_set('Africa/Addis_Ababa');

        //send email for activation
        $now = date("Y-m-d H:i:s");
        $endTime = strtotime("+10 minutes", strtotime($now));
        $expires = date("Y-m-d H:i:s", $endTime);

        $verificationToken = Crypt::encryptString($user->email . '~' . $now . '~' . $expires);

        try {
            Mail::send('emails.activateAccount', ['token' => $verificationToken], function($message) use($user) {
                $message->to($user->email);
                $message->subject('Welcome to Maleda Mirchaye! Please activate your Account.');
            });
        } catch (Exeption $e)
        {}

        return response()->json([
            'status' => 'success',
            'message' => 'Email sent successfully.'
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return response()->json([
            'status' => 'success',
            'message' => 'Successfully logged out',
        ]);
    }

    public function refresh()
    {
        return response()->json([
            'status' => 'success',
            'user' => Auth::user(),
            'authorisation' => [
                'token' => Auth::refresh(),
                'type' => 'bearer',
            ]
        ]);
    }

    public function forgetPassword(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
        ]);
        
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());      
        }
        
        $token = Str::random(64);
        
        DB::table('password_resets')->insert(
            ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
        );

        try {
            Mail::send('emails.forgetPassword', ['token' => $token], function($message) use($request){
                $message->to($request->email);
                $message->subject('Reset Password Notification');
            });
        } catch (Exeption $e)
        {}
    
        return $this->sendResponse([], 'Password reset mail sent successfully.');
    }
    
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email'                     => 'required|email|exists:users',
            'token'                     => 'required|string|min:6',
            'password'                  => 'required|string|min:6|confirmed',
            'password_confirmation'     => 'required',
        ]);

        $updatePassword = DB::table('password_resets')->where(['email' => $request->email, 'token' => $request->token])->first();

        if(!$updatePassword) {
            $response['error'] = 'Invalid Request';
            $response['message'] = 'This request to reset password is invalid.';
            $statusCode = 400;
            return response()->json($response, $statusCode);
        }

        $user = User::where('email', $request->email)
                ->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')->where(['email'=> $request->email])->delete();

        return $this->sendResponse([], 'Password Reset Successfully.');
    }

    public function verifyEmail($token) 
    {
        try {
            $decrypted = Crypt::decryptString($token);
            
            $token = explode('~', $decrypted);

            $datetime   = date("Y-m-d H:i:s");
            $now        = strtotime($datetime);

            $user = User::where('email', $token[0])->first();
            
            if (strtotime($token[2]) > $now && $user->email_verified_at == "") {
                $user->email_verified_at = date('Y-m-d H:i:s');
                $user->save();
                
                // return response()->json([
                //     'status' => 'success',
                //     'message' => 'Email verified successfully.'
                // ]);
                return redirect()->away('https://maledamerchaye.com');
            } else {
                // $response['error'] = 'Request Error';
                // $response['message'] = 'Your request is invalid. please request a verification email again.';
                // $statusCode = 400;
                // return response()->json($response, $statusCode);
                return redirect()->away('https://maledamerchaye.com');
            }
        } catch (DecryptException $e) {
            //
            $response['error'] = 'Internal Server Error';
            $response['message'] = 'Internal server error. Please try again.';
            $statusCode = 500;
            return response()->json($response, $statusCode);
        }
    }
}