<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Course;
use App\Models\Course_level;
use App\Models\Book_level;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Crypt;
use App\Mail\PASSWORD;
use Illuminate\Support\Facades\Mail;
use App\Payment;
use Monolog\SignalHandler;
use Razorpay\Api\Api;
use App\Mail\TestR1;

use Razorpay\Api\Errors\SignatureVerificationError;
use Session;

class BookController extends Controller  
{
    public function index()
    {
        $result['data']=Book::all();
        return view('admin.book',$result);
        
    }
    public function index1()
    {
        $result['data']=Book::all();
        return view('superadmin.book',$result);
        
    }
    public function bookcat(Request $request, $id){
        $sort="";
        $sort_text="";
        $filter_price_start="";
        $filter_price_end="";
        if($request->get('sort')!==null){
            $sort=$request->get('sort');
        }
        $query=DB::table('books');
        $query=$query->leftJoin('book_levels','book_levels.book_id','=','books.book_id');
        $query=$query->where(['title'=>$id]);
        if($request->get('filter_price_start')!==null && $request->get
        ('filter_price_end')!==null){
            $filter_price_start=$request->get('filter_price_start');
            $filter_price_end=$request->get('filter_price_end');
            if($filter_price_start>0 && $filter_price_end>0){
                $query=$query->whereBetween('book_levels.price',[$filter_price_start,$filter_price_end]);
                $filter_price_start=$filter_price_start;
                $filter_price_end=$filter_price_end;
            }
            
        }
        if($sort=='name'){
            $query=$query->orderBy('book_levels.name','desc');
            $sort_text="Book Name";

        }
        if($sort=='date'){
            $query=$query->orderBy('book_levels.bk_evel_id','asc');
            $sort_text="Book Date";

        }
        if($sort=='price_asc'){
            $query=$query->orderBy('book_levels.price','asc');
            $sort_text="Book price: low to high";
           

        }
        if($sort=='price-desc'){
            $query=$query->orderBy('book_levels.price','desc');
            $sort_text="Book price: high to low";

        }
        $query=$query->get();
        $result['books']=$query;
        foreach($result['books'] as $list){
            $result['book_level'][$list->book_id]=
            DB::table('book_levels')
            ->where(['book_id'=>$list->book_id])
            ->get();

        }
        
        $result['books1']=DB::table('books')
        ->get();
       
            $result['sort']=$sort;
            $result['sort_text']=$sort_text;
            $result['filter_price_start']=$filter_price_start;
            $result['filter_price_end']=$filter_price_end;
    
       
    return view('front.book_level_list', $result);
        

    }
    public function show(Request $request)
    {
        $sort="";
        $sort_text="";
        $filter_price_start="";
        $filter_price_end="";
        if($request->get('sort')!==null){
            $sort=$request->get('sort');
        }
        $query=DB::table('book_levels');
        $query=$query->where(['book_levels.status'=>1]);
        
        if($request->get('filter_price_start')!==null && $request->get
        ('filter_price_end')!==null){
            $filter_price_start=$request->get('filter_price_start');
            $filter_price_end=$request->get('filter_price_end');
            if($filter_price_start>0 && $filter_price_end>0){
                $query=$query->whereBetween('book_levels.price',[$filter_price_start,$filter_price_end]);
                $filter_price_start=$filter_price_start;
                $filter_price_end=$filter_price_end;
            }
            
        }
        if($sort=='name'){
            $query=$query->orderBy('book_levels.name','desc');
            $sort_text="Book Name";

        }
        if($sort=='date'){
            $query=$query->orderBy('book_levels.bk_evel_id','asc');
            $sort_text="Book Date";

        }
        if($sort=='price_asc'){
            $query=$query->orderBy('book_levels.price','asc');
            $sort_text="Book price: low to high";
           

        }
        if($sort=='price-desc'){
            $query=$query->orderBy('book_levels.price','desc');
            $sort_text="Book price: high to low";

        }
        $query=$query->get();
        $result['books']=$query;
        foreach($result['books'] as $list){
            $result['book_level'][$list->book_id]=
            DB::table('book_levels')
            ->where(['book_id'=>$list->book_id])
            ->get();

        }
        
        $result['books1']=DB::table('books')
        ->get();
       
            $result['sort']=$sort;
            $result['sort_text']=$sort_text;
            $result['filter_price_start']=$filter_price_start;
            $result['filter_price_end']=$filter_price_end;
    
       
    return view('front.book_level_list', $result);
        

    }
    function checkout(){
         
        
       $rand=rand(111111111,999999999);
		$rand_id=session()->put('USER_TEMP_ID',$rand);
       if(session()->has('STUDENT_LOGIN')){
        		$uid=session()->get('STUDENT_ID'); 
        		$user_type="Reg"; 
        	}else{
        		$uid=session()->get('USER_TEMP_ID',$rand);
        		$user_type="Not_Reg";
        	}
        		$result['cart_data']=DB::table('carts')
            	->leftJoin('book_levels','book_levels.bk_evel_id','=','carts.product_book_id')
            	->leftJoin('books','books.book_id','=','carts.book_id')
            	->where(['user_id'=>$uid])
            	->where(['user_type'=>$user_type])
            	->select('carts.qty','book_levels.name','book_levels.image','book_levels.price','books.title','book_levels.bk_evel_id as pid','books.book_id as attr_id')
            	
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

            return view('front.checkout',$result);
        }
        else{
            return redirect('/');
        }
        
    }
    

    public function list(Request $request, $id){
        

        $result['book_level']=
            DB::table('book_levels')
            ->where(['name'=>$id = str_replace('_', ' ', $id)])
            ->where(['status'=>1])
            ->get();
         
        foreach($result['book_level'] as $list){
            $result['book_levels'][$list->bk_evel_id]=
                DB::table('book_levels')
                ->where(['bk_evel_id'=>$list->bk_evel_id])
                ->get();
        }
        $result['book']=
        DB::table('books')
        ->where(['book_id'=>$result['book_level'][0]->book_id])
       ->get();
    foreach($result['book'] as $list){
        $result['books'][$list->book_id]=
            DB::table('books')
            ->where(['book_id'=>$list->book_id])
            ->get();
    }
       
        $result['related_book']=
            DB::table('book_levels')
            ->where(['book_id'=>$result['book_level'][0]->book_id])
            ->where(['status'=>1])
            ->where('name','!=',$id)
            ->get();
        foreach($result['related_book'] as $list){
            $result['book_levels'][$list->bk_evel_id]=
                DB::table('book_levels')
                ->where(['bk_evel_id'=>$list->bk_evel_id])
                ->get();
        }
        
        
        return view('front.book_list',$result);
       
    }
    
    public function edit($id)
    {
        
        $book_level=Book_level::all()->where('book_id', '=', $id);
        return view('admin.book_level',compact("book_level"));
      
        
    }
     public function edit1($id)
    {
        
        $book_level=Book_level::all()->where('book_id', '=', $id);
        return view('superadmin.book_level',compact("book_level"));
      
        
    }
    public function add(){
        return view ('admin.add_book');
    }
    
    public function book(Request $request, $id){
        

        $result['book_level']=
            DB::table('book_levels')
            ->where(['name'=>$id = str_replace('_', ' ', $id)])
            ->where(['status'=>1])
            ->get();
         
        foreach($result['book_level'] as $list){
            $result['book_levels'][$list->bk_evel_id]=
                DB::table('book_levels')
                ->where(['bk_evel_id'=>$list->bk_evel_id])
                ->get();
        }
        $result['book']=
        DB::table('books')
        ->where(['book_id'=>$result['book_level'][0]->book_id])
       ->get();
    foreach($result['book'] as $list){
        $result['books'][$list->book_id]=
            DB::table('books')
            ->where(['book_id'=>$list->book_id])
            ->get();
    }
       
        $result['related_book']=
            DB::table('book_levels')
            ->where(['book_id'=>$result['book_level'][0]->book_id])
            ->where(['status'=>1])
            ->where('name','!=',$id)
            ->get();
        foreach($result['related_book'] as $list){
            $result['book_levels'][$list->bk_evel_id]=
                DB::table('book_levels')
                ->where(['bk_evel_id'=>$list->bk_evel_id])
                ->get();
        }
        
        
        return view('front.book',$result);
       
    }
    public function insert(Request $request){
      
        $book = new Book;
        $book->title = $request->input('title');
        $book->level = $request->input('level');
        $book->publisher = $request->input('publisher');
        
  
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/assets/uploads/books/', $filename);
            $book->image = $filename;
                
            
            $notification = array(
                'message' => 'Successfully get book Data',
                'alert-type' => 'success'
            );
            
        }
        else {
            echo "error";
            $notification = array(
                'message' => 'Error get book Data',
                'alert-type' => 'error'
            );
        }
  
        $book->save();
        return redirect()->back()->with('message','book_level Successfully');
    }
    
    
    public function add_to_cart(Request $request)
    {
        if($request->session()->has('STUDENT_LOGIN')){
        	
        $rand=rand(111111111,999999999);
		$rand_id=session()->get('USER_TEMP_ID',$rand);
        if($request->session()->has('STUDENT_LOGIN')){
            $uid=$request->session()->get('STUDENT_ID');
            $user_type="Reg";
        }else{
            $uid=$rand_id;
            $user_type="Not_Reg";
        }
       
         
       
        $pqty=$request->post('pqty');
        
        $bk_evel_id=$request->post('bk_evel_id');
        $pbook_id=$request->post('pbook_id');

        $result=DB::table('book_levels')
            ->select('book_levels.bk_evel_id')
            ->where(['bk_evel_id'=>$bk_evel_id])
           ->get();
         
           $book_levels_id=$result[0]->bk_evel_id;


           $check=DB::table('carts')
            ->where(['user_id'=>$uid])
            ->where(['user_type'=>$user_type])
            ->where(['book_id'=>$pbook_id])
            ->where(['product_book_id'=>$book_levels_id])
            ->get();
            


        if(isset($check[0])){
            $update_id=$check[0]->id;
            if($pqty==0){
                DB::table('carts')
                    ->where(['id'=>$update_id])
                    ->delete();
                $msg="Removed Successful";
            }else{
                DB::table('carts')
                    ->where(['id'=>$update_id])
                    ->update(['qty'=>$pqty]);
                $msg="Updated Successful";
            }
            
        }else{
            $id=DB::table('carts')->insertGetId([
                'user_id'=>$uid,
                'user_type'=>$user_type,
                'book_id'=>$pbook_id,
                'product_book_id'=>$book_levels_id,
                'qty'=>$pqty,
                'added_on'=>date('Y-m-d h:i:s')
            ]);
            $msg="Add Successful";
            
        }
        
        $result=DB::table('carts')
            ->leftJoin('book_levels','book_levels.bk_evel_id','=','carts.product_book_id')
            ->leftJoin('books','books.book_id','=','carts.book_id')
            ->where(['user_id'=>$uid])
            ->where(['user_type'=>$user_type])
            ->select('carts.qty','book_levels.name','book_levels.image','book_levels.price','books.title','book_levels.bk_evel_id as pid','books.book_id as attr_id')
            
            ->get();
            return response()->json(['msg'=>$msg,'data'=>$result,'totalItem'=>count($result)]);
    }else{
            $status="false";
            $msg="Please Login/Register First!!";
            
        }
        return response()->json(['status'=>$status,'msg'=>$msg]);
    }
    function cart(Request $request){
        $rand=rand(111111111,999999999);
		$rand_id=session()->put('USER_TEMP_ID',$rand);
        if($request->session()->has('STUDENT_LOGIN')){
            $uid=session()->get('STUDENT_ID');
            $user_type="Reg";
        }else{
            $uid=$rand_id;
            $user_type="Not_Reg";
        }
        $result['list']=DB::table('carts')
            ->leftJoin('book_levels','book_levels.bk_evel_id','=','carts.product_book_id')
            ->leftJoin('books','books.book_id','=','carts.book_id')
            ->where(['user_id'=>$uid])
            ->where(['user_type'=>$user_type])
            ->select('carts.qty','carts.book_id','book_levels.name','book_levels.image','book_levels.price','books.title','books.book_id as pid','book_levels.bk_evel_id as attr_id')
            
            ->get();
            
           
           
        return view('front.cart',$result);
    
    }
    function search(Request $request, $str){
        
        $result['book']=
            DB::table('book_levels')
            ->where(['status'=>1])
            ->where('name','like',"%$str%")
            ->orwhere('price','like',"%$str%")
            ->get();
         
        foreach($result['book'] as $list){
            $result['book_levels']=
                DB::table('book_levels')
                ->where('name','like',"%$str%")
                ->orwhere('price','like',"%$str%")
                ->get();
        }
      

       return view('front.search',$result);
        
    }
   
    function apply_coupon_code(Request $request)
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
                	$result=DB::table('carts')
                	->leftJoin('book_levels','book_levels.bk_evel_id','=','carts.product_book_id')
                	->leftJoin('books','books.book_id','=','carts.book_id')
                	->where(['user_id'=>$uid])
                	->where(['user_type'=>$user_type])
                	->select('carts.qty','book_levels.name','book_levels.image','book_levels.price','books.title','book_levels.bk_evel_id as pid','books.book_id as attr_id')
                	
                	->get();
                       
                        $totalPrice=0;
                        foreach($result as $list){
                        $totalPrice=$totalPrice+($list->qty*$list->price);
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
        
    
    }
    function remove_coupon_code(Request $request)
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
                    $result=DB::table('carts')
                    ->leftJoin('book_levels','book_levels.bk_evel_id','=','carts.product_book_id')
                    ->leftJoin('books','books.book_id','=','carts.book_id')
                    ->where(['user_id'=>$uid])
                    ->where(['user_type'=>$user_type])
                    ->select('carts.qty','book_levels.name','book_levels.image','book_levels.price','books.title','book_levels.bk_evel_id as pid','books.book_id as attr_id')
                    
                    ->get();
                        $totalPrice=0;
                        foreach($result as $list){
                        $totalPrice=$totalPrice+($list->qty*$list->price);
                      }
       
       
        
       return response()->json(['status'=>'success','msg'=>'Coupon code Remove','totalPrice'=>$totalPrice]);
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
                'msg'=>"Please login to place order"]);
                
    
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
                	$result=DB::table('carts')
                	->leftJoin('book_levels','book_levels.bk_evel_id','=','carts.product_book_id')
                	->leftJoin('books','books.book_id','=','carts.book_id')
                	->where(['user_id'=>$uid])
                	->where(['user_type'=>$user_type])
                	->select('carts.qty','book_levels.name','book_levels.image','book_levels.price','books.title','book_levels.bk_evel_id as pid','books.book_id as attr_id')
                	
                	->get();
                       
                        $totalPrice=0;
                        foreach($result as $list){
                        $totalPrice=$totalPrice+($list->qty*$list->price);
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
                    return response()->json(['status'=>'false','msg'=>$arr['msg']]);
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
                	$result=DB::table('carts')
                	->leftJoin('book_levels','book_levels.bk_evel_id','=','carts.product_book_id')
                	->leftJoin('books','books.book_id','=','carts.book_id')
                	->where(['user_id'=>$uid])
                	->where(['user_type'=>$user_type])
                	->select('carts.qty','book_levels.name','book_levels.image','book_levels.price','books.title','book_levels.bk_evel_id as pid','books.book_id as attr_id')
                	
                	->get();
                       
                        $totalPrice=0;
                        foreach($result as $list){
                        $totalPrice=$totalPrice+($list->qty*$list->price);
                        }
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
                
                   $order_id=DB::table('orders')->insertGetId($details);
                   if($order_id>0){
                    foreach($result as $list){
                        $productDetailArr['product_id']=$list->attr_id;
                        $productDetailArr['products_attr_id']=$list->pid;
                        $productDetailArr['price']=$list->price;
                        $productDetailArr['qty']=$list->qty;
                        $productDetailArr['orders_id']=$order_id;
                        DB::table('orders_details')->insert($productDetailArr);
       
                       
                       }
                       if($request->payment_type=='Gateway'){
                           $name = $request->input('name');
                           $amount = $request->input('amt');
                           $api = uniqid();
                          
                            
                            $orderId = $api;
                            
                            Session::put('orderId', $orderId);
                            if(isset($orderId)){
                                 $txn_id=$orderId;
                                 $result=DB::table('orders')
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
                       
                    
                        
                         $request->session()->put('ORDER_ID',$order_id);
                         $status="success";
                         $msg="Order placed";
                   }else{
                    $status="false";
                    $msg="please try after sometime";
                   }
                
                


                
        return response()->json(['status'=>$status,'msg'=>$msg]);
    }
    function order_placed(Request $request){
         if($request->session()->has('STUDENT_LOGIN')){
            return view('front.order_placed');

        }
        else{
            return redirect('/');
        }
        
    }
    function order_fail(Request $request){
        if($request->session()->has('ORDER_ID')){
           return view('front.order_fail');

       }
       else{
           return redirect('/');
       }
       
   }
    function place_order1(Request $request){
        if($request->session()->has('STUDENT_LOGIN')){
            $status="success";
            $msg="Order placed";

        }
        else{
            $status="false";
            $msg="Please Login/Register First!!";
        }
        return response()->json(['status'=>$status,'msg'=>$msg]);
        
    }
    
    function razorpay(Request $request){
         $payment_id =$request->post('payment_id');
        $id =$request->session()->get('orderId');
        $details = [
        'payment_id' => $request->post('payment_id'),
        'order_id' => $request->session()->get('order'),  
        'payment_status' =>'success',
        

        ];
        Mail::to($request->session()->get('email_id'))->send(new TestR1($details));
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
            $result=DB::table('orders')
                         ->where(['txn_id'=>$id])
                         ->update(['payment_status'=>'success', 'payment_id'=>$request->get('payment_id')]);
                        
                         DB::table('carts')
                         ->where(['user_id'=>$uid,'user_type'=>'Reg'])
                         ->delete();
                        $request->session()->get('orderId');
                         $status="success";
                         $msg="Order placed";
                         $redirect_url='https://navavidya.com/test/course_placed';
                 
                

            }
            else{
                $id =$request->session()->get('orderId');
                $result=DB::table('course_orders')
                         ->where(['txn_id'=>$id])
                         ->update(['payment_status'=>'fail'])
                         ->get();
                $status="Fail";
                $redirect_url='https://navavidya.com/test/order_fail';
            }
            
            
                        
                         
                        
        }else{
            die('Something went Wrong');
        }
       
    }
    
}

    
    

    

