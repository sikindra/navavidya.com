<?php

namespace App\Http\Controllers;

use App\Models\SuperAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.  
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->session()->has('SUPERADMIN_LOGIN')){
               
            return redirect('superadmin/dashboard');
        }else{
              $request->session()->flash('error','Access Denied');
              return view('superadmin.login');
          }
        
    }
    public function auth(Request $request){
        $email=$request->post('email');
         $password=$request->post('password');

         $result=SuperAdmin::where(['email'=>$email])->first();
         if($result){
             if(Hash::check($request->post('password'),$result->password)){
                $request->session()->put('SUPERADMIN_LOGIN',true);
                $request->session()->put('SUPERADMIN_ID',$result->id);
                $request->session()->put('SUPERADMIN_NAME',$result->name);
                $request->session()->put('SUPERADMIN_EMAIL',$result->email);
                $request->session()->put('SUPERADMIN_IMAGE',$result->image);
                
                return redirect('superadmin/dashboard');

             }else{
                $request->session()->flash('error','please enter valid password details');
                return redirect('superadmin');

             }
             
            

         }else{
             $request->session()->flash('error','please enter valid login details');
             return redirect('superadmin');
         }


    }
    function dashboard(){
        if(session()->has('SUPERADMIN_LOGIN')){
               
            $result= [    
                
                'aid' => session()->get('ADMIN_ID'),
                'aname' => session()->get('ADMIN_NAME'),
                'aemail' => session()->get('ADMIN_EMAIL'),
                'aimage' => session()->get('ADMIN_IMAGE'),

                
            ];
               

        }else{
            return redirect('superadmin');
        }

            $student = DB::table('admins')->count();
            $subcategories = DB::table('subcategories')->count();
            $syllebuses = DB::table('syllebuses')->count();
            $testimonials = DB::table('testimonials')->count();
            $orders = DB::table('orders')->count();
            $categories = DB::table('categories')->count();
            $school = DB::table('schools')->count();
            $book = DB::table('books')->count();
            $courses = DB::table('courses')->count();
            $course_levels = DB::table('course_levels')->count();
            $book_level = DB::table('book_levels')->count();
           return view('superadmin.dashboard',compact("student","school",'book','book_level','categories','courses','course_levels','orders','testimonials','syllebuses','subcategories','result'));
           
        
        
        
        
            
    }
    public function update_profile1(Request $request)
    {
       
        $id = $request->id;
        $password = Hash::make($request->password);
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

      $update = DB::update('update 	super_admins set password = ? where id =?',[$password,$id]);
      return redirect()->back()->with('message',' update Successfully');
      
    }
    function edit_profile(Request $request){
        
            $uid=$request->session()->get('SUPERADMIN_ID');
            $result['super_admins']=DB::table('super_admins')
             ->where(['super_admins.id'=>$uid])
             ->get();
        
        
        return view('superadmin/edit_profile',$result);
        }
        public function update_profile(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $email = $request->email;
      
             
      
      
      
      if($request->hasfile('image'))
        {  $destination = 'public/assets/images/admin/'.$request->image;
          if(File::exists($destination))
          {
              File::delete($destination);
          }
          $file = $request->file('image');
          $filename = $file->getClientOriginalName();
          $file ->move('public/assets/images/admin/',$filename);
          $request->image = $filename;        
          $update = DB::update('update super_admins set image =? where id =?',[$request->image,$id]);
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

      $update = DB::update('update super_admins set name = ?,email = ? where id =?',[$name,$email,$id]);
      return redirect()->back()->with('message',' update Successfully');
    }

  
}
