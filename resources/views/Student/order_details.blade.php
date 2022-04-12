@extends('Student/layout')

@section('container')
<div class="row" style="padding: 20px;">
    <div class="col-md-6" style="border: 1px solid #3c3634;
    border-radius: 5px;  margin: 13px;
    padding: 35px;">
        <div class="overview-wrap">
            
            
        </div>
        <h4 class="title-1" >Details Address
        </h4>
        <div class="order_details" style=" font-weight: bold; line-height: 31px;">
            Name : {{$product_details[0]->name}} <br>Address : {{$product_details[0]->address1}}<br>City : {{$product_details[0]->city}}<br>State : {{$product_details[0]->state}}<br>Pin Code : {{$product_details[0]->pincode}}<br>
        </div>
    </div>
    <div class="col-md-6" style="border: 1px solid #3c3634;
    border-radius: 5px; margin: 13px; 
    padding: 35px;">
        <div class="overview-wrap">
         </div>
        <h4 class="title-1" > Order Details 
        </h4>
        <div class="order_details" style=" font-weight: bold; line-height: 31px;">
            Order Status : {{$product_details[0]->orders_status}}<br>
            Payment Status : {{$product_details[0]->payment_status}}<br>
            Payment Type : {{$product_details[0]->payment_type}}<br>
            
            
            <?php 
            if($product_details[0]->payment_id!=''){
                echo 'Payment Id :'.$product_details[0]->payment_id;
            }
            ?>
            Track Details : {{$product_details[0]->track_details}}<br>
            
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
                        <th>Product </th>
                        <th>Image</th>
                        <th>Price</th>
                        
                        <th>Qty</th>
                        <th>Total Price</th>
                        
                    </tr>
                    
                    
                    
                </thead>
                <tbody>
                    @php
                    $totalAmt=0;
                    @endphp
                    @foreach($product_details as $list)
                    @php
                    $totalAmt=$totalAmt+($list->price*$list->qty);
                    @endphp
                    <tr>
                        <td>{{$list->title}} || {{$list->book_name}}</td>
                        <td><img src="{{asset('')}}assets/uploads/books/{{$list->image}}" alt="" style="width:100px; height:100px;"></td>
                        <td>{{$list->price}}</td>
                        <td>{{$list->qty}}</td>
                        <td>{{$list->price*$list->qty}}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tbody>
                   
                    <tr style="border-top: 2px solid #0c0a0a;">
                        <td colspan="3" ></td>
                        <td style="border-right: 1px solid #0c0a0a;">Total</td>
                        <td style="border-top: 1px solid #0c0a0a;">{{$totalAmt}}</td>
                    </tr>
                   
                    <?php 
                  
                   
                    if($product_details[0]->coupon_value>0){
                        echo '<tr style="border-bootom: 1px solid #0c0a0a;">
                        <td colspan="3" style="border: 1px solid #0c0a0a;"></td>
                        <td style="border: 1px solid #0c0a0a;">Coupon <span style="color: red; font-size: 15px; font-weight: bold;">('.$product_details[0]->coupon_code.')</span></td>
                        <td style="border: 1px solid #0c0a0a;">'.$product_details[0]->coupon_value.'</td>
                    </tr>';
                    $totalAmt=$totalAmt-$product_details[0]->coupon_value;
                     echo '<tr style="border: 1px solid #0c0a0a;">
                        <td colspan="3" style="border: 1px solid #0c0a0a;"></td>
                        <td style="border: 1px solid #0c0a0a;">Total</td>
                        <td style="border: 1px solid #0c0a0a;">'.$totalAmt.'</td>
                    </tr>';
                    }
                    ?>
                    
                </tbody>
            </table>
            
            
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>

@endsection