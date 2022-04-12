<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mode;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ModeController extends Controller
{
    public function index()
    {
        $result['mode']=Mode::all();
        return view('admin.mode_list',$result);
    }
    public function index1()
    {
        $result['mode']=Mode::all();
        return view('superadmin.mode_list',$result);
    }
    public function add()
    {
        
        return view('admin.add_modeList');
    }
    public function add1()
    {
        
        return view('superadmin.add_modeList');
    }
    public function insert(Request $request){

        $mode = new Mode;
        $mode->name = $request->input('name');
        $mode->description = $request->input('description');
        $mode->status = $request->input('status');
        $mode->doc = $request->input('doc');
        $mode->video = $request->input('video');

        if($request->hasfile('image'))
        { $destinationPath = public_path() . '/assets/uploads/courses_img/';
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move($destinationPath, $filename);
            $mode->image = $filename;
                
            
            $notification = array(
                'message' => 'Successfully get MOde Data',
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

        $mode->save();
        return redirect()->back()->with('message','mode Image Upload Successfully');
    }
      
    
    public function Update($id){
        $mode=Mode::all()->where('id',$id);
        
        return view('admin.mode_update',compact("mode")); 
        
    }
    public function Update1($id){
        $mode=Mode::all()->where('id',$id);
        
        return view('superadmin.mode_update',compact("mode")); 
        
    }
    public function edit(Request $request, $id){
       $mode = Mode::find($id);
       
       $mode->name = $request->input('name');
        $mode->description = $request->input('description');
        $mode->status = $request->input('status');
        $mode->doc = $request->input('doc');
        $mode->video = $request->input('video');

        if($request->hasfile('image'))
        {  $destinationPath = public_path() . '/assets/uploads/courses_img/';
            $destination = $destinationPath.$mode->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move($destinationPath, $filename);
            $mode->image = $filename;
                
            
            $notification = array(
                'message' => 'Successfully get MOde Data',
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

        $mode->update();
        return redirect()->back()->with('message','mode update  Successfully');
        
    }
    public function delete($id)
	{
	    	
		$delete = DB::delete('delete from modes where id = ?',[$id]);
    	if($delete)
		{
			return redirect('admin/mode_list');
            
		}
	}
    public function delete1($id)
	{
	    	
		$delete = DB::delete('delete from modes where id = ?',[$id]);
    	if($delete)
		{
			return redirect('superadmin/mode_list');
            
		}
	}
}
