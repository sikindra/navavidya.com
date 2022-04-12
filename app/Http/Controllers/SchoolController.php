<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\Testschoolfrogot;
use Crypt;
class SchoolController extends Controller
{
    public function index(){
        
        $result['data']=DB::table('school_users')
        ->get();
        
        
        return view('superadmin.school_list',$result);
    }
    
    function add(){
        return view('admin.add_school');
    }
    function add1(){
        return view('superadmin.add_school');
    }
    public function schooladmin(Request $request){
        if($request->session()->has('SCHOOL_LOGIN')){
            return redirect('school/dashboard');
        }else{
              $request->session()->flash('error','Access Denied');
              return view('school/login');
          }
          
     }
     public function auth1(Request $request)
     {
         
         $email=$request->post('email');
         $password=$request->post('password');

         $result=School::where(['email'=>$email])->first();
         if($result){
             if(Hash::check($request->post('password'),$result->password)){
                $request->session()->put('SCHOOL_LOGIN',true);
                $request->session()->put('SCHOOL_ID',$result);
                return redirect('http://127.0.0.1:8000/');

             }else{
                $request->session()->flash('error','please enter valid password details');
                return redirect('http://127.0.0.1:8000/');

             }
             
            

         }else{
             $request->session()->flash('error','please enter valid login details');
             return redirect('http://127.0.0.1:8000/');
         }




     }
     function auth(Request $request)
    {
        
        $result=DB::table('schools')->where(['email'=>$request->post('str_login_email')])->get();
        
        if(isset($result[0])){
            $db_pwd=Crypt::decrypt($result[0]->password);
            
            $is_verify=$result[0]->is_verify;
            if($is_verify==0){
                return response()->json(['status'=>"error",'msg'=>'Please Verify Email_id']);

            }
            if($db_pwd==$request->str_login_password){
                if($request->rememberme===null){
                    setcookie('login_email',$request->str_login_email,100);
                    setcookie('login_pwd',$request->str_login_password,100);
                }else{
                   setcookie('login_email',$request->str_login_email,time()+60*60*24*100);
                   setcookie('login_pwd',$request->str_login_password,time()+60*60*24*100);
                  
                }
                
          
                $request->session()->put('SCHOOL_LOGIN',true);
                $request->session()->put('SCHOOL_ID',$result[0]->id);
                $request->session()->put('SCHOOL_NAME',$result[0]->name);
                $request->session()->put('SCHOOL_EMAIL',$result[0]->email);
                $request->session()->put('SCHOOL_IMAGE',$result[0]->image);
                $status="success";
                $msg="";
                
                
                   
                    

            }else{
                $status="error";
               $msg="Please enter valid password";
            }
        }else{
            $status="error";
            $msg="Please enter valid email id";

        }
        return response()->json(['status'=>$status,'msg'=>$msg]);
        
    }
    
     public function dashboard(){
        return view('school.dashboard');
    }
    public function insert(Request $request){
      
        $school = new School;
        $school->school_name = $request->input('school_name');
        $school->city = $request->input('city');
        $school->pri_name = $request->input('pri_name');
        $school->address = $request->input('address');
        $school->email = $request->input('email');
        $school->pincode = $request->input('pincode');
        $school->phone = $request->input('phone');
        $school->no_of_login = $request->input('no_of_login');
        $school->moe = $request->input('moe');
        $school->description = $request->input('description');
        $school->categories = $request->input('categories');
  
        if($request)
        {
          
                
            
            $notification = array(
                'message' => 'Successfully get school Data',
                'alert-type' => 'success'
            );
            
        }
        else {
            echo "error";
            $notification = array(
                'message' => 'Error get school Data',
                'alert-type' => 'error'
            );
        }
  
        $school->save();
        return redirect()->back()->with('message','Add Successfully');
    }
    function frogot_password(Request $request)
    {
       $result=DB::table('schools')->where(['email'=>$request->post('str_frogot_email')])->get();
        $rand_id=rand(111111,999999);
        if(isset($result[0])){
            DB::table('schools')  
                ->where(['email'=>$request->str_frogot_email])
                ->update(['is_frogot_password'=>1,'rand_id'=>$rand_id]); 
            $details = [
                'rand_id' => $rand_id,
                'email' => $request->str_frogot_email,
               ];
            Mail::to($request->str_frogot_email)->send(new Testschoolfrogot($details));
            return response()->json(['status'=>'success','msg'=>'Please check your email if for password']);
        }
        else{
          return response()->json(['status'=>'error','msg'=>'Email id not registerd']);
        }
        
    }
    public function frogot_password_change(Request $request,$id)
    {
        

        $result=DB::table('schools')  
            ->where(['rand_id'=>$id])
            ->where(['is_frogot_password'=>1])
            ->get(); 

        if(isset($result[0])){
            $request->session();
        return view('front.school_frogot_password_change');
        }else{
            return redirect('/');
        }
    }
    public function frogot_password_update(Request $request)
    {
        
        DB::table('schools')->where(['id'=>$request->session()->get('FORGOT_PASSWORD_SCHOOL_ID')])
                ->update([
                    'is_frogot_password'=>0,
                    'password'=>Crypt::encrypt ($request->password),
                    'rand_id'=>''
                ]); 
                return response()->json(['status'=>'success','msg'=>'password update']);
        

       

        
    }
}
