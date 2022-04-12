<?php

namespace App\Http\Controllers;
use App\Models\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Mode;

use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
     public function index(Request $request){
        if($request->session()->has('ADMIN_LOGIN')){
               

            return redirect('admin/dashboard');
        }else{
              $request->session()->flash('error','Access Denied');
              return view('admin.login');
          }
          
     }
     public function auth(Request $request)
     {
         
         $email=$request->post('email');
         $password=$request->post('password');

         $result=Admin::where(['email'=>$email])->first();
         if($result){
             if(Hash::check($request->post('password'),$result->password)){
                $request->session()->put('ADMIN_LOGIN',true);
                $request->session()->put('ADMIN_ID',$result->id);
                $request->session()->put('ADMIN_NAME',$result->name);
                $request->session()->put('ADMIN_EMAIL',$result->email);
                $request->session()->put('ADMIN_IMAGE',$result->image);
                
                return redirect('admin/dashboard');

             }else{
                $request->session()->flash('error','please enter valid password details');
                return redirect('admin');

             }
             
            

         }else{
             $request->session()->flash('error','please enter valid login details');
             return redirect('admin');
         }




     }
     
    function dashboard(){
        if(session()->has('ADMIN_LOGIN')){
               
            $result= [    
                
                'aid' => session()->get('ADMIN_ID'),
                'aname' => session()->get('ADMIN_NAME'),
                'aemail' => session()->get('ADMIN_EMAIL'),
                'aimage' => session()->get('ADMIN_IMAGE'),

                
            ];
               

        }else{
            return redirect('admin');
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
           return view('admin.dashboard',compact("student","school",'book','book_level','categories','courses','course_levels','orders','testimonials','syllebuses','subcategories','result'));
           
        
        
        
        
            
    }
    function edit_profile(){
    return view('admin/edit_profile');
    }
    
     public function update_profile(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $email = $request->email;
      
             
      
      
      
      if($request->hasfile('image'))
      
        {
            $destinationPath = public_path() . '/assets/images/admin/';
            $destination = $destinationPath.$request->image;
          if(File::exists($destination))
          {
              File::delete($destination);
          }
          $file = $request->file('image');
          $filename = $file->getClientOriginalName();
          $file ->move($destinationPath,$filename);
          $request->image = $filename;        
          $update = DB::update('update admins set image =? where id =?',[$request->image,$id]);
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

      $update = DB::update('update admins set name = ?,email = ? where id =?',[$name,$email,$id]);
      return redirect()->back()->with('message',' update Successfully');
    }
    function admin_list(){
        $result['admin']=DB::table('admins')
       
        ->get();
        
        return view('superadmin/admin_list',$result);
    }
    function admin_user_update(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $state = $request->state;
        $email = $request->email;
        $phone = $request->phone;
        $city = $request->city;
        $pin = $request->pin;
        $country =$request->country;
        $address = $request->address;
        $image = $request->image;
       
       
      
      
      
      if($request->hasfile('image'))
        {
            $destinationPath = public_path() . '/assets/images/admin/';
            $destination = $destinationPath.$request->image;
          if(File::exists($destination))
          {
              File::delete($destination);
          }
          
         
          $file = $request->file('image');
          $filename = $file->getClientOriginalName();
          $file -> move($destinationPath, $filename);
          $request->image = $filename;     
          
          $update = DB::update('update admins set image =? where id =?',[$request->image,$id]);
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

      $update = DB::update('update admins set name = ?,email = ?,phone = ?,state = ?,country = ?, pin = ?, city = ?, address = ? where id =?',[$name,$email,$phone,$state,$country,$pin,$city,$address,$id]);
      return redirect()->back()->with('message',' update Successfully');
    
        
    }
    function admin_add(){
        return view('superadmin.admin_add');
    }
    function insert_admin(Request $request){
         
      $admin = new Admin;
      $admin->name = $request->input('name');
      $admin->state = $request->input('state');
      $admin->email = $request->input('email');
      $admin->phone = $request->input('phone');
      $admin->city = $request->input('city');
      $admin->pin = $request->input('pin');
      $admin->country = $request->input('country');
      $admin->address = $request->input('address');
      $admin->password = Hash::make($request->input('password'));
      $admin->status = $request->input('status');
      

       if($request->hasfile('image'))
        {
            $destinationPath = public_path() . '/assets/images/admin/';
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move($destinationPath, $filename);
            $admin->image = $filename;
                
            
            $notification = array(
                'message' => 'Successfully get category Data',
                'alert-type' => 'success'
            );
            
        }
      else {
          echo "error";
          $notification = array(
              'message' => 'Error get admin Data',
              'alert-type' => 'error'
          );
      }

      $admin->save();
      return redirect()->back()->with('message','admin add Successfully');
        
    }
    function admin_update(Request $request, $id){
       
        $result['admin']=DB::table('admins')
        ->where(['id'=>$id])
        ->get();
       
        return view('superadmin.admin_update',$result);
    }
    function admin_delete(Request $request, $id){
                 	$delete = DB::delete('delete from admins where id  = ?',[$id]);
            	if($delete)
        		{
        			 $notification = array(
                        'message' => 'Successfully get Admin Data',
                        'alert-type' => 'error'
                    );
                    
                }
                else {
                    echo "error";
                    $notification = array(
                        'message' => 'Error get Admin  Data',
                        'alert-type' => 'error'
                    );
                }
                return redirect()->back()->with('message','Admin  delete Successfully'); 
     }
     
     function admin_profile(Request $request){
         $id = $request->id;
        $password = Hash::make($request->password);
        if($request)
        { 
             $notification = array(
                'message' => 'Successfully  get  Data',
                'alert-type' => 'success'
          );
        }
      else {
          echo "error";
          $notification = array(
              'message' => 'Error get admin Data',
              'alert-type' => 'error'
          );
      }

      $update = DB::update('update 	admins set password = ? where id =?',[$password,$id]);
      return redirect()->back()->with('message',' update Successfully');
      
         
     }

    
    
    /*public function updatepassword(){
        $result=Admin::find(1);
        $result->password=Hash::make('sikindra');
        $result->save();
        } */
        
}
