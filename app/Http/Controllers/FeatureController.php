<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature;
use Illuminate\Support\Facades\DB;
class FeatureController extends Controller
{
    public function index(){
        //$result['data']=Feature::all()->Where('row_order', '=', 1);
        $result['data']=Feature::all();
        return view('admin.feature_list',$result);
    }
    public function index1(){
        //$result['data']=Feature::all()->Where('row_order', '=', 1);
        $result['data']=Feature::all();
        return view('superadmin.feature_list',$result);
    }
    public function show()
    {
        $result['features']=Feature::all();
        return view('front.feature',$result);
    }
    function add(){
        return view('admin.add_feature');
    }
    function add1(){
        return view('superadmin.add_feature');
    }
    function edit($id){
        $result['features']=Feature::all()->Where('feature_id', '=', $id);;
        return view('admin.feature_update',$result);
    }
    function edit1($id){
        $result['features']=Feature::all()->Where('feature_id', '=', $id);;
        return view('superadmin.feature_update',$result);
    }
   function insert(Request $request){
      
        $feat = new Feature;
        $feat->heading = $request->input('heading');
        $feat->icon_tag = $request->input('icon_tag');
        $feat->description = $request->input('description');
        $feat->status = $request->input('status');
        
  
        if($request)
        {
          
                
            
            $notification = array(
                'message' => 'Successfully get feat Data',
                'alert-type' => 'success'
            );
            
        }
        else {
            echo "error";
            $notification = array(
                'message' => 'Error get feat Data',
                'alert-type' => 'error'
            );
        }
  
        $feat->save();
        return redirect()->back()->with('message','Add Successfully');
    }
     function update(Request $request)
    {
      
      $feature_id = $request->feature_id;
      $heading = $request->heading;
      $icon_tag = $request->icon_tag;
      $description = $request->description;
      $status = $request->status;
      $row_order = $request->row_order;
      
    if($request)
        { 
             $notification = array(
                'message' => 'Successfully Employee get  Data',
                'alert-type' => 'success'
          );
        }
      else {
          echo "error";
          $notification = array(
              'message' => 'Error get mode Data',
              'alert-type' => 'error'
          );
      }

      $update = DB::update('update features set heading = ?,icon_tag = ?, description = ?,status = ?, row_order = ? where feature_id =?',[$heading,$icon_tag,$description,$status,$row_order,$feature_id]);
      return redirect()->back()->with('message',' update Successfully');
    }
    
    public function delete($id)
	{
	    	
		$delete = DB::delete('delete from features where feature_id = ?',[$id]);
    	if($delete)
		{
			
            $notification = array(
                'message' => 'Successfully get work Data',
                'alert-type' => 'error'
            );
            
        }
        else {
            echo "error";
            $notification = array(
                'message' => 'Error get work Data',
                'alert-type' => 'error'
            );
        }
        return redirect()->back()->with('message',' delete Successfully'); 
	}
}
