<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshop;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\File;

class WorkshopController extends Controller
{
    public function index()
    {
        $result['data']=Workshop::all();
        return view('superadmin.workshop_list',$result);
    }
    function add(){
        return view('superadmin.add_workshop');
    }
    function edit($id){
        $result['data']=Workshop::all()->where('id',$id);
        return view('superadmin.workshop_update',$result);
    }
    public function insert(Request $request){
      
        $work = new Workshop;
        $work->subject = $request->input('subject');
        $work->batch = $request->input('batch');
        $work->batch_from = $request->input('batch_from');
        $work->batch_to = $request->input('batch_to');
        $work->course_days = $request->input('course_days');
        $work->amount = $request->input('amount');
        $work->course_time = $request->input('course_time');
        $work->total_classes = $request->input('total_classes');
  
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/assets/uploads/workshops/', $filename);
            $work->image = $filename;
                
            
            $notification = array(
                'message' => 'Successfully get work Data',
                'alert-type' => 'success'
            );
            
        }
        else {
            echo "error";
            $notification = array(
                'message' => 'Error get work Data',
                'alert-type' => 'error'
            );
        }
  
        $work->save();
        return redirect()->back()->with('message','Add Successfully');
    }
    public function update(Request $request, $id)
    {
        $work =Workshop::find($id);
        $work->subject = $request->input('subject');
        $work->batch = $request->input('batch');
        $work->batch_from = $request->input('batch_from');
        $work->batch_to = $request->input('batch_to');
        $work->course_days = $request->input('course_days');
        $work->amount = $request->input('amount');
        $work->course_time = $request->input('course_time');
        $work->total_classes = $request->input('total_classes');

        if($request->hasfile('image'))
        {
            $destination = 'public/assets/uploads/workshops/'.$request->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/assets/uploads/workshops/', $filename);
            $work->image = $filename;
                
            
            $notification = array(
                'message' => 'Successfully get work Data',
                'alert-type' => 'success'
            );
            
        }
        else {
            echo "error";
            $notification = array(
                'message' => 'Error get work Data',
                'alert-type' => 'error'
            );
        }

        $work->save();
        return redirect()->back()->with('message','work  Upload Successfully');   
     }
     public function delete($id)
	{
	    	
		$delete = DB::delete('delete from workshops where id = ?',[$id]);
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
        return redirect()->back()->with('message','work  delete Successfully'); 
	}
  
}
