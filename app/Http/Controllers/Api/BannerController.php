<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController as BaseController;
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Resources\BannerResource;
use Validator;
use Auth;

class BannerController extends BaseController
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
        $banner = Banner::get();

        $data = array();

        foreach($banner as $n) {
            array_push($data, $n);
        }
        return $this->sendResponse($data, 'Banners retrieved successfully.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        
        $validator = Validator::make($input, [
            'name'                      => 'required',
            'title'                     => 'required',
            'detail'                    => '',
            'attachement'               => '', 
            'link'                      => '',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error. Please check the form Input.', $validator->errors());       
        }

        $b_i_move = null;

        if (isset($input['attachement']) && $input['attachement'] != null) {            
            $file = time() . '-' . $input['title'] . '.' . $input['attachement']->extension();
            $b_i_move = $input['attachement']->storeAs('data/Banner/attachement', $file, 'public');     
        }

        $input['attachement'] = $b_i_move;

        $banner = Banner::create($input);

        return $this->sendResponse(new BannerResource($banner), 'Banner created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $banner = Banner::find($id);

        if (is_null($banner)) {
            return $this->sendError('Banner not found.');
        } 

        return $this->sendResponse(new BannerResource($banner), 'Banner retrieved successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $input = $request->all();

        $banner = Banner::find($id);

        if (is_null($banner)) {
            $response['error'] = 'Unauthorized';
            $response['message'] = 'You are not authorized to update this Banner';
            $statusCode = 403;
            return response()->json($response, $statusCode);
        }

        $validator = Validator::make($input, [
            'name'                      => 'required',
            'title'                     => 'required',
            'detail'                    => '',
            // 'attachement'               => 'mimes:pdf,doc,docx,jpg,jpeg,png,bmp,tiff', 
            'link'                      => '',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $banner->name = $input['name'];
        $banner->title = $input['title'];
        $banner->detail = $input['detail'];
        $banner->link = $input['link'];
        $banner->save();
   
        return $this->sendResponse(new BannerResource($banner), 'Banner updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $banner = Banner::find($id);

        $banner->delete();

        return $this->sendResponse([], 'Banner deleted successfully.');
    }
}
