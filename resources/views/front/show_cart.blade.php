
@extends('front/layout')

@section('container')
<div class="section page-banner-section" style="background-image: url(assets1/images/bg/banner-img.jpg);">
    <div class="container">
        <!-- Page Banner Wrapper Start -->
        <div class="page-banner-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Banner Content Start -->
                    <div class="page-banner text-center">
                        <h2 class="title">Checkout</h2>
                        <ul class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ul>
                    </div>
                    <!-- Page Banner Content End -->
                </div>
            </div>
        </div>
        <!-- Page Banner Wrapper End -->
    </div>
</div>
<!-- END SECTION BREADCRUMB -->

<!-- START MAIN CONTENT -->
<div class="main_content">

<!-- START SECTION SHOP -->
<div class="section" style="
padding-top: 50px;">
	<div class="container">
        <div class="row">
            @if(session()->has('STUDENT_LOGIN')==null)
            <div class="col-lg-6">
            	<div class="toggle_info">
                	<span><i class="fas fa-user"></i>Returning customer? <a href="#loginform" data-toggle="collapse" class="collapsed" aria-expanded="false">Click here to login</a></span>
                </div>
                <div class="panel-collapse collapse login_form" id="loginform">
                    <div class="panel-body">
                        <div class="box">
                                        
                            <input type="checkbox" class="toggle-btn" name="" >
                            <form class="signup"  style="align-items: center;" id="frmlogin">
                                @csrf
                                <div class="input-group">
                                    <span>Email</span>
                                   <input type="email" class="inp" name="str_login_email"  >
                               
                                </div>
                                  <div class="input-group">
                                    <span>Password</span>
                                   
                                   <input type="password" class="inp" name="str_login_password" " >
                                </div>
                                  <div class="input-group" style="margin-top:20px;" type="submit">
                                   
                                    <x-jet-button class="inp submit-inp">
                                      <input type="submit" id="btnLogin" style="background: #ff1f59;" class="btn" value="Log in" />
                                  </x-jet-button>
                                
                                
        
                                </div>
                                <div class="input-group" style="margin-top:05px;" >
                                <label>
                                  <input type="checkbox" id="rememberme" name="rememberme" > Remember me
                                </label>
                                </div>
                                <div class="input-group" >
                                  <div id="login_msg"></div>
                                  </div>
                                <div class="input-group" style="margin-top:10px;" >
        
                                  <a class="underline text-sm text-gray-600 hover:text-gray-900" data-bs-toggle="modal"    data-bs-target="#exampleModal1" href="javascript:void(0)" onclick="exampleModal1()">
                                    {{ __('Forgot your password?') }}
                                </a></div>
                              
                            </form>
                            <form class="login" action="{{route('school.auth')}}" method="post">
                              @csrf
                              <div class="input-group">
                                  <span>Email</span>
                                 <input type="email" class="inp" name="email" value="" >
                             
                              </div>
                                <div class="input-group">
                                  <span>Password</span>
                                 
                                 <input type="password" class="inp" name="password" value="" >
                              </div>
                                <div class="input-group" style="margin-top:20px;" type="submit">
                                 
                                  <x-jet-button class="inp submit-inp">
                                    <input type="submit" id="btnLogin" style="background: #ff1f59;" class="btn" value="Log in" />
                                </x-jet-button>
                              
                              
        
                              </div>
                              <div class="input-group" style="margin-top:05px;" >
                              <label>
                                <input type="checkbox" id="rememberme" name="rememberme" > Remember me
                              </label>
                              </div>
                              <div class="input-group" >
                                <div id="login_msg"></div>
                                </div>
                              <div class="input-group" style="margin-top:10px;" >
        
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" data-bs-toggle="modal"    data-bs-target="#exampleModal1" href="javascript:void(0)" onclick="exampleModal1()">
                                  {{ __('Forgot your password?') }}
                              </a></div>
                            
                          </form>
                        </div> 
                    </div>
                </div>
            </div>
             @endif  
            </div>
         </div>
        </div>
</div>
        <div class="section" style="padding-bottom: 100px;
        padding-top: 50px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-form" style="margin-top: 0px;">
                            <h4 class="title" style="text-align: center;">Student Details Address. </h4>
                             
                                <form id="frmPlaceOrder1">
                                   
                                <div class="row" style="background: #fff">
                                    <div class="col-sm-12">
                                        
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <label >First Name</label>
                                            <input type="text" id="name" value="{{$students['name']}}" name="name" placeholder="First Name">
                                        </div>
                                        <!-- Single Form End -->
                                    </div>
                                    
                                    <div class="col-sm-12">
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <label >Email</label>
                                            <input type="text" name="email" value="{{$students['email']}}"  id="email" placeholder="Your Email">
                                           <span id="email_error" class="field_error"></span>
                                        </div>
                                        <!-- Single Form End -->
                                    </div>
                                    <div class="col-sm-12">
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <label >Phone</label>
                                            <input type="text" name="phone" value="{{$students['phone']}}"  id="phone" placeholder="Phone">
                                            <span id="phone_error" class="field_error"></span>
                                        </div>
                                        <!-- Single Form End -->
                                    </div>
                                   
    
                                    <div class="col-sm-12">
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <label >Address</label>
                                            <input type="text" name="address1"  id="address1" value="{{$students['address1']}}" placeholder="1234 Main St">
                                        </div>
                                        <!-- Single Form End -->
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <label >City</label>
                                            <input type="text" value="{{$students['city']}}" name="city" id="city">
                                        </div>
                                        <!-- Single Form End -->
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <label> State</label>
                                            <input type="text" value="{{$students['state']}}" name="state" id="state">
                                        </div>
                                        <!-- Single Form End -->
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <label >Zip</label>
                                            <input type="text" value="{{$students['zip']}}" name="zip" id="zip" >
                                        </div>
                                        <!-- Single Form End -->
                                    </div>
                                    
                                    
                                    
                                   
                                </div>
                           
                        </div>
                    </div>
                    <div class="col-md-6" >
                        <div class="order_review" style="border: 1px solid #ff6d34; padding: 42px; 
                        margin-left: 10px; border-radius: 11px;">
                            <div class="heading_s1">
                                <h4>Your Orders</h4>
                            </div>
                            <div class="table-responsive order_table">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $totalPrice=0;
                                        @endphp
                                        @foreach($cart_data as $cart_data)
                                        @php 
                                        $totalPrice=$totalPrice+($cart_data->price)
                                        @endphp
                                        <tr>
                                            <td>{{$cart_data->course_name}} ||(Level :  {{$cart_data->level}} )<span class="product-qty"> x{{$cart_data->level}}</span></td>
                                            <td>RS.{{$cart_data->price}}</td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td></td>
                                            <td class="product-subtotal"></td>
                                        </tr>
                                        <tr>
                                            <th>Shipping</th>
                                            <td>Free Shipping</td>
                                        </tr>
                                        <tr style="border-style: hidden;">
                                            <th class="hide shop_coupon_box">Coupon Code <a href="javascript:void(0)" onclick="remove_coupon_code1()" class="remove_coupon_code_link">Remove</a></th>
                                            <td id="coupon_code_str"></td>
                                        </tr>
                                        
                                        <tr>
                                            <th>Total</th>
                                            <td name="total_price" id="total_price">Rs. {{$totalPrice}} </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <h4>Coupon Code</h4>
                            
                            <div class="toggle_info">
                                <span><i class="fas fa-tag"></i>Have a coupon? <a href="#coupon" data-toggle="collapse" class="collapsed" aria-expanded="false">Click here to enter your code</a></span>
                            </div>
                            <div class="panel-collapse collapse coupon_form" id="coupon">
                                <div class="panel-body">
                                    
                                    
                                    <div class="coupon field_form input-group">

                                        <input type="text" value="" class="form-control apply_coupon_box" name="coupon_code" id="coupon_code" placeholder="Enter Coupon Code">
                                        <div class="input-group-append" style="margin-top: 10px;">
                                            <button class="btn btn-fill-out btn-sm apply_coupon_box" name="s" type="button"  onclick="applyCouponCode1('')">Apply Coupon</button>
                                        </div>
                                        
                                        
                                    </div>
                                    
                                    <p id="coupon_code_msg" style="color: red;">
                                       
                                        
                                    </p>
                                </div>
                            </div>
                            <div class="payment_method">
                                <div class="heading_s1">
                                    <h4>Payment</h4>
                                </div>
                                
                                <div class="payment_option">
                                    
                                   
                                    <div class="custome-radio">
                                        <input class="form-check-input" type="hidden" name="payment_type" id="payment" value="Gateway" checked>
                                         
                                         
                                         
                                       
                                    </div>
                                    <input class="form-check-input" type="hidden" name="total_price1" id="total_price1" value="{{$totalPrice}}" >
                                   
                                </div>
                            </div>
                            
                            <input type="button" style="background: #ff1f59; width: 150px; color: #fff;" id="btn" class="btn btn-fill-out checkout" value="Place Order" onclick="pay_now1()">
                            <p id="order_place_msg"></p>
                            
                        </div>
                    </div>
                    @csrf
                </form>
               


                
                    </div>
                </div>
                
            </div>
            
        </div>
        
        
       
        
</div>
<!-- END SECTION SHOP -->

<!-- START SECTION SUBSCRIBE NEWSLETTER -->
<div class="section bg_default small_pt small_pb">
	<div class="container">	
    	<div class="row align-items-center">	
            <div class="col-md-6">
                <div class="heading_s1 mb-md-0 heading_light">
                    <h3>Subscribe Our Newsletter</h3>
                </div>
            </div>
            <div class="col-md-6">
                <div class="newsletter_form">
                    <form>
                        <input type="text" required="" class="form-control rounded-0" placeholder="Enter Email Address">
                        <button type="submit" class="btn btn-dark rounded-0" name="submit" value="Submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- START SECTION SUBSCRIBE NEWSLETTER -->

</div>
<!-- END MAIN CONTENT -->



@endsection