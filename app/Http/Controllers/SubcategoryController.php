<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Course;
use App\Models\Category;
use App\Models\Mode;
use Illuminate\Support\Facades\DB;

class SubcategoryController extends Controller
{
    public function index(){
        $result['data']=Subcategory::all();
        return view('admin.subcategory',$result);
    }
    public function view($id){
        $result['course']=Course::all()->where('sub_cat_id',$id);
        return view('admin.subcategory_view', $result);
    }
    public function view1($id){
        $result['course']=Course::all()->where('sub_cat_id',$id);
        return view('superadmin.subcategory_view', $result);
    }
    public function list($type_id, $id){
       $result['course']=Subcategory::all()->where('type_id',$type_id )
        ->where('cat_id',$id);
        
        $result['modes']=DB::table('modes')
             ->where(['modes.id'=>$type_id])
             ->get();
        $result['categories']=DB::table('categories')
             ->where(['categories.id'=>$id])
             ->get();
            
        return view('admin.subcategory_view1', $result);
    }
    public function list1($type_id, $id){
        $result['course']=Subcategory::all()->where('type_id',$type_id )
        ->where('cat_id',$id);
        $result['modes']=DB::table('modes')
             ->where(['modes.id'=>$type_id])
             ->get();
        $result['categories']=DB::table('categories')
             ->where(['categories.id'=>$id])
             ->get();
            
        return view('superadmin.subcategory_view1', $result);
    }
    function add_subcategory($type_id, $id){
        $result['categories']=DB::table('categories')
             
             ->where(['categories.id'=>$id])
             ->get();
              $result['cat']=DB::table('categories')
             
             
             ->get();
             $result['modes']=DB::table('modes')
             
             ->where(['modes.id'=>$type_id])
             ->get();
            
       
        
        return view('superadmin.add_subcategory',$result);
    }
    function add_subcategory1($type_id, $id){
        $result['categories']=DB::table('categories')
             
             ->where(['categories.id'=>$id])
             ->get();
              $result['cat']=DB::table('categories')
             
             
             ->get();
             $result['modes']=DB::table('modes')
             
             ->where(['modes.id'=>$type_id])
             ->get();
            
       
        
        return view('admin.add_subcategory',$result);
    }
    function sub_insert(Request $request){
        
        $sub = new Subcategory;
         $sub->type_id = $request->input('type_id');
         $sub->cat_id = $request->input('cat_id');

         $sub->sub_cat_name = $request->input('sub_cat_name');
         $sub->status = $request->input('status');
         $sub->course_des = $request->input('course_des');
         $sub->class_desc = $request->input('class_desc');
 
         if($request)
         {

             $notification = array(
                 'message' => 'Successfully get sub Data',
                 'alert-type' => 'success'
             );
             
         }
         else {
             echo "error";
             $notification = array(
                 'message' => 'Error get sub Data',
                 'alert-type' => 'error'
             );
         }
 
         $sub->save();
         return redirect()->back()->with('message','Sub Category Add  Successfully');
         
     }
    
    function edit($id){
        
        $sub=Subcategory::all()->where('id', '=', $id);
        $cat=Category::all();
        $mode=Mode::all();
        
        return view('admin.subcategory_update',compact("sub","cat","mode"));

       
    }
    function edit1($id){
        
        $sub=Subcategory::all()->where('id', '=', $id);
        $cat=Category::all();
        $mode=Mode::all();
        
        return view('superadmin.subcategory_update',compact("sub","cat","mode"));

       
    }
    function update(Request $request, $id){
        $sub = Subcategory::find($id);
        
         $sub->type_id = $request->input('type_id');
         $sub->cat_id = $request->input('cat_id');

         $sub->sub_cat_name = $request->input('sub_cat_name');
         $sub->status = $request->input('status');
         $sub->course_des = $request->input('course_des');
         $sub->class_desc = $request->input('class_desc');
 
         if($request)
         {

             $notification = array(
                 'message' => 'Successfully get sub Data',
                 'alert-type' => 'success'
             );
             
         }
         else {
             echo "error";
             $notification = array(
                 'message' => 'Error get sub Data',
                 'alert-type' => 'error'
             );
         }
 
         $sub->update();
         return redirect()->back()->with('message','mode update  Successfully');
         
     }
     
}
