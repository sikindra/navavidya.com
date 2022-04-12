<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course_level;
use App\Models\Chapter;
use App\Models\Syllebus;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
class SyllebusController extends Controller
{
    function syllebus($id)
   {
    $course=Course_level::all()->where('level_id', $id);
    $chapter=Chapter::all()->where('level_id', $id);
    
    return view('admin.syllebus',compact("course","chapter"));
   }
   function syllebus1($id)
   {
    $course=Course_level::all()->where('level_id', $id);
    $chapter=Chapter::all()->where('level_id', $id);
    
    return view('superadmin.syllebus',compact("course","chapter"));
   }
   function syllebus_list($id)
   {
    $chapter=Chapter::all()->where('chapter_id', $id);
    $syl=Syllebus::all()->where('chapter_id', $id); 
    return view('admin.syllebus_list',compact("syl","chapter")); 
   }
   function edit_syllebus_list($id)
   {
    
    $syl=Syllebus::all()->where('syllbus_id', $id); 
    return view('admin.edit_syllebus_list',compact("syl"));   
   }
  function syllebus_insert(Request $request){

    $Syllebus = new Syllebus;
    $Syllebus->chapter_id = $request->input('chapter_id');
    $Syllebus->topic_id = $request->input('topic_id');
    $Syllebus->topic_name = $request->input('topic_name');
    $Syllebus->video_link = $request->input('video_link');
    $Syllebus->sub_topic = $request->input('sub_topic');
    

    if($request->hasfile('pdf_file'))
    {
        
        $file = $request->file('pdf_file');
        $extenstion = $file->getClientOriginalExtension();
        $filename = time().'.'.$extenstion;
        $file->move('public/assets/uploads/courses_img/', $filename);
        $Syllebus->pdf_file = $filename;
            
        
        $notification = array(
            'message' => 'Successfully get Syllebus Data',
            'alert-type' => 'success'
        );
        
    }
    else {
        echo "error";
        $notification = array(
            'message' => 'Error get Syllebus Data',
            'alert-type' => 'error'
        );
    }

    $Syllebus->save();
    return redirect()->back()->with('message','Syllebus  Upload Successfully');
}

 function update_syllebus(Request $request)
{
  
  $syllbus_id = $request->syllbus_id;
  $topic_name = $request->topic_name;
  $topic_id = $request->topic_id;
  $video_link = $request->video_link;
  $sub_topic = $request->sub_topic;
  
  
if($request->hasfile('pdf_file'))
    { 
        $destination = 'public/assets/uploads/courses_img/'.$request->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $file = $request->file('pdf_file');
        $filename = $file->getClientOriginalName();
        $file ->move('public/assets/uploads/courses_img/',$filename);
        $request->pdf_file = $filename;        
        $update = DB::update('update course_levels set pdf_file =? where syllbus_id =?',[$request->pdf_file,$syllbus_id]);
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
  $update = DB::update('update syllebuses set topic_name = ?,topic_id = ?,sub_topic = ?, video_link = ?
            where syllbus_id =?',[$topic_name,$topic_id,$sub_topic,$video_link,$syllbus_id]);

  return redirect()->back()->with('message',' update Successfully');
}

  
    public function show()
    {
        $result['data']=Checkbox::all();
        return view('checkview',$result);
    }
    function syllebus_list_delete($id)
    {
        $delete = DB::delete('delete from syllebuses where syllbus_id  = ?',[$id]);
    	if($delete)
		{
			return redirect()->back()->with('message',' delete Successfully');
            
		}
    }
}
