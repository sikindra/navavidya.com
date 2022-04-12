<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Chapter;
use App\Models\Course_level;
use Illuminate\Support\Facades\DB;

class ChapterController extends Controller
{
   function getchapter($id)
   {
    $course=Course_level::all()->where('level_id', $id);
    return view('admin.add_chapter',compact("course"));
       
   }
   function getchapter1($id)
   {
    $course=Course_level::all()->where('level_id', $id);
    return view('superadmin.add_chapter',compact("course"));
       
   }
   function chapter_insert(Request $request)
   {
       $cha = new Chapter;
       $cha->level_id = $request->input('level_id');
       $cha->chapter_num = $request->input('chapter_num');
       $cha->chapter_name = $request->input('chapter_name');
       $cha->sub_topic = $request->input('sub_topic');
       
       
     
       

       if($request->chaloyee)
       {
          
           
           $notification = array(
               'message' => 'Successfully chaloyee get  Data',
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

       $cha->save();
       return redirect()->back()->with('message',' Add Successfully');
       
   }
   function edit_chapter($id){
    $chapter=Chapter::all()->where('chapter_id', $id);
    return view('admin.edit_chapter',compact("chapter")); 
       
   }
   function edit_chapter1($id){
    $chapter=Chapter::all()->where('chapter_id', $id);
    return view('superadmin.edit_chapter',compact("chapter")); 
       
   }
   function update_chapter(Request $request)
    {
      
      $chapter_id = $request->chapter_id;
      $chapter_num = $request->chapter_num;
      $chapter_name = $request->chapter_name;
      $sub_topic = $request->sub_topic;
     
      
             
      
      
      
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

      $update = DB::update('update chapters set chapter_num = ?,chapter_name = ?, sub_topic = ?
      where chapter_id =?',[$chapter_num,$chapter_name,$sub_topic,$chapter_id]);
      return redirect()->back()->with('message',' update Successfully');
    }
    public function chapter_delete($id)
	{
	    	
		$delete = DB::delete('delete from chapters where chapter_id  = ?',[$id]);
    	if($delete)
		{
			return redirect()->back()->with('message',' delete Successfully');
            
		}
	}
    function addsyl_chapter($id){
        $addsyl=Chapter::all()->where('chapter_id', $id);
    return view('admin.addsyl_chapter',compact("addsyl"));
    }
    function addsyl_chapter1($id){
        $addsyl=Chapter::all()->where('chapter_id', $id);
    return view('superadmin.addsyl_chapter',compact("addsyl"));
    }
   
}
