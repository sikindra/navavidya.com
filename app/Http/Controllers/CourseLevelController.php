<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course_level;
use App\Models\Course;
use App\Models\Mode;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Payment;
use Monolog\SignalHandler;
use Razorpay\Api\Api;
use App\Mail\TestRR;
use Illuminate\Support\Facades\Mail;
use Razorpay\Api\Errors\SignatureVerificationError;
use Session;
class CourseLevelController extends Controller
{
    public function index(){
        $result['course_level']=Course_level::all();
        return view('admin.course_level',$result);
    }
    public function view($id,$class){
        $course=Course_level::all()->where('course_id', '=', $id);
        $course1=Course::all()->where('course_id', '=', $id);
        return view('admin.view_level',compact("course","course1"));
    }
    public function view1($id,$class){
        $course=Course_level::all()->where('course_id', '=', $id);
        $course1=Course::all()->where('course_id', '=', $id);
        return view('superadmin.view_level',compact("course","course1"));
    }
    public function live($course_id,$id)
    {   
        $cate=Category::all();
        
        return view('front.Live_Classes',compact("cate"));
        
        
    }
    public function level($course_id,$id)
    
    {   
        $lavel=Course_level::where('course_id', '=', $course_id)->where('type_id', '=', $id)->orderBy('level_id', 'asc')->take(25)
        ->get();
        $lavel1=Course_level::where('course_id', '=', $course_id)->where('type_id', '=', $id)->orderBy('level_id', 'asc')->take(1)
        ->get();
       
        $course=Course::all()->where('course_id', '=', $id);
        
        return view('front.Record_Class',compact("lavel","course","lavel1"));
       
    }
    function edit_view($id){
        $course_level=Course_level::all()->where('level_id', '=', $id);
        $mode=Mode::all()->where('status', '=', 'A');
            return view('admin.edit_view',compact("course_level","mode"));
    }
    function edit_view1($id){
        $course_level=Course_level::all()->where('level_id', '=', $id);
        $mode=Mode::all()->where('status', '=', 'A');
            return view('superadmin.edit_view',compact("course_level","mode"));
    }
    function view_update(Request $request){
        {
      
            $level_id = $request->level_id;
            $level = $request->level;
            $price = $request->price;
            $type_id = $request->type_id;
            $text_link = $request->text_link;
            $work_book_link = $request->work_book_link;
            $description = $request->description;
            $Syllabus = $request->Syllabus;
            $sample_video_file_name = $request->sample_video_file_name;
           
            
                   
            
            
            
            if($request->hasfile('image'))
              {  $destination = 'public/assets/uploads/courses_img/'.$request->image;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
                $file = $request->file('image');
                $filename = $file->getClientOriginalName();
                $file ->move('public/assets/uploads/courses_img/',$filename);
                $request->image = $filename;        
                $update = DB::update('update course_levels set level_img_file_name =? where level_id =?',[$request->image,$level_id]);
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
      
            $update = DB::update('update course_levels set level = ?, type_id = ?, price = ?, text_link = ?,work_book_link = ?,description = ?,Syllabus = ?, sample_video_file_name = ?
            where level_id =?',[$level,$type_id,$price,$text_link,$work_book_link,$description,$Syllabus,$sample_video_file_name,$level_id]);
            return redirect()->back()->with('message',' update Successfully');
          }
    }
    function add($id) {
        $course=Course::all()->where('course_id', '=', $id);
        $mode=Mode::all()->where('status', '=', 'A');
        return view('admin.add_level',compact("course","mode"));
    }
    function add1($id) {
        $course=Course::all()->where('course_id', '=', $id);
        $mode=Mode::all()->where('status', '=', 'A');
        return view('superadmin.add_level',compact("course","mode"));
    }
    public function insert(Request $request){
      
        $level = new Course_level;
        $level->course_id = $request->input('course_id');
        $level->level = $request->input('level');
        $level->price = $request->input('price');
        $level->text_link = $request->input('text_link');
        $level->type_id = $request->input('type_id');
        $level->work_book_link = $request->input('work_book_link');
        $level->description = $request->input('description');
        $level->Syllabus = $request->input('Syllabus');
        $level->sample_video_file_name = $request->input('sample_video_file_name');
  
        if($request->hasfile('level_img_file_name'))
        {
            $file = $request->file('level_img_file_name');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/assets/uploads/courses_img/', $filename);
            $level->level_img_file_name = $filename;
                
            
            $notification = array(
                'message' => 'Successfully get level Data',
                'alert-type' => 'success'
            );
            
        }
        else {
            echo "error";
            $notification = array(
                'message' => 'Error get level Data',
                'alert-type' => 'error'
            );
        }
  
        $level->save();
        return redirect()->back()->with('message','level_level Successfully');
    }
    public function add_to_cart1(Request $request)
    {
        
        if($request->session()->has('STUDENT_LOGIN')){
            

            if($request->session()->has('STUDENT_LOGIN')){
                $uid=$request->session()->get('STUDENT_ID');
                $user_type="Reg";
            }else{
                $uid=getUserTempId();
                $user_type="Not_Reg";
            }
            $plevel=$request->post('plevel');
        
            $blevel_id=$request->post('blevel_id');
            $pcourse_id=$request->post('pcourse_id');
            $result=DB::table('course_levels')
            ->select('course_levels.level_id')
            ->where(['level_id'=>$blevel_id])
           ->get();

          
           $course_levels_id=$result[0]->level_id;
           $check=DB::table('coursecarts')
            ->where(['user_id'=>$uid])
            ->where(['user_type'=>$user_type])
            ->where(['course_id'=>$pcourse_id])
            ->where(['product_level_id'=>$blevel_id])
            ->get();
            if(isset($check[0])){
                $update_id=$check[0]->id;
                if($plevel==0){
                    DB::table('coursecarts')
                        ->where(['id'=>$update_id])
                        ->delete();
                    $msg="removed";
                }else{
                    DB::table('coursecarts')
                        ->where(['id'=>$update_id])
                        ->update(['level'=>$plevel]);
                    $msg="updated";
                }
                
            }else{
                $id=DB::table('coursecarts')->insertGetId([
                    'user_id'=>$uid,
                    'user_type'=>$user_type,
                    'course_id'=>$pcourse_id,
                    'product_level_id'=>$blevel_id,
                    'level'=>$plevel,
                    'added_on'=>date('Y-m-d h:i:s')
                ]);
                $msg="Add successful";
                
            }
            return response()->json(['msg'=>$msg]);
           
          

        }
        else{
            $status="false";
            $msg="Please Login/Register First!!";
            
        }
        return response()->json(['status'=>$status,'msg'=>$msg]);
        
        
    }
    function join_level(Request $request,$id){
    
        
        
        $result['course']=DB::table('course_levels')
        ->leftJoin('courses','courses.course_id','=','course_levels.course_id')
        ->leftJoin('categories','categories.id','=','courses.cat_id')
        
         ->where(['level_id'=>$id])
         ->select('course_levels.price','course_levels.level_id','course_levels.course_id','course_levels.level','courses.course_name','categories.names')
         ->get();
         $course_id=$result['course'][0]->course_id;
         $result['course1']=DB::table('course_levels')
         ->where(['course_id'=>$course_id])
         
         ->select('course_levels.level as pid')
         ->orderBy('course_id', 'asc')->take(25)
         ->get();
         
        

         return view('front.join_level',$result);
        
    } 
    function course_cart(Request $request){
         $rand=rand(111111111,999999999);
		$rand_id=session()->put('USER_TEMP_ID',$rand);
        if($request->session()->has('STUDENT_LOGIN')){
            $uid=session()->get('STUDENT_ID');
            $user_type="Reg";
        }else{
            $uid=$rand_id;
            $user_type="Not_Reg";
        }
        $result['list']=DB::table('coursecarts')
                        	->leftJoin('course_levels','course_levels.level_id','=','coursecarts.product_level_id')
                        	->leftJoin('courses','courses.course_id','=','coursecarts.course_id')
                        	->where(['user_id'=>$uid])
                        	->where(['user_type'=>$user_type])
                        	->select('coursecarts.level','course_levels.level','course_levels.level_img_file_name','course_levels.price','courses.course_name','course_levels.level_id as attr_id','courses.course_id as pid')
                            ->get();
            
           
           
        return view('front.course_cart',$result);
        
    }
    function show_cart(Request $request){
               if(session()->has('STUDENT_LOGIN')){
        		$uid=session()->get('STUDENT_ID'); 
        		$user_type="Reg"; 
        	}else{
        		$uid=getUserTempId();
        		$user_type="Not_Reg";
        	}
        	$result['cart_data']=DB::table('coursecarts')
        	->leftJoin('course_levels','course_levels.level_id','=','coursecarts.product_level_id')
        	->leftJoin('courses','courses.course_id','=','coursecarts.course_id')
        	->where(['user_id'=>$uid])
        	
        	->select('coursecarts.level','course_levels.level','course_levels.level_id','course_levels.price','courses.course_name','courses.course_id')
        	
        	->get();
       
        if(isset($result['cart_data'][0])){
            if(session()->has('STUDENT_LOGIN')){
                $uid=session()->get('STUDENT_ID');
                $student_info=DB::table('students')
                   ->where(['id'=> $uid])
                   ->get();
                   $result['students']['name']=$student_info[0]->name;
                   $result['students']['email']=$student_info[0]->email;
                   $result['students']['phone']=$student_info[0]->phone;
                   $result['students']['address1']=$student_info[0]->address1;
                   $result['students']['address2']=$student_info[0]->address2;
                   $result['students']['city']=$student_info[0]->city;
                   $result['students']['state']=$student_info[0]->state;
                   $result['students']['country']=$student_info[0]->country;
                   $result['students']['zip']=$student_info[0]->zip;
            }else{
                $result['students']['name']='';
                $result['students']['email']='';
                $result['students']['phone']='';
                $result['students']['address1']='';
                $result['students']['address2']='';
                $result['students']['city']='';
                $result['students']['state']='';
                $result['students']['country']='';
                $result['students']['zip']='';
            }

           return view('front.show_cart',$result);
        }
        else{
            return redirect('/');
        }
       
        
    }
     public function create()
    {        
        return view('razorpay');
    }

    public function payment(Request $request)
    {
        
    }
    function place_order(Request $request)
    {
        $payment_url='';
        $rand_id=rand(111111,999999);
        if($request->session()->has('STUDENT_LOGIN')){
        }else{
            $valid=Validator::make($request->all(),[
                'email' => 'required|email|unique:students,email'
                
            ]);
            if(!$valid->passes()){
                return response()->json(['status'=>'error',
                'msg'=>"The email has already been taken."]);
    
            }else{
                
                $details = [
                    'name' => $request->name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'address1' => $request->address1,
                    'address2' => $request->address2,
                    'city' => $request->city,
                    'state' => $request->state,
                    'country' => $request->country,
                    'zip' => $request->zip,
                    'password' =>Crypt::encrypt($rand_id),
                    'created_at' =>date('y-m-d h:i:s'),
                    'updated_at' =>date('y-m-d h:i:s'),
                    'is_verify' =>1,
                    'rand_id'  =>$rand_id,
                    'is_frogot_password' =>0
                   ];

                   $user_id=DB::table('students')->insert($details);
                   $request->session()->put('STUDENT_LOGIN',true);
                   $request->session()->put('STUDENT_ID',$user_id);
                   $request->session()->put('STUDENT_NAME',$request->name);
                   Mail::to($request->email)->send(new PASSWORD($details));
                   $getUserTempId=getUserTempId();
                    DB::table('carts')  
                    ->where(['user_id'=>$getUserTempId,
                    'user_type'=>'Not_Reg'])
                    ->update(['user_id'=>$user_id,'user_type'=>'Reg']);

            }
          }
            $details = [
                    'coupon_code' => $request->coupon_code,
                   
                   ];
            $coupon_value=0;
            if($request->coupon_code!=''){
                
                        $result=DB::table('coupons')->where(['code'=>$request->coupon_code])->get();
        		
                
                if(isset($result[0])){
                    $value=$result[0]->value;
                    $type=$result[0]->type;
                    if($result[0]->status==1){
                        if($result[0]->is_one_time==1){
                            $status="error";
                            $msg="Coupon code already used";
                        }
                        else{
                            $min_order_amt=$result[0]->min_order_amt;
                            if($min_order_amt>0){
                                if(session()->has('STUDENT_LOGIN')){
                        		$uid=session()->get('STUDENT_ID'); 
                        		$user_type="Reg"; 
                        	}else{
                        		$uid=getUserTempId();
                        		$user_type="Not_Reg";
                        	}
                        	$result=DB::table('coursecarts')
                        	->leftJoin('course_levels','course_levels.level_id','=','coursecarts.product_level_id')
                        	->leftJoin('courses','courses.course_id','=','coursecarts.course_id')
                        	->where(['user_id'=>$uid])
                        	
                        	->select('coursecarts.level','course_levels.level','course_levels.sample_video_file_name','course_levels.level_syllabus_file_name','course_levels.level_id','course_levels.price','courses.course_name','courses.course_id')
                        	
                        	->get();
                            
                                
                                $totalPrice=0;
                                foreach($result as $list1){
                                $totalPrice=$totalPrice+($list1->price);
                              }
                              if($min_order_amt<$totalPrice){
                                $status="success";
                                $msg="Coupon code Applied";
                              }else{
                                $status="error";
                                $msg="Coupon code must be grater then $min_order_amt";
                              }
        
                            }else{
                                $status="success";
                                $msg="Coupon code Applied";
        
                            }
                        }
                       
        
                    }else{
                        $status="error";
                    $msg="Coupon code deactived";
        
                    }
                    
                   
                }else{
                    $status="error";
                    $msg="Please enter valid Coupon code";
        
                }
               $coupon_code_value=0;
                if($status=='success'){
                    if($type=='Value'){
        				$coupon_code_value=$value;
                        $totalPrice=$totalPrice-$value;
                    }if($type=='Per'){
                        $newlPrice=($value/100)*$totalPrice;
                        $totalPrice=round($totalPrice-$newlPrice);
        				$coupon_code_value=$newlPrice;
        
                    }
        
                }
                if($status=='success'){
                    $coupon_value=$coupon_code_value;

                }else{
                    return response()->json(['status'=>'false','msg'=>$msg]);
                }

            }
           
            $uid=$request->session()->get('STUDENT_ID');
           
            
            
            if(session()->has('STUDENT_LOGIN')){
                		$uid=session()->get('STUDENT_ID'); 
                		$user_type="Reg"; 
                	}else{
                		$uid=getUserTempId();
                		$user_type="Not_Reg";
                	}
                $result=DB::table('coursecarts')
                	->leftJoin('course_levels','course_levels.level_id','=','coursecarts.product_level_id')
                	->leftJoin('courses','courses.course_id','=','coursecarts.course_id')
                	->where(['user_id'=>$uid])
                	
                	->select('coursecarts.level','course_levels.level','course_levels.sample_video_file_name','course_levels.level_syllabus_file_name','course_levels.level_id','course_levels.price','courses.course_name','courses.course_id')
                	
                	->get();
                    
                	
                        
                        $totalPrice=0;
                        foreach($result as $list1){
                        $totalPrice=$totalPrice+($list1->price);
                        $video = $list1->sample_video_file_name;
                        $file = $list1->level_syllabus_file_name;
                        Session::put('video', $video);
                        Session::put('file', $file);

                        
                      }
                      $email = $request->email;
                   Session::put('email_id', $email);
                     
                $details = [
                    'user_id' =>$uid,
                    'name' => $request->name,
                    'email' => $request->email,
                    'mobile' => $request->phone,
                    'address1' => $request->address1,
                    'city' => $request->city,
                    'state' => $request->state,
                    'pincode' => $request->zip,
                    'total_amt' => $totalPrice,
                    'payment_status' =>"Pending",
                    'order_status' =>1,
                    'coupon_value' =>$coupon_value,
                    'coupon_code' => $request->coupon_code,
                    'payment_type' => $request->payment_type,
                    'added_on' =>date('y-m-d h:i:s'),
                    
                    
                   
                    
                     
                   ];
                   
                    
                    

                   
                    

                   
                
                   $order_id=DB::table('course_orders')->insertGetId($details);
                   
                   if($order_id>0){
                    foreach($result as $list){
                        
                        $productDetailArr['product_id']=$list->course_id;
                        $productDetailArr['products_attr_id']=$list->level_id;
                        $productDetailArr['price']=$list->price;
                       
                       
                        $productDetailArr['orders_id']=$order_id;
                        $order = $productDetailArr['orders_id']=$order_id;
                       
                        $result['course_details']=DB::table('course_details')->insert($productDetailArr);
                        Session::put('order', $order);
                        
       
                       
                       }
                        
                     
                       
                       if($request->payment_type=='Gateway')
                       {
                           $name = $request->input('name');
                           $amount = $request->input('amt');
                           $api = uniqid();
                          
                            
                            $orderId = $api;
                            
                            Session::put('orderId', $orderId);
                            if(isset($orderId)){
                                 $txn_id=$orderId;
                                 $result=DB::table('course_orders')
                                ->where(['id'=>$order_id])
                                ->update(['txn_id'=>$txn_id]);
                                

                            }else{
                                $msg="";
                                foreach($response->message as $key=>$val){
                                   $msg.=$key.": ".$val[0].'<br/>';

                               }
                               return response()->json(['status'=>'error','msg'=>$msg,]);
                                

                            }
                            $status="success";
                            $msg="Order placed";
                            
                           
                            
                       }
                   

                   }else{
                    $status="false";
                    $msg="please try after sometime";
                   }
                

        
                
        return response()->json(['status'=>$status,'msg'=>$msg,]);
    }
    function confirm_join(Request $request){
        if($request->session()->has('STUDENT_LOGIN')){
            $uid=$request->session()->get('STUDENT_ID');
            $user_type="Reg";
        }else{
            $uid=getUserTempId();
            $user_type="Not_Reg";
        }
        $ptotal_price=$request->post('ptotal_price');
        $pcoupon_code=$request->post('pcoupon_code');
    
        $pcourses=$request->post('pcourses');
        $blevel_id=$request->post('blevel_id');
        $result=DB::table('course_levels')
        ->select('course_levels.level_id')
        ->where(['level_id'=>$pcourses])
       ->get();
       
       $level_id=$result[0]->level_id;
       $check=DB::table('joined_course')
       ->where(['student_id'=>$uid])
       
       ->where(['course_id'=>$blevel_id])
       ->where(['level_id'=>$pcourses])
       ->get();
       if(isset($check[0])){
        $update_id=$check[0]->level_id;
        if($pcourses==0){
            DB::table('joined_course')
                ->where(['join_id'=>$update_id])
                ->delete();
            $msg="removed";
        }else{
            DB::table('joined_course')
                ->where(['level_id'=>$update_id])
                ->update(['total_amount'=>$ptotal_price,'coupon_code'=>$pcoupon_code]);
               
                
            $msg="updated";
        }
        
    }else{
        $id=DB::table('joined_course')->insertGetId([
            'student_id'=>$uid,
            'course_id'=>$blevel_id,
            'level_id'=>$pcourses,
           
            
            'date_joined'=>date('Y-m-d h:i:s')
        ]);
        $msg="Add successful";
        
    }
    }
    function razorpay(Request $request){
        
        $payment_id =$request->post('payment_id');
        $id =$request->session()->get('orderId');
        
        $details = [
        'payment_id' => $request->post('payment_id'),
        'order_id' => $request->session()->get('order'),  
        'video' =>$request->session()->get('video'),
        'file' =>$request->session()->get('file'),
        'email_id' =>$request->session()->get('email_id'),
        'payment_status' =>'success',
        

        ];
        Mail::to($request->session()->get('email_id'))->send(new TestRR($details));
        if($payment_id!==null){
            if($payment_id==$payment_id){
                $id =$request->session()->get('orderId');
                if(session()->has('STUDENT_LOGIN')){
                        		$uid=session()->get('STUDENT_ID'); 
                        		$user_type="Reg"; 
                        	}else{
                        		$uid=getUserTempId();
                        		$user_type="Not_Reg";
                        	}
            $result=DB::table('course_orders')
                         ->where(['txn_id'=>$id])
                         ->update(['payment_status'=>'success', 'payment_id'=>$request->get('payment_id')]);
                        
                         DB::table('coursecarts')
                         ->where(['user_id'=>$uid,'user_type'=>'Reg'])
                         ->delete();
                         DB::table('joined_course')
                         ->where(['student_id'=>$uid])
                         ->delete();
                        $request->session()->get('orderId');
                         $status="success";
                         $msg="Order placed";
                         $redirect_url='https://navavidya.com/test/course_placed';
                 
                

            }
            else{
                
                $result=DB::table('course_orders')
                         ->where(['txn_id'=>$id])
                         ->update(['payment_status'=>'fail']);
                         
                $status="Fail";
                $redirect_url='https://navavidya.com/test/order_fail';
            }
            
            
                        
                         
                        
        }else{
            die('Something went Wrong');
        }
       
    }
    function add_tocart(Request $request){
        if($request->session()->has('STUDENT_LOGIN')){
            if($request->session()->has('STUDENT_LOGIN')){
                $uid=$request->session()->get('STUDENT_ID');
                $user_type="Reg";
            }else{
                $uid=getUserTempId();
                $user_type="Not_Reg";
            }
            $pexecutive_id=$request->post('pexecutive_id');
        
            $blevel_id=$request->post('blevel_id');
            $pcourse_id=$request->post('pcourse_id');
            $result=DB::table('course_levels')
            ->select('course_levels.level_id')
            ->where(['level_id'=>$blevel_id])
           ->get();
           
           $level_id=$result[0]->level_id;
           $check=DB::table('joined_course')
           ->where(['student_id'=>$uid])
           
           ->where(['course_id'=>$pcourse_id])
           ->where(['level_id'=>$blevel_id])
           ->get();
           if(isset($check[0])){
            $update_id=$check[0]->join_id;
            if($blevel_id==0){
                DB::table('joined_course')
                    ->where(['join_id'=>$update_id])
                    ->delete();
                $msg="removed";
            }else{
                DB::table('joined_course')
                    ->where(['level_id'=>$update_id])
                    ->update(['executive'=>$pexecutive_id]);
                    
                $msg="updated";
            }
            
        }else{
            $id=DB::table('joined_course')->insertGetId([
                'student_id'=>$uid,
                'course_id'=>$pcourse_id,
                'level_id'=>$blevel_id,
                'executive'=>$pexecutive_id,
                
                'date_joined'=>date('Y-m-d h:i:s')
            ]);
            $msg="Add successful";
            
        }
        return response()->json(['msg'=>$msg]);

            


        
        }
        else{
            $status="false";
            $msg="Please Login/Register First!!";

        }
 }
 function add_to_cart_course(Request $request){
    $pbook_id=$request->post('pbook_id');
    $delete = DB::delete('delete from joined_course where course_id  = ?',[$pbook_id]);
    $delete = DB::delete('delete from coursecarts where course_id  = ?',[$pbook_id]);
    if($delete)
    {
        $msg="removed";
        
    }
    return response()->json(['msg'=>$msg]);
    
     

 }
 function remove_coupon_code1(Request $request)
    {
        $totalPrice=0;
        $result=DB::table('coupons')->where(['code'=>$request->post('coupon_code')])->get();
        
                    if(session()->has('STUDENT_LOGIN')){
                		$uid=session()->get('STUDENT_ID'); 
                		$user_type="Reg"; 
                	}else{
                		$uid=getUserTempId();
                		$user_type="Not_Reg";
                	}
                	$result=DB::table('joined_course')
                	->leftJoin('course_levels','course_levels.level_id','=','joined_course.level_id')
                	->leftJoin('courses','courses.course_id','=','joined_course.course_id')
                	->where(['student_id'=>$uid])
                	
                	->select('joined_course.executive','course_levels.level','course_levels.level_id','course_levels.price','courses.course_name','courses.course_id')
                	
                	->get();
                        
                        $totalPrice=0;
                        foreach($result as $list1){
                        $totalPrice=$totalPrice+($list1->price);
                      }
       
       
        
       return response()->json(['status'=>'success','msg'=>'Coupon code Remove','totalPrice'=>$totalPrice]);
    }
 function apply_coupon_code1(Request $request)
    {
         $details = [
                    'coupon_code' => $request->coupon_code,
                   
                   ];
        $totalPrice=0;
        $result=DB::table('coupons')->where(['code'=>$request->coupon_code])->get();
        
        
        if(isset($result[0])){
            $value=$result[0]->value;
            $type=$result[0]->type;
            if($result[0]->status==1){
                if($result[0]->is_one_time==1){
                    $status="error";
                    $msg="Coupon code already used";
                }
                else{
                    $min_order_amt=$result[0]->min_order_amt;
                    if($min_order_amt>0){
                        if(session()->has('STUDENT_LOGIN')){
                		$uid=session()->get('STUDENT_ID'); 
                		$user_type="Reg"; 
                	}else{
                		$uid=getUserTempId();
                		$user_type="Not_Reg";
                	}
                	$result=DB::table('coursecarts')
                	->leftJoin('course_levels','course_levels.level_id','=','coursecarts.product_level_id')
                	->leftJoin('courses','courses.course_id','=','coursecarts.course_id')
                	->where(['user_id'=>$uid])
                	
                	->select('coursecarts.level','course_levels.level','course_levels.level_id','course_levels.price','courses.course_name','courses.course_id')
                	
                	->get();
                        
                        $totalPrice=0;
                        foreach($result as $list1){
                        $totalPrice=$totalPrice+($list1->price);
                      }
                      if($min_order_amt<$totalPrice){
                        $status="success";
                        $msg="Coupon code Applied";
                      }else{
                        $status="error";
                        $msg="Coupon code must be grater then $min_order_amt";
                      }

                    }else{
                        $status="success";
                        $msg="Coupon code Applied";

                    }
                }
               

            }else{
                $status="error";
            $msg="Coupon code deactived";

            }
            
           
        }else{
            $status="error";
            $msg="Please enter valid Coupon code";

        }
       $coupon_code_value=0;
        if($status=='success'){
            if($type=='Value'){
				$coupon_code_value=$value;
                $totalPrice=$totalPrice-$value;
            }if($type=='Per'){
                $newlPrice=($value/100)*$totalPrice;
                $totalPrice=round($totalPrice-$newlPrice);
				$coupon_code_value=$newlPrice;

            }

        }
        
       return response()->json(['status'=>$status,'msg'=>$msg,'totalPrice'=>$totalPrice,'coupon_code_value'=>$coupon_code_value]);
       return view('front.show_cart',$result);
		
    }
    
    
    
    function course_placed(Request $request){
        
           return view('front.course_placed');

      
       
   }
    

}
