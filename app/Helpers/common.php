<?php



function getUserTempId(){
	if(!session()->has('USER_TEMP_ID')){
		$rand=rand(111111111,999999999);
		session()->put('USER_TEMP_ID',$rand);
		return $rand;
	}else{
		return session()->get('USER_TEMP_ID');
	}
}
function getUserToCartTotalItem(){
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
	return ($result);
}
function getUserToCartTotalItem1(){
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
	return ($result);
}
function apply_coupon_code($coupon_code)
    {
        $totalPrice=0;
        $result=DB::table('coupons')->where(['code'=>$coupon_code])->get();
		
        
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
                        $getUserToCartTotalItem=getUserToCartTotalItem();
                        $totalPrice=0;
                        foreach($getUserToCartTotalItem as $list){
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
        
       return json_encode(['status'=>$status,'msg'=>$msg,'totalPrice'=>$totalPrice,'coupon_code_value'=>$coupon_code_value]);
    }
    function apply_coupon_code1($coupon_code)
    {
        $totalPrice=0;
        $result=DB::table('coupons')->where(['code'=>$coupon_code])->get();
		
        
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
                        $getUserToCartTotalItem1=getUserToCartTotalItem1();
                        $totalPrice=0;
                        foreach($getUserToCartTotalItem1 as $list1){
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
        
       return json_encode(['status'=>$status,'msg'=>$msg,'totalPrice'=>$totalPrice,'coupon_code_value'=>$coupon_code_value]);
    }



?>