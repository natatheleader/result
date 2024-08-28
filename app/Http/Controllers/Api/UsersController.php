<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;
use App\Models\Bank;
use App\Models\Transaction;
use App\Http\Resources\ProfileResource;
use Validator;
use Auth;
use Illuminate\Support\Str;
use Carbon\Carbon; 
use Mail;
use DB;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

class UsersController extends BaseController
{
    public function __construct() {
        $this->middleware('auth:api');
        // $this->middleware('permission:read knowledgebase', ['only' => ['index', 'show']]);
        // $this->middleware('permission:create knowledgebase', ['only' => ['store']]);
        // $this->middleware('permission:edit knowledgebase', ['only' => ['update']]);
        // $this->middleware('permission:delete knowledgebase', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::with('profile')->get();

        return $this->sendResponse($users, 'User retrieved successfully.');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function resendLink($id) {
        $user = User::where('id', $id)->first();
        
        $token = Str::random(64);
        
        DB::table('password_resets')->insert(
            ['email' => $user->email, 'token' => $token, 'created_at' => Carbon::now()]
        );

        try {
            Mail::send('emails.forgetPassword', ['token' => $token], function($message) use($user){
                $message->to($user->email);
                $message->subject('Reset Password Notification');
            });
        } catch (Exeption $e)
        {}
    
        return $this->sendResponse([], 'Password reset mail sent successfully.');
    }

    public function showDetailed($id)
    {
        //
        // The data we need are profile, bank, Level, Position, Reffered Users, Total earning, Withdrawn Sofar, Available Balance, Earnings from Refferal (Total), Earnings from Refferal (Initial), Earnings from Refferal (5%)

        //profile and bank
        $user = User::with('profile')->find($id);

        if (is_null($user)) {
            return $this->sendError('User not found.');
        } 

        // //level and position
        // $c_s = CurrentStatus::where('profile_id', $id)->latest()->first();

        // //reffered Users
        // $all_reffered_users = 0;
        // $all_refferals = Referral::where('reffered_by_id', $profile->user_id)->get();

        // if (count($all_refferals) > 0) {
        //     foreach($all_refferals as $refferals) {
        //         // dd($refferals->user);
        //         if ($refferals->user->profile != null) {
        //             if (CurrentStatus::where('profile_id', $refferals->user->profile->id)->exists()) {
        //                 $all_reffered_users += 1;
        //             }
        //         }
        //     }
        // }

        // //total earning
        // $total_earning = 0;
        //     //direct earnings
        // $all_earning = DetailedTransaction::where('reciever_id', $id)->get();
        // foreach($all_earning as $t) {
        //     $total_earning = $total_earning + $t->net_for_reciever;
        // }   
        //     //5% earnings
        // $total_5_earning = 0;
        // $all_5_earning = DetailedTransaction::where('refferer_id', $profile->user_id)->get();
        
        // foreach($all_earning as $t) {
        //     $total_5_earning = $total_5_earning + $t->referal_fee;
        // }  
        //     //main refferal earnings
        // $total_earning = $total_earning + $total_5_earning + ($all_reffered_users * 500);

        // //Withdrawn Sofar
        // $total_withdrawal = 0;
        //     //direct withdrawal
        // $all_withdrawal = Withdrawal::where('profile_id', $id)->where('approved', 1)->get();
        // foreach($all_withdrawal as $t) {
        //     $total_withdrawal = $total_withdrawal + $t->amount;
        // } 

        // //Available Balance            
        // $net = $total_earning - $total_withdrawal;

        // // Earnings from Refferal (Total)
        // $total_reff = $total_5_earning + ($all_reffered_users * 500);

        // // Earnings from Refferal (Initial)
        // $total_reff_ini = $all_reffered_users * 500;

        // profile, bank, Level, Position, Reffered Users, Total earning, Withdrawn Sofar, Available Balance, Earnings from Refferal (Total), Earnings from Refferal (Initial), Earnings from Refferal (5%)
        $data = [
            "user" => $user,
            // "level" => $c_s->level,
            // "position" => $c_s->position,
            // "total_reffered" => $all_reffered_users,
            // "total_earned" => $total_earning,
            // "total_withdrawn" => $total_withdrawal,
            // "available" => $net,
            // "total_reff" => $total_reff,
            // "total_reff_5" => $total_5_earning,
            // "total_reff_init" => $total_reff_ini,
        ];

        return $this->sendResponse($data, 'Success');
    }

    public function updateByAdmin(Request $request, $id)
    {
        //
        $input = $request->all();

        $user = User::find($id);

        if (is_null($user)) {
            $response['error'] = 'Unauthorized';
            $response['message'] = 'You are not authorized to update this user.';
            $statusCode = 403;
            return response()->json($response, $statusCode);
        }

        $validator = Validator::make($input, [
            'name'                      => 'required',
            'email'                     => 'required',
            // 'phonenumber'               => 'required',
            // 'region'                    => 'required',
            // 'city'                      => 'required',
            // 'special_area'              => 'required',
            // 'bank_name'                 => 'required',
            // 'account_holder_name'       => 'required',
            // 'account'                   => 'required',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $old_email = $user->email;

        $user->email = $input['email'];
        $user->name = $input['name'];
        // $profile->phonenumber = $input['phonenumber'];
        // $profile->region = $input['region'];
        // $profile->city = $input['city'];
        // $profile->special_area = $input['special_area'];

        $user->save();

        // if ($user) {
        //     $bank = Bank::where('profile_id', $id)->first();

        //     $bank->bank_name = $input['bank_name'];
        //     $bank->account_holder_name = $input['account_holder_name'];
        //     $bank->account = $input['account'];

        //     $bank->save();

        //     if ($bank) {

        if ($old_email === $input['email']) {
            return $this->sendResponse($user, 'User updated successfully.');
        } else {
            $this->resendLink($user->id);            
            return $this->sendResponse($user, 'User updated successfully.');
        }
                // return $this->sendResponse($user, 'User updated successfully.');
            // }
        // }
        return $this->sendError('Validation Error.', $validator->errors());    
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function resendRefferal($id) {
        $user = User::where('id', $id)->first();

        $r_code = $user->r_code;
        $email = $user->email;

        $link = "https://maledamirchaye.com/register/?r_c=" . $r_code;

        try {
            Mail::send('emails.refferal', ['code' => $r_code, 'link' => $link], function($message) use($email){
                $message->to($email);
                $message->subject('Welcome to Maleda Mirchaye! Your Refferal Code to Invite Other Users.');
            });
        } catch (Exeption $e)
        {}

        return response()->json([
            'status' => 'success',
            'message' => 'Email sent successfully.'
        ]);
    }
}
