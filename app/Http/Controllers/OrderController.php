<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    function index(Request $request){
       
        $result['orders']=DB::table('orders')
        
        ->leftJoin('orders_status','orders_status.id','=','orders.order_status')
        
        ->select('orders.*','orders_status.orders_status')
        ->get();
         
       
        return view('admin/orders',$result);
    }
    function course_details(Request $request){
        
        $result['course_orders']=DB::table('course_orders')
        
        ->leftJoin('orders_status','orders_status.id','=','course_orders.order_status')
        
        ->select('course_orders.*','orders_status.orders_status')
        ->get();
         return view('superadmin/course_details',$result);
         
    }
    function course_order_details(Request $request, $id){
         $result['course_orders']=DB::table('course_details')
         ->leftJoin('course_orders','course_orders.id','=','course_details.orders_id')
         ->leftJoin('courses','courses.course_id','=','course_details.product_id')
         ->leftJoin('course_levels','course_levels.level_id','=','course_details.products_attr_id')
         ->leftJoin('modes','modes.id','=','courses.type_id')
         ->leftJoin('categories','categories.id','=','courses.cat_id')
         
          ->where(['course_orders.id'=>$id])
          ->select('course_orders.*','course_details.orders_id','course_orders.order_status as orders_status','course_levels.price','courses.course_name','course_levels.level','modes.name as modes_name','categories.names')
         ->get();
         
         if(!isset($result['course_orders'][0])){
           return redirect('/');

       }
          return view('superadmin/course_order_details',$result);
        
        
    }
    function index1(Request $request){
       
        $result['orders']=DB::table('orders')
        
        ->leftJoin('orders_status','orders_status.id','=','orders.order_status')
        
        ->select('orders.*','orders_status.orders_status')
        ->get();
         
       
        return view('superadmin/orders',$result);
    }
    function order_details(Request $request, $id){
       
        $result['product_details']=DB::table('orders_details')
        ->leftJoin('orders','orders.id','=','orders_details.orders_id')
        ->leftJoin('orders_status','orders_status.id','=','orders.order_status')
        ->leftJoin('book_levels','book_levels.bk_evel_id','=','orders_details.products_attr_id')
        ->leftJoin('books','books.book_id','=','orders_details.product_id')
        ->where(['orders.id'=>$id])
        ->select('orders.*','orders_status.*','orders_details.price','orders_details.qty','books.title','book_levels.name as book_name','book_levels.image','orders.id as orders_id')
     
        
        ->get(); 
       
        
         $result['payment_status']=['Pending','Succes','Fail'];
         $result['orders_status']=DB::table('orders_status')
         ->get();
         return view('admin/order_details',$result);
    }
    function order_details1(Request $request, $id){
       
        $result['product_details']=DB::table('orders_details')
        ->leftJoin('orders','orders.id','=','orders_details.orders_id')
        ->leftJoin('orders_status','orders_status.id','=','orders.order_status')
        ->leftJoin('book_levels','book_levels.bk_evel_id','=','orders_details.products_attr_id')
        ->leftJoin('books','books.book_id','=','orders_details.product_id')
        ->where(['orders.id'=>$id])
        ->select('orders.*','orders_status.*','orders_details.price','orders_details.qty','books.title','book_levels.name as book_name','book_levels.image','orders.id as orders_id')
     
        
        ->get(); 
       
        
         $result['payment_status']=['Pending','Succes','Fail'];
         $result['orders_status']=DB::table('orders_status')
         ->get();
         return view('superadmin/order_details',$result);
    }
    function update_payment_status(Request $request,$sataus,$id){
        DB::table('orders')
        ->where(['orders.id'=>$id])
        ->update(['payment_status'=>$sataus]);
       
        
        return redirect('/admin/order_details/'.$id)->with('message',' update Successfully');
     }
     function update_payment_status1(Request $request,$sataus,$id){
        DB::table('orders')
        ->where(['orders.id'=>$id])
        ->update(['payment_status'=>$sataus]);
       
        
        return redirect('/superadmin/order_details/'.$id)->with('message',' update Successfully');
     }
     function update_orders_status(Request $request,$sataus,$id){
         DB::table('orders')
         ->where(['orders.id'=>$id])
         ->update(['order_status'=>$sataus]);
        
         
         return redirect('/admin/order_details/'.$id)->with('message',' update Successfully');
      }
      function update_orders_status1(Request $request,$sataus,$id){
        DB::table('orders')
        ->where(['orders.id'=>$id])
        ->update(['order_status'=>$sataus]);
       
        
        return redirect('/superadmin/order_details/'.$id)->with('message',' update Successfully');
     }
      function update_track_details(Request $request,$id){
          
        $track_details = $request->post('track_details');
        DB::table('orders')
        ->where(['orders.id'=>$id])
        ->update(['track_details'=>$track_details]);
       
        
        return redirect('/admin/order_details/'.$id)->with('message',' update Successfully');

        
     }
     function update_track_details1(Request $request,$id){
          
        $track_details = $request->post('track_details');
        DB::table('orders')
        ->where(['orders.id'=>$id])
        ->update(['track_details'=>$track_details]);
       
        
        return redirect('/superadmin/order_details/'.$id)->with('message',' update Successfully');

        
     }
} 
