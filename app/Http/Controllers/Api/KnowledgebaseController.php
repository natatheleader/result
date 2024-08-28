<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController as BaseController;
use App\Models\Knowledgebase;
use Illuminate\Http\Request;
use App\Http\Resources\KnowledgebaseResource;
use Validator;
use Auth;

class KnowledgebaseController extends BaseController
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
        $knowledgebase = Knowledgebase::get();

        $data = array();

        foreach($knowledgebase as $k) {
            array_push($data, $k);
        }
        return $this->sendResponse($data, 'Knowledgebase retrieved successfully.');
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

        $input['user_id'] = Auth::user()->id;
  
        $validator = Validator::make($input, [
            'user_id'                   => 'required|exists:users,id',
            'title'                     => 'required',
            'description'               => 'required',
            'catagory'                  => 'required',
            'file'                      => 'mimes:pdf, doc, docx',
            'link'                      => '',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $b_i_move = null;

        if (isset($input['file']) && $input['file'] != null) {            
            $file = time() . '-' . $input['title'] . '.' . $input['file']->extension();
            $b_i_move = $input['file']->storeAs('data/kb/img', $file, 'public');     
        }

        $input['file'] = $b_i_move;

        $knowledgebase = Knowledgebase::create($input);

        return $this->sendResponse(new KnowledgebaseResource($knowledgebase), 'Knowledgebase created successfully.');
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
        $knowledgebase = Knowledgebase::find($id);

        if (is_null($knowledgebase)) {
            return $this->sendError('Knowledgebase not found.');
        } 

        return $this->sendResponse(new KnowledgebaseResource($knowledgebase), 'Knowledgebase retrieved successfully.');
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

        $knowledgebase = Knowledgebase::find($id);

        if (is_null($knowledgebase)) {
            $response['error'] = 'Unauthorized';
            $response['message'] = 'You are not authorized to update this Knowledgebase';
            $statusCode = 403;
            return response()->json($response, $statusCode);
        }

        $validator = Validator::make($input, [
            'title'                     => 'required',
            'description'               => 'required',
            'catagory'                  => 'required',
            'file'                      => 'required',
            'link'                      => 'required',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $knowledgebase->title = $input['title'];
        $knowledgebase->description = $input['description'];
        $knowledgebase->catagory = $input['catagory'];
        $knowledgebase->file = $input['file'];
        $knowledgebase->link = $input['link'];
        $knowledgebase->save();
   
        return $this->sendResponse(new KnowledgebaseResource($knowledgebase), 'Knowledgebase updated successfully.');
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
        $knowledgebase = Knowledgebase::find($id);

        $knowledgebase->delete();

        return $this->sendResponse([], 'Knowledgebase deleted successfully.');
    }
}
