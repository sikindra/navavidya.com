@extends('superadmin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h4 class="title-1" >Course Orders - {{$course_orders[0]->orders_id}}</h4>
            <button class="au-btn au-btn-icon au-btn--blue">
                <a href="{{asset('superadmin/course_details')}}" style="color: white"> <i class="zmdi zmdi-plus"></i> Bake</a></button>
        </div>
    </div>
</div>
 @php
                    $totalAmt=0;
                    @endphp
                    @foreach($course_orders as $list)
                    @php
                    $totalAmt=$totalAmt+($list->price);
                    @endphp
                    
                    @endforeach

<div class="row" style="padding: 20px;">
    <div class="col-md-6" style="border: 1px solid #3c3634;
    border-radius: 5px;  margin: 8px;  background: #fff; padding: 35px;">
        <div class="overview-wrap">
            
            
        </div>
        <h4 class="title-1" >Student Profile
        </h4>
        <div class="order_details" style="color: black; line-height: 31px; padding-top: 10px;">
            FUll Name : {{$course_orders[0]->name}} <br>Email : {{$course_orders[0]->email}}<br>Phone : {{$course_orders[0]->mobile}} <br> Address : {{$course_orders[0]->address1}} ,{{$course_orders[0]->state}}, {{$course_orders[0]->pincode}}<br>
        </div>
    </div>
    <div class="col-md-6" style="border: 1px solid #3c3634;
    border-radius: 5px; margin: 8px;  background: #fff; padding: 35px;">
        <div class="overview-wrap">
         </div>
        <h4 class="title-1" > Student Payment 
        </h4>
        <div class="order_details" style="color: black; line-height: 31px; padding-top: 10px;">
            Amount :  <?php 
                  
                   
                    if($course_orders[0]->coupon_value>0){
                        echo '';
                    $totalAmt=$totalAmt-$course_orders[0]->coupon_value;
                     echo '
                        
                       '.$totalAmt.'
                    ';
                    }else{
                        echo '
                        
                       '.$totalAmt.'
                    ';
                    }
                    ?><br>
            discount : {{$course_orders[0]->coupon_value}}<br>
            Order Status : {{$course_orders[0]->orders_status}}<br>
            Payment Status : {{$course_orders[0]->payment_status}}<br>
            Payment Type : {{$course_orders[0]->payment_type}}<br>
            
            <?php 
            if($course_orders[0]->payment_id!=''){
                echo 'Payment Id :'.$course_orders[0]->payment_id;
            }
            ?>
            
        </div>
    </div>
</div>
<div class="row m-t-30">
    <div class="col-md-12">
        <!-- DATA TABLE-->
        
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                
                <thead>
                    
                    <tr>
                       <td colspan="6" style="color: black; font-size: 25px;" > Courses Details</td>
                        
                    </tr>
                    
                    
                    
                </thead>
                
                <tbody>
                   
                    <tr style="height: 78px;">
                        <td colspan="3" style="color: black; font-size: 25px;" > Joined Course List</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        
                    </tr>
                   
                </tbody>
                <tbody>
                     <tr style="height: 78px;">
                        <td style="color: black; font-weight: bold;">Course name </td>
                        <td style="color: black; font-weight: bold;">Level /Class</td>
                        <td style="color: black; font-weight: bold;">Course Type	</td>
                        
                        <td style="color: black; font-weight: bold;">Mode of Education</td>
                        <td style="color: black; font-weight: bold;">Price(Rs.)</td>
                        <td style="color: black; font-weight: bold;">Date of Join</td>
                        
                    </tr>
                </tbody>
                
                <tbody>
                   
                    <tr style=" height: 55px;">
                        <td >{{$list->course_name}}</td>
                        <td>Class : {{$list->level}} </td>
                        <td>Class : {{$list->names}} </td>
                        <td>Class : {{$list->modes_name}} </td>
                       
                   
                        
                        <td>{{$totalAmt}}</td>
                    
                        <td>{{$list->added_on}}</td>
                    </tr>
                   
                </tbody>
                
            </table>
            
            
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>




@endsection