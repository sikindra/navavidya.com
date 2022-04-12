<?php



namespace App\Http\Controllers;

use App\Models\Student;

use App\Models\Course_order;



use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\File;

use Crypt;

use PDF;
use Domodf\Dompdf;





use App\Mail\TestR;

use App\Mail\Testfrogot;



class StudentController extends Controller

{

    public function index(Request $request){

        if($request->session()->has('STUDENT_LOGIN')){

            return redirect('Student/dashboard');

        }else{

              $request->session()->flash('error','Access Denied');

              return view('Student/login');

          }

          

     }

     function dashboard(){



       return view('Student/dashboard');

        

        

        

    }

    function register()

    {

        return view('front.register');

    }

    function submit(Request $request)

    {

        

        $valid=Validator::make($request->all(),[

            'name' => 'required',

            'last_name' => 'required',

            'email' => 'required|email|unique:students,email',

            'phone' => 'required|numeric',

            'address1' => 'required',

            'address2' => 'required',

            'city' => 'required',

            'state' => 'required',

            'country' => 'required', 

            'zip' => 'required',

            'password' => 'required',

            

        ]);

        if(!$valid->passes()){

            return response()->json(['status'=>'error',

            'error'=>$valid->errors()->toArray()]);



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

                'password' =>Crypt::encrypt ($request->password),

                'created_at' =>date('y-m-d h:i:s'),

                'updated_at' =>date('y-m-d h:i:s'),

                'is_verify' =>0,

                'rand_id'  =>rand(111111,999999),

               ];

               Mail::to($request->email)->send(new TestR($details));

               $query=DB::table('students')->insert($details);

               if($query){

                   return response()->json(['status'=>'success',

                   'msg'=>"Registraction successfully"]);

               }

        }

    }

    function school_register(Request $request)

    {

        

         $details = [

                'school_name' => $request->name,

                'pri_name' => $request->p_name,

                'email' => $request->email,

                'phone' => $request->phone,

                'address' => $request->address,

                'city' => $request->city,

                'categories' => implode(",",$request->Category),

                'row_status' =>'R',

                'moe' => implode(",",$request->Course),

                'pincode' => $request->pin,

                'no_of_login'=>0,

                'description'=> $request->description,

                

               ];

               $query=DB::table('school_users')->insert($details);

               if($query){

                   return response()->json(['status'=>'success',

                   'msg'=>"Registraction successfully"]);

               }

        

       

    }

    function auth(Request $request)

    {

        

        $result=DB::table('students')->where(['email'=>$request->post('str_login_email')])->get();

        

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

                

          

                $request->session()->put('STUDENT_LOGIN',true);

                $request->session()->put('STUDENT_ID',$result[0]->id);

                $request->session()->put('STUDENT_NAME',$result[0]->name);

                $request->session()->put('STUDENT_EMAIL',$result[0]->email);

                $request->session()->put('STUDENT_IMAGE',$result[0]->image);

                $status="success";

                $msg="";

                

                $rand=rand(111111111,999999999);

		        $rand_id=session()->get('USER_TEMP_ID',$rand);

                DB::table('carts')  

                    ->where(['user_id'=>$rand_id,'user_type'=>'Not_Reg'])

                    ->update(['user_id'=>$result[0]->id,'user_type'=>'Reg']);

                    

                   

                    



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

    function verification()

    {

        return view ('front.verification');

    }

    public function email_verification(Request $request)

    {

        $rand_id=$request->post('rand_id');



        $result=DB::table('students')  

            ->where(['rand_id'=>$rand_id])

            ->where(['is_verify'=>0])

            ->get(); 



        if(isset($result[0])){

            DB::table('students')  

            ->where(['id'=>$result[0]->id])

            ->update(['is_verify'=>1,'rand_id'=>'']);

        return view('front.verification1');

        }else{

            return redirect('/');

        }

    }

    function frogot_password(Request $request)

    {

       $result=DB::table('students')->where(['email'=>$request->post('str_frogot_email')])->get();

        $rand_id=rand(111111,999999);

        if(isset($result[0])){

            DB::table('students')  

                ->where(['email'=>$request->str_frogot_email])

                ->update(['is_frogot_password'=>1,'rand_id'=>$rand_id]); 

            $details = [

                'name' => $request->name,

                'rand_id' => $rand_id,

                'email' => $request->str_frogot_email,

               ];

            Mail::to($request->str_frogot_email)->send(new Testfrogot($details));

            return response()->json(['status'=>'success','msg'=>'Please check your email if for password']);

        }

        else{

          return response()->json(['status'=>'error','msg'=>'Email id not registerd']);

        }

        

    }

    public function frogot_password_change(Request $request,$id)

    {

        



        $result=DB::table('students')  

            ->where(['rand_id'=>$id])

            ->where(['is_frogot_password'=>1])

            ->get(); 



        if(isset($result[0])){

            $request->session()->put('FORGOT_PASSWORD_STUDENT_ID',$result[0]->id);

        return view('front.frogot_password_change');

        }else{

            return redirect('/');

        }

    }

    public function frogot_password_update(Request $request)

    {

              $result=DB::table('students')->where(['id'=>$request->session()->get('FORGOT_PASSWORD_STUDENT_ID')])

                ->update([

                    'is_frogot_password'=>0,

                    'password'=>Crypt::encrypt ($request->password),

                    'rand_id'=>''

                ]); 

                return response()->json(['status'=>'success','msg'=>'password update']);

        



       



        

    }

    function my_order(Request $request){

       

        $result['orders']=DB::table('orders')

        

        ->leftJoin('orders_status','orders_status.id','=','orders.order_status')

        ->where(['orders.user_id'=>$request->session()->get('STUDENT_ID')])

        ->where(['orders.payment_status'=>'success'])

       

        ->select('orders.*','orders_status.orders_status')

        ->get();

         

       

        return view('Student/my_order',$result);

    }

    function order_details(Request $request, $id){

       

        $result['product_details']=DB::table('orders_details')

        ->leftJoin('orders','orders.id','=','orders_details.orders_id')

        ->leftJoin('orders_status','orders_status.id','=','orders.order_status')

        ->leftJoin('book_levels','book_levels.bk_evel_id','=','orders_details.products_attr_id')

        ->leftJoin('books','books.book_id','=','orders_details.product_id')

        ->where(['orders.id'=>$id])

        ->where(['orders.user_id'=>$request->session()->get('STUDENT_ID')])

        ->select('orders.*','orders_status.*','orders_details.price','orders_details.qty','books.title','book_levels.name as book_name','book_levels.image')

     

        

        ->get(); 

        

       

       if(!isset($result['product_details'][0])){

           return redirect('/');



       }

      

        

        return view('Student/order_details',$result);

    }

    function order_payment_details(Request $request, $id){

         $result['product_details']=DB::table('course_details')

         ->leftJoin('course_orders','course_orders.id','=','course_details.orders_id')

         ->leftJoin('course_levels','course_levels.level_id','=','course_details.products_attr_id')

         ->leftJoin('courses','courses.course_id','=','course_details.product_id')

         ->leftJoin('modes','modes.id','=','courses.type_id')

         ->leftJoin('categories','categories.id','=','courses.cat_id')

         ->where(['course_orders.id'=>$id])

         ->where(['course_orders.user_id'=>$request->session()->get('STUDENT_ID')])

         ->select('course_orders.*','course_orders.name as names','courses.course_name','courses.course_type','categories.names as name1','course_levels.level','course_levels.price','course_levels.level_img_file_name as image','modes.name')

         ->get(); 

        

         if(!isset($result['product_details'][0])){

           return redirect('/');



       }

       

       return view('Student/order_payment_details',$result);



       

    }

    function student_data_insert(Request $request){

        

         $cid=$request->post('cat');

         $sub_cat_id=$request->post('sub_cat_id');

         

         $result['course_details']=DB::table('course_details')

         ->leftJoin('course_orders','course_orders.id','=','course_details.orders_id')

         ->where(['course_details.product_id'=>$sub_cat_id])

         ->select('course_orders.name','course_details.orders_id','course_orders.total_amt','course_orders.coupon_value','course_orders.payment_id','course_orders.payment_status','course_orders.order_status')

         ->get();

         

         if(!isset($result['course_details'][0])){

           return redirect('/superadmin/student_data');



       }

       

       return view('superadmin/student_data',$result);

         

        

        

    }

      

        

       

    function joined_courses(Request $request){

      $result['course']=DB::table('course_orders')

        ->leftJoin('orders_status','orders_status.id','=','course_orders.order_status')

        ->leftJoin('course_details','course_details.id','=','course_orders.id')

        ->leftJoin('courses','courses.course_id','=','course_details.product_id')

        ->leftJoin('modes','modes.id','=','courses.type_id')

        ->leftJoin('course_levels','course_levels.level_id','=','course_details.products_attr_id')

        ->where(['course_orders.user_id'=>$request->session()->get('STUDENT_ID')])

       

        ->select('course_orders.*','orders_status.orders_status','courses.course_name','courses.course_type','course_levels.level','modes.name')

        ->get();

        

        return view('Student/joined_courses',$result);



    }

    function payment_details(Request $request){

        

            $result['course']=DB::table('course_orders')

            

            ->leftJoin('orders_status','orders_status.id','=','course_orders.order_status')

            ->where(['course_orders.user_id'=>$request->session()->get('STUDENT_ID')])

           

            

            ->select('course_orders.*','orders_status.orders_status')

            ->get();

        



        

        return view('Student/payment_details',$result);



    }

    function edit_profile(Request $request){

         $uid=$request->session()->get('STUDENT_ID');

            $result['students']=DB::table('students')

             ->where(['students.id'=>$uid])

             ->get();

            

        return view('Student.edit_profile',$result);

    }

    public function update_profile(Request $request)

    {

        $id = $request->id;

        $name = $request->name;

        $email = $request->email;

      

             

      

      

      

      if($request->hasfile('image'))

        {  $destination = 'public/assets/images/student/'.$request->image;

          if(File::exists($destination))

          {

              File::delete($destination);

          }

          $file = $request->file('image');

          $filename = $file->getClientOriginalName();

          $file ->move('public/assets/images/student/',$filename);

          $request->image = $filename;        

          $update = DB::update('update students set image =? where id =?',[$request->image,$id]);

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



      $update = DB::update('update students set name = ?,email = ? where id =?',[$name,$email,$id]);

      return redirect()->back()->with('message',' update Successfully');

    }

    public function student_profile(Request $request)

    {

       

        $id = $request->id;

        $password = Crypt::encrypt($request->password);

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



      $update = DB::update('update 	students set password = ? where id =?',[$password,$id]);

      return redirect()->back()->with('message',' update Successfully');

      

    }

    function pdf_genrate(Request $request, $name, $id){

        

            $result['orders']=DB::table('course_orders')
                           ->where(['name'=>$name])
                            ->where(['id'=>$id])

                            ->select('course_orders.*')

                        	->get();
                        

                        	/*$data = [

                        'orders' => $result,

                        

                    ];

                    $pdf = PDF::loadView('Student.pdf_genrat', $data);

                    return $pdf->download('navavidya.pdf');*/

                            

            return view('Student.pdf_genrate',$result);

      

        

        

    }

    function pdf(Request $request, $name, $id){

        

            $result['orders']=DB::table('orders')

                            

                            ->where(['name'=>$name])
                            ->where(['id'=>$id])

                            ->select('orders.*')

                        	->get();
                        	

                        	

                        	/*$data = [

                        'orders' => $result['orders'],

                        

                    ];
                    $dompdf = new Domodf();
                    $dompdf->loadHtml($data);
                    $dompdf->setPaper('A4', 'portrait');
                    $dompdf->render();
                    $dompdf->stream('navavidya.pdf');*/



                    

                            

            return view('Student.pdf',$result);

      

        

        

    }

    

    

    





    

}

