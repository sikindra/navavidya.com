<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Course_level;
use App\Models\Category;
use App\Models\Mode;
use App\Models\Subcategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CourseController extends Controller
{
   public function index(){
        $category=Category::all();
        $course=Course::all();
        $mode=Mode::all()->where('status', '=', 'A');
        return view('admin.add_course',compact("course","category","mode"));
        
    }
    public function index1(){
        $category=Category::all();
        $course=Course::all();
        $mode=Mode::all()->where('status', '=', 'A');
        return view('superadmin.add_course',compact("course","category","mode"));
        
    }
    public function getCat(Request $request){
         $mid=$request->post('mid');
         $category=Category::all()->where('type_id', $mid);
         $html='<option value="">select option</option>';
         foreach($category as $list){
			$html.='<option value="'.$list->id.'" >'.$list->names.'</option>';
		}
		echo $html;
         
    }
    public function getCat1(Request $request){
        $mid=$request->post('mid');
        $course=Course::all()->where('cat_id', $mid);
        $html='<option value="">select option</option>';
        foreach($course as $list){
           $html.='<option value="'.$list->course_id.'">'.$list->course_name.'</option>';
       }
       echo $html;
        
   }
   public function getSub1(Request $request){
    $cid=$request->post('cid');
   $result['course_levels']=DB::table('course_levels')
         ->where(['course_levels.course_id'=>$cid])
            ->select('course_levels.level_id','course_levels.level')
            ->get();
        
        $result['courses']=DB::table('courses')
         ->where(['courses.course_id'=>$cid])
            ->select('courses.course_name')
            ->get();    
            
            
   
     
    $html=''; 
    foreach($result['courses'] as $list){
        $html.='<div id="course_levels">
        <label for="" class="text-primary">'.$list->course_name.'</label>
        </div>
        
        ';
    }
    foreach($result['course_levels'] as $list){
        $html.='<input type="checkbox" name="sub_cat_id[]" id="sub" value="'.$list->level_id.'" style="margin-top:10px;" > <span style="padding-left: 15px; padding-right: 13px;">'.$list->level.'</span>';
    }
    echo $html;
}
    public function getSub(Request $request){
		$cid=$request->post('cid');
		$sub=Subcategory::all()->where('cat_id', $cid);
		
		$html='<option value="">Select option</option>';
		foreach($sub as $list){
			$html.='<option value="'.$list->id.'" id="sub1">'.$list->sub_cat_name.'</option>';
		}
		echo $html;
	}
    public function get(){
        $result['data']=Course::all();
        return view('admin.course_list',$result);
    }
    public function get1(){
        $result['data']=Course::all();
        return view('superadmin.course_list',$result);
    }
    function edit($id) {
        $category=Category::all();
        $sub=Subcategory::all();
        $mode=mode::all()->where('status', '=', 'A');
        $course=Course::all()->where('course_id', '=', $id);
        return view('admin.course_update',compact("mode","course","category","sub"));
        
    }
    function edit1($id) {
        $category=Category::all();
        $sub=Subcategory::all();
        $mode=mode::all()->where('status', '=', 'A');
        $course=Course::all()->where('course_id', '=', $id);
        return view('superadmin.course_update',compact("mode","course","category","sub"));
        
    }
    function insert(Request $request){
        $course = new Course;
        $course->course_name = $request->input('course_name');
        $course->type_id = $request->input('type_id');
        $course->cat_id = $request->input('cat_id');
        $course->sub_cat_id = $request->input('sub_cat_id');
        $course->course_type = $request->input('course_type');
        $course->course_name = $request->input('course_name');
        $course->levels = $request->input('levels');
        $course->sample_video = $request->input('sample_video');
        $course->description = $request->input('description');
        
        if($request->hasfile('image'))
        { $destinationPath = public_path() . '/assets/uploads/courses_img/';
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move($destinationPath, $filename);
            $course->image = $filename;
            $notification = array(
                'message' => 'Successfully course get  Data',
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

        $course->save();
        return redirect()->back()->with('message',' Add Successfully');
        
        
    }
 function update(Request $request)
    {
      
      $course_id = $request->course_id;
      $course_name = $request->course_name;
      $course_type = $request->course_type;
      $levels = $request->levels;
      $description = $request->description;
      $cat_id = $request->cat_id;
      $sub_cat_id = $request->sub_cat_id;
      $type_id = $request->type_id;
      $sample_video = $request->sample_video;
      
             
      
      
      
      if($request->hasfile('image'))
        {
            $destinationPath = public_path() . '/assets/uploads/courses_img/';
            $destination = $destinationPath.$request->image;
          if(File::exists($destination))
          {
              File::delete($destination);
          }
          $file = $request->file('image');
          $filename = $file->getClientOriginalName();
          $file ->move($destinationPath,$filename);
          $request->image = $filename;        
          $update = DB::update('update courses set image =? where course_id =?',[$request->image,$course_id]);
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

      $update = DB::update('update courses set course_name = ?,course_type = ?, levels = ?,description = ?,cat_id = ?,sub_cat_id = ?, type_id = ?,sample_video = ?
      where course_id =?',[$course_name,$course_type,$levels,$description,$cat_id,$sub_cat_id,$type_id,$sample_video,$course_id]);
      return redirect()->back()->with('message',' update Successfully');
    }
    function course_delete($id){
        $delete = DB::delete('delete from courses where course_id  = ?',[$id]);
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

