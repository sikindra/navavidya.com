<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Mode;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $result['categories']=  DB::table('categories')
        ->join('modes','categories.type_id','=','modes.id')
        ->select('categories.id','categories.names','categories.description','categories.status', 'categories.type_id','modes.name')
			->get();
        return view('admin.category',$result);
        
    	
			
        
    }
    public function index1()
    {
        
        $result['categories']=  DB::table('categories')
        ->join('modes','categories.type_id','=','modes.id')
        ->select('categories.id','categories.names','categories.description','categories.status', 'categories.type_id','modes.name')
			->get();
        return view('superadmin.category',$result);
        
    	
			
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Add(Request $request)
    {
        $result['data']=Mode::all()->where('status', '=', 'A');
       return view('admin.add_category', $result);
    }
    public function Add1(Request $request)
    {
        $result['data']=Mode::all()->where('status', '=', 'A');
       return view('superadmin.add_category', $result);
    }
    public function insert(Request $request){

        $category = new Category;
        $category->names = $request->input('names');
        $category->stud_level = $request->input('stud_level');
        $category->sub_names = $request->input('sub_names');
        $category->description = $request->input('description');
        $category->type_id = $request->input('type_id');
        $category->status = $request->input('status');
        $category->subject_desc = $request->input('subject_desc');
        $category->subject_names = $request->input('subject_names');

        if($request->hasfile('image'))
        {
            $destinationPath = public_path() . '/assets/uploads/courses_img/';
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move($destinationPath, $filename);
            $category->image = $filename;
                
            
            $notification = array(
                'message' => 'Successfully get category Data',
                'alert-type' => 'success'
            );
            
        }
        else {
            echo "error";
            $notification = array(
                'message' => 'Error get category Data',
                'alert-type' => 'error'
            );
        }

        $category->save();
        return redirect()->back()->with('message','category  Upload Successfully');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $mode=Mode::all()->where('status', '=', 'A');
        $category=Category::all()->where('id',$id);
        return view('admin.category_update',compact("category","mode")); 
        
    }
    public function edit1($id){
        $mode=Mode::all()->where('status', '=', 'A');
        $category=Category::all()->where('id',$id);
        return view('superadmin.category_update',compact("category","mode")); 
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, $id)
    {
        $category =Category::find($id);
        $category->names = $request->input('names');
        $category->stud_level = $request->input('stud_level');
        $category->sub_names = $request->input('sub_names');
        $category->description = $request->input('description');
        $category->type_id = $request->input('type_id');
        $category->status = $request->input('status');
        $category->subject_desc = $request->input('subject_desc');
        $category->subject_names = $request->input('subject_names');

        if($request->hasfile('image'))
        {
             $destinationPath = public_path() . '/assets/uploads/courses_img/';
            $destination = $destinationPath.$request->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move($destinationPath, $filename);
            $category->image = $filename;
                
            
            $notification = array(
                'message' => 'Successfully get category Data',
                'alert-type' => 'success'
            );
            
        }
        else {
            echo "error";
            $notification = array(
                'message' => 'Error get category Data',
                'alert-type' => 'error'
            );
        }

        $category->save();
        return redirect()->back()->with('message','category  Upload Successfully');   
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
    public function delete($id)
	{
	    	
		$delete = DB::delete('delete from categories where id  = ?',[$id]);
    	if($delete)
		{
			 $notification = array(
                'message' => 'Successfully get categories Data',
                'alert-type' => 'error'
            );
            
        }
        else {
            echo "error";
            $notification = array(
                'message' => 'Error get categories Data',
                'alert-type' => 'error'
            );
        }
        return redirect()->back()->with('message','categories  delete Successfully'); 
	}
	 public function delete1($id)
	{
	    	
		$delete = DB::delete('delete from categories where id  = ?',[$id]);
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
	function student_data1(Request $request, $str)

    
    {
       $result['course_details']=DB::table('course_details')
             ->where(['course_details.product_id'=>$str])
              ->leftJoin('courses','courses.course_id','=','course_details.product_id')
             ->leftJoin('course_levels','course_levels.level_id','=','course_details.products_attr_id')
             ->leftJoin('course_orders','course_orders.id','=','course_details.orders_id')
             
             ->select('course_orders.name','course_orders.email','course_orders.mobile as phone','course_levels.level','courses.course_name','course_orders.address1')
             ->get();
            $result['category']=Category::all();
             return view('superadmin.student_details',$result);
    
    }
    function payment_data1(Request $request, $str)

    
    {
         $result['course_details']=DB::table('course_details')
         ->leftJoin('course_orders','course_orders.id','=','course_details.orders_id')
         ->leftJoin('courses','courses.course_id','=','course_details.product_id')
         ->leftJoin('course_levels','course_levels.level_id','=','course_details.products_attr_id')
         ->leftJoin('modes','modes.id','=','courses.type_id')
         ->leftJoin('categories','categories.id','=','courses.cat_id')
         
          ->where(['course_details.product_id'=>$str])
          ->select('course_orders.*','course_details.orders_id','course_orders.order_status as orders_status','course_levels.price','courses.course_name','course_levels.level','modes.name as modes_name','categories.names')
         ->get();
         
             
         
         
         
         
       
            $result['category']=Category::all();
             return view('superadmin.payment_details',$result);
    
    }
    function student_data(Request $request)
    
    {
       
      $result['category']=Category::all();
         return view('superadmin.student_data',$result);
    }
    public function getstudentCat(Request $request){
        $cid=$request->post('cid');
        $course=Course::all()->where('cat_id', $cid);
       
        $html='<option value="">select Subject</option>';
        foreach($course as $list){
           $html.='<option value="'.$list->course_id.'" id="sub1">'.$list->course_name.'</option>';
       }
       echo $html;
        
   }
   function payment_data()
    {
        $category=Category::all();
        return view('superadmin.payment_data',compact("category"));
    }
    

}
