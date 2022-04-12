<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from raistheme.com/html/gostudy/gostudy/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Jan 2022 04:51:55 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gostudy-Education & LMS HTML5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('')}}assets1/images/favicon.png">

    <!-- CSS
	============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('')}}assets1/css/plugins/all.min.css">
    <link rel="stylesheet" href="{{asset('')}}assets1/css/plugins/flaticon.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('')}}assets1/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('')}}assets1/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{asset('')}}assets1/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('')}}assets1/css/plugins/aos.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('')}}assets1/css/style.css">
    

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <link rel="stylesheet" href="{{asset('')}}assets1/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="{{asset('')}}assets1/css/style.min.css"> -->

</head>
<style>
  .capitalize {
    text-transform: capitalize;
}
    .error
    {
     color:#FF0000;
     margin-top: 7px;
    }
    .field_error{
    color: red;
}
    
    .box{
    width: 450px;
    height: 500px;
    background: #ffffff;
    position: relative;
    overflow: hidden;
    border-radius: 8px;
}
.signup{
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 400px;
  padding: 0px 20px;
  transition: 0.5s;

}
.login{
  position: absolute;
  bottom: 0;
  left: 101%;
  width: 100%;
  height: 400px;
  padding: 0px 20px;
  transition: 0.5s;

}
.input-group{
  margin-top: 10px;

}
.input-group span{
  color: gray;
}
.input-group .inp{
  width: 100%;
  padding: 10px 5px;
  border-radius: 100px;
  border: 1px solid #c6c6c6;
  margin-top: 5px;
  background: #ff1f59;
}
.submit-inp{
  background: linear-gradient(30deg,red,blue);
  border: none !important;
  color: white;
  font-weight: bolder;
  font-variant: small-caps;
  font-size: 18px;
}
.toggle-btn{
  -webkit-appearance:none;
  width: 150px;
  height: 35px;
  border: 1px solid gray;
  position: absolute;
  top: 8px;
  left: calc(50% - 75px);
  border-radius: 100px;
  
}
.toggle-btn:before{
  content: 'Student';
  font-weight: bolder;
  color: white;
  position: absolute;
  top: 0;
  left: 0;
  width: 50%;
  height: 100%;
  background: #ff1f59;
   display: grid;
   place-items: center;
   transition: 0.5s;
border-radius: 28px;  
}
  .toggle-btn:checked:before{
    content: 'School';
    left: 50%;
  }
.toggle-btn:checked + .signup{
  left: -101%;
}
.toggle-btn:checked + .signup + .login{
  left: 0%;
  
}
</style>

<body>
    

    <div class="main-wrapper">
        
       <!-- Preloader start -->
       <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Header Start  -->
    <div id="header" class="header section">
        <div class="container">

            <!-- Header Wrapper Start  -->
            <div class="header-wrapper">

                <!-- Header Logo Start -->
                <div class="header-logo">
                    <a href="index.html"><img src="assets1/images/logo.png" alt=""></a>
                </div>
                <!-- Header Logo End -->

                <!-- Header Right Start -->
                <div class="header-right">

                    <!-- Header Menu Start -->
                    <div class="header-menu d-none d-lg-block">
                        <ul class="main-menu">
                            <li >
                                <a href="{{asset('')}}course_offer">course offer</a>
                                
                            </li>
                            <li >
                                <a href="{{asset('')}}">Home</a>
                                
                            </li>
                            <li><a href="{{asset('')}}feature">features</a>
                               
                            </li>
                            <li><a href="{{asset('')}}book">book</a>
                               
                            </li>
                            
                            <li><a href="{{asset('')}}contact">Contact Us</a></li>
                            <li><div class="header-cart">
                              @php 
                              $getUserToCartTotalItem=getUserToCartTotalItem();
                              $total=count($getUserToCartTotalItem);
                              $totalPrice=0;
                              @endphp
                              <a class="cart-btn" href="#"><i class="flaticon-shopping-cart" style="font-size: 19px;"></i> <span style="cart_span">{{$total}}</span></a>
                          </div></li>

                            
                            @if(session()->has('STUDENT_LOGIN'))
                            <li>
                                <a href="{{asset('')}}Student/dashboard" class="btn join-btn"    style="margin-top:-7px; color:white">STUDENT DASHBOARD</a>
                            </li>
                            <li>
                                <a href="{{asset('')}}St_logout" class="btn join-btn"    style="margin-top:-7px; color:white">LOGOUT</a>
                            </li>
                            @elseif(session()->has('SCHOOL_LOGIN'))
                            <li>
                                <a href="{{asset('')}}school/dashboard" class="btn join-btn"    style="margin-top:-7px; color:white">SCHOOL DASHBOARD</a>
                            </li>
                            <li>
                                <a href="{{asset('')}}logout" class="btn join-btn"    style="margin-top:-7px; color:white">LOGOUT</a>
                            </li>
                            @else
                            <li>
                                <a class="btn join-btn"  data-bs-toggle="modal"    data-bs-target="#exampleModal"  style="margin-top:-7px; color:white">Login</a>
                            </li>
                            <li>
                                <a class="btn join-btn" style="margin-top:-7px; color:white">Register</a>
                           
                            <ul class="sub-menu">
                                <li><a href="{{asset('')}}registers">STUDENT REGISTER</a></li>
                                <li><a href="{{asset('')}}school_enquery">SCHOOL ENQUERY</a></li>
                            </ul>
                        </li>   
                            @endif
                            

                        
                   
                                </li>
                           
                        </ul>
                    </div>
                    <!-- Header Menu End -->

                    <!-- Header Meta Start -->
                    
                    <!-- Header Meta End -->

                    <div class="header-toggle d-lg-none">
                        <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
                <!-- Header Right End -->
            </div>
            <!-- Header Wrapper End -->

        </div>
    </div>
    <!-- Header End -->

    <!-- Offcanvas Start -->
    <div class="offcanvas offcanvas-start" id="offcanvasMenu">

        <div class="offcanvas-header">
            <!-- Offcanvas Logo Start -->
            <div class="offcanvas-logo">
                <a href="#"><img src="{{asset('')}}assets1/images/logo.png" alt=""></a>
            </div>
            <!-- Offcanvas Logo End -->
            <button class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>

        <div class="offcanvas-body">
            <div class="offcanvas-menu">
                <ul class="main-menu">
                    <li >
                        <a href="{{asset('')}}course_offer">course offer</a>
                        
                    </li>
                    <li >
                        <a href="{{asset('')}}">Home</a>
                        
                    </li>
                    <li><a href="{{asset('')}}feature">features</a>
                       
                    </li>
                    <li><a href="{{asset('')}}book">book</a>
                       
                    </li>
                    
                    <li><a href="contact">Contact Us</a></li>
                    <li><div class="header-cart">
                      @php 
                      $getUserToCartTotalItem=getUserToCartTotalItem();
                      $total=count($getUserToCartTotalItem);
                      $totalPrice=0;
                      @endphp
                      <a class="cart-btn" href="#"><i class="flaticon-shopping-cart" style="font-size: 19px;"></i> <span>{{$total}}</span></a>
                  </div></li>
                    
                    @if(session()->has('STUDENT_LOGIN'))
                    <li>
                        <a href="{{asset('')}}Student/dashboard" class="btn join-btn"    style="margin-top:-7px; color:white">STUDENT DASHBOARD</a>
                    </li>
                    <br>
                    <li>
                        <a href="{{asset('')}}St_logout" class="btn join-btn"    style="margin-top:-7px; color:white">LOGOUT</a>
                    </li>
                    @elseif(session()->has('SCHOOL_LOGIN'))
                    <li>
                        <a href="{{asset('')}}school/dashboard" class="btn join-btn"    style="margin-top:-7px; color:white">SCHOOL DASHBOARD</a>
                    </li>
                    <li>
                        <a href="{{asset('')}}logout" class="btn join-btn"    style="margin-top:-7px; color:white">LOGOUT</a>
                    </li>
                    @else
                    <li>
                        <a class="btn join-btn"  data-bs-toggle="modal"    data-bs-target="#exampleModal"  style="margin-top:-7px; color:white">Login</a>
                    </li>
                    <li>
                        <a class="btn join-btn" style="margin-top:-7px; color:white">Register</a>
                   
                    <ul class="sub-menu">
                        <li><a href="{{asset('')}}registers">STUDENT REGISTER</a></li>
                        <li><a href="{{asset('')}}school_enquery">SCHOOL ENQUERY</a></li>
                    </ul>
                </li>   
                    @endif
                   
                </ul>
            </div>
        </div>

    </div>
    <!-- Offcanvas End -->

        @section('container')
                            
        @show
       
       
    </div>
<!-- Footer Start -->
<div class="footer-section section">
    <div class="container">

        <!-- Footer Widget Wrapper Start -->
        <div class="footer-widget-wrapper">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget widget-about">
                        <a class="footer-logo" href="index.html"><img src="{{asset('')}}assets1/images/logo-white.png" alt="Logo"></a>

                        <div class="widget-info">
                            <p>We support programs that create advancement opportunities for people.</p>

                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Useful Links</h4>

                        <div class="widget-link">
                            <ul class="link">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                                <li><a href="#">Student Spotlight</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Learning</h4>

                        <div class="widget-link">
                            <ul class="link">
                                <li><a href="#">Project Management</a></li>
                                <li><a href="#">WordPress Development</a></li>
                                <li><a href="#">Business Strategy</a></li>
                                <li><a href="#">Software Development</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Contact Us</h4>

                        <ul class="widget-info">
                            <li>
                                <div class="media">
                                    <i class="flaticon-location-pin"></i>
                                    <div class="media-body">
                                        <span>Nava Vision, 159/4, 2nd Floor, Sumathi Vitals Nilaya, Vignana Nagar Main road, Next to church,  Above tasty bite bakery, Vignana Nagar,
                                            Bangalore
                                            Karanataka  560043</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <i class="fas fa-phone-volume"></i>
                                    <div class="media-body">
                                        <a href="tel:+91458654528">07676319577</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <i class="flaticon-email"></i>
                                    <div class="media-body">
                                        <a href="gostudy%40gmail.html">navavision2000@gmail.com</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Footer Widget End -->
                </div>
            </div>
        </div>
        <!-- Footer Widget Wrapper End -->

        <!-- Footer Copyright End -->
        <div class="footer-copyright">
            <div class="copyright-wrapper">
                <div class="copyright-design">
                    <p>Designed & Developed by <a href="#"> Raistheme</a></p>
                </div>
                <div class="copyright-text">
                    <p>&copy; Copyright 2021 Gostudy All rights reserved. </p>
                </div>
            </div>
        </div>
        <!-- Footer Copyright End -->

    </div>
</div>
<!-- Footer End -->
<div class="container mt-12" >

    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-6">
                            <label class="form-label required">Email:</label>
                            <input type="email" class="form-control">
                        </div>
                        <br>
                        <div class="mb-6">
                            <label class="form-label required">Password:</label>
                            <input type="password" class="form-control">
                        </div>
                        
                       
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    
                </div>
            </div>
        </div>
    </div>
</div>
 <!-- The Modal -->



 @php
  if(isset($_COOKIE['login_email']) && isset($_COOKIE['login_pwd'])){
    $login_email=$_COOKIE['login_email'];
    $login_pwd=$_COOKIE['login_pwd'];
    $is_remember="checked='checked'";
  } else{
    $login_email='';
    $login_pwd='';
    $is_remember="";
  }   

  @endphp
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #A4A4A4; width:0%;">
            <div  class="modal-body">
                
                <div class="box">
                    <div class="modal-header">
                        <h5 class="modal-title"></h5>  
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <input type="checkbox" class="toggle-btn" name="" >
                    <form class="signup"  style="align-items: center;" id="frmlogin">
                        @csrf
                        <div class="input-group">
                            <span>Email</span>
                           <input type="email" class="inp" name="str_login_email" value="{{$login_email}}" >
                       
                        </div>
                          <div class="input-group">
                            <span>Password</span>
                           
                           <input type="password" class="inp" name="str_login_password" value="{{$login_pwd}}" >
                        </div>
                          <div class="input-group" style="margin-top:20px;" type="submit">
                           
                            <x-jet-button class="inp submit-inp">
                              <input type="submit" id="btnLogin" style="background: #ff1f59;" class="btn" value="Log in" />
                          </x-jet-button>
                        
                        

                        </div>
                        <div class="input-group" style="margin-top:05px;" >
                        <label>
                          <input type="checkbox" id="rememberme" name="rememberme" {{$is_remember}}> Remember me
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
                         <input type="email" class="inp" name="email" value="{{$login_email}}" >
                     
                      </div>
                        <div class="input-group">
                          <span>Password</span>
                         
                         <input type="password" class="inp" name="password" value="{{$login_pwd}}" >
                      </div>
                        <div class="input-group" style="margin-top:20px;" type="submit">
                         
                          <x-jet-button class="inp submit-inp">
                            <input type="submit" id="btnLogin" style="background: #ff1f59;" class="btn" value="Log in" />
                        </x-jet-button>
                      
                      

                      </div>
                      <div class="input-group" style="margin-top:05px;" >
                      <label>
                        <input type="checkbox" id="rememberme" name="rememberme" {{$is_remember}}> Remember me
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
    </div>
</div>
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display:none;">
  <div class="modal-dialog">
      <div class="modal-content" style="background-color: #A4A4A4; width:0%;">
          <div  class="modal-body">
              
              <div class="box">
                  <div class="modal-header">
                      <h5 class="modal-title"></h5>  
                      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
                  <input type="checkbox" class="toggle-btn" name="" >
                  
                  
                  <form class="signup"  style="align-items: center;" id="frmfrogot">
                      @csrf
                      <div class="input-group">
                        <span>Email</span>
                       <input type="email" class="inp" name="str_frogot_email" value="{{$login_email}}" >
                   
                    </div>
                     <div class="input-group" style="margin-top:20px;" type="submit">
                         
                          <x-jet-button class="inp submit-inp">
                            <input type="submit" id="btnLogin" style="background: #ff1f59;" class="btn" value="Send Link" />
                        </x-jet-button>
                      
                      

                      </div>
                      
                      <div class="input-group" >
                        <div id="frogot_msg"></div>
                        </div>
                        <div class="input-group" style="margin-top:10px;" >

                          <a class="underline text-sm text-gray-600 hover:text-gray-900"  href="javascript:void(0)"  onclick="exampleModal()">
                            {{ __('Login in? ') }}
                        </a>
                         
                         
          
                         
                      </div>
                  </form>
                  
                  <form class="login"  style="align-items: center;" id="frmfrogot1">
                      @csrf
                      <div class="input-group">
                        <span>Email</span>
                       <input type="email" class="inp" name="str_frogot_email" value="{{$login_email}}" >
                   
                    </div>
                     <div class="input-group" style="margin-top:20px;" type="submit">
                         
                          <x-jet-button class="inp submit-inp">
                            <input type="submit" id="btnLogin" style="background: #ff1f59;" class="btn" value="Send Link" />
                        </x-jet-button>
                      
                      

                      </div>
                      
                      <div class="input-group" >
                        <div id="frogot_msg1"></div>
                        </div>
                        <div class="input-group" style="margin-top:10px;" >

                          <a class="underline text-sm text-gray-600 hover:text-gray-900"  href="javascript:void(0)"  onclick="exampleModal()">
                            {{ __('Login in? ') }}
                        </a>
                         
                         
          
                         
                      </div>
                    
                  </form>
                  
                 
                </div> 
                
                
              </div>
          </div>
      </div>    
  </div>
</div>
<!-- Shopping Cart Start -->

@if($total>0)
<div class="shopping-cart">

  <div class="shopping-cart-inner" >
      <div class="shopping-cart-content">
        
                
        <ul class="main-menu" style="margin-left: -21px;">
        @foreach($getUserToCartTotalItem as $cart);
        
      
       
          <li style="padding: 9px;">
            <a class="aa-cartbox-img" href="#"><img src="{{asset('assets/uploads/books')}}/{{$cart->image}}" alt="img" style="width: 67px;
              height: 100px;"></a>
            <div class="aa-cartbox-info" style="float: right;">
              <h4><a href="#">{{$cart->title}}<br>{{$cart->name}}</a></h4>
              <p>{{$cart->qty}} * {{$cart->price}} </p>
            </div>
          </li>
          @endforeach 
                
          <li>
            <span class="aa-cartbox-total-title">
              Total
            </span>
            <span class="aa-cartbox-total-price">
              
            </span>
          </li>
         
        </ul>
        <a class="btn" href="{{asset('')}}checkout">Checkout</a>
     
     
      </div>
  </div>

  <div class="body-overlay"></div>
</div>
@endif

<!-- Shopping Cart End -->
<!-- Back to Top End -->
<button class="back-btn" id="backBtn"><i class="flaticon-left-arrow-1"></i></button>
    <!-- JS
    ============================================ -->
    <script src="{{asset('assets1/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('assets1/js/vendor/modernizr-3.11.2.min.js')}}"></script>

    <!-- Bootstrap JS -->
    <script src="{{asset('assets1/js/plugins/popper.min.js')}}"></script>
    <script src="{{asset('assets1/js/plugins/bootstrap.min.js')}}"></script>

    <!-- Plugins JS -->
    <script src="{{asset('assets1/js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('')}}assets1/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('')}}assets1/js/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="{{asset('')}}assets1/js/plugins/isotope.pkgd.min.js"></script>
    <script src="{{asset('')}}assets1/js/plugins/aos.js"></script>
    <script src="{{asset('')}}assets1/js/plugins/waypoints.min.js"></script>
    <script src="{{asset('')}}assets1/js/plugins/jquery.counterup.min.js"></script>
    <script src="{{asset('')}}assets1/js/plugins/appear.min.js"></script>

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->


 
    <!-- Main JS -->
    <script src="{{asset('')}}assets1/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
    
    <script>
        
            $('#myModal1').on('show.bs.model', function (event){
               
               
                
    
            });
    
    
    </script> 
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script> 
  <script>
  $(document).ready(function(){
  
   if($("#contact_form").length > 0)
    {
      $('#contact_form').validate({
        rules:{
          name : {
            required : true,
            maxlength : 50
          },
          phone : {
            required : true,
            maxlength : 50,
            minlength : 10,
          },
          email : {
            required : true,
            maxlength : 50, 
            email : true
          },
          message : {
            required : true,
            minlength : 20,
            maxlength : 200
          }
        },
        messages : {
          name : {
            required : 'Enter Name Detail',
            maxlength : 'Name should not be more than 50 character'
          },
          phone : {
            required : 'Enter phone Detail',
            maxlength : 'phone should not be more than 50 character'
          },
          email : {
            required : 'Enter Your Email',
            email : 'Enter Valid Your Email',
            maxlength : 'Email should not be more than 50 character'
          },
          message : {
            required : 'Enter Message Detail',
            minlength : 'Message Details must be minimum 50 character long',
            maxlength : 'Message Details must be maximum 500 character long'
          }
        }
      });
    }
  
  });
  $(document).ready(function(){
  
  if($("#frmRegistration").length > 0)
   {
     $('#frmRegistration').validate({
       rules:{
         name : {
           required : true,
           maxlength : 50
         },
         last_name : {
           required : true,
           maxlength : 50,
           
         },
        
         email : {
           required : true,
           maxlength : 50, 
           email : true
         },
         password:{
             required:true,
             minlength:8,
             maxlength:100
         },
         confirm_password:{
             required:true,
             equalTo:'#password'
         },
         address1 : {
           required : true,
           maxlength : 200,
           
         },
         address2 : {
           required : true,
           maxlength : 200,
           
         },
         city : {
           required : true,
           maxlength : 200,
           
         },
         state : {
           required : true,
           maxlength : 200,
           
         },
         country : {
           required : true,
           maxlength : 200,
           
         },
         zip : {
           required : true,
           minlength : 6,
           maxlength : 200,
           
         }
         
       },
       messages : {
         name : {
           required : 'Enter First Name',
           maxlength : 'Name should not be more than 50 character'
         },
         last_name : {
           required : 'Enter Last Name',
           maxlength : 'phone should not be more than 50 character'
         },
         phone : {
            required : 'Enter phone number',
            maxlength : 'phone should not be more than 50 character'
          },
          password : {
            required : 'Enter you new password',
            maxlength : 'password should not be more than 50 character'
          },
          confirm_password : {
            required : 'Need  to Confirm you new password',
            
          },
          address1 : {
           required : 'Enter Address',
           maxlength : 'Addres should not be more than 200 character'
         },
         address2 : {
           required : 'Enter Address',
           maxlength : 'Addres should not be more than 200 character'
         },
         city : {
           required : 'Enter city',
           maxlength : 'city should not be more than 200 character'
         },
         state : {
           required : 'Enter state',
           maxlength : 'state should not be more than 200 character'
         },
         country : {
           required : 'Enter country',
           maxlength : 'country should not be more than 200 character'
         },
         zip : {
           required : 'Enter You pincode',
           maxlength : 'Pin should not be more than 200 character'
         },
         email : {
           required : 'Enter Your Email',
           email : 'Enter Valid Your Email',
           maxlength : 'Email should not be more than 50 character'
         },
         message : {
            required : true,
            minlength : 20,
            maxlength : 200
          }
         
       }
     });
   }
 
 });
 $(document).ready(function(){
  
  if($("#frmforgotpassword").length > 0)
   {
     $('#frmforgotpassword').validate({
       rules:{
         
        
        
         password:{
             required:true,
             minlength:10,
             maxlength:100
         },
         confirm_password:{
             required:true,
             equalTo:'#password'
         }
         
       },
       messages : {
         
          password : {
            required : 'Enter you new password',
            maxlength : 'password should not be more than 50 character'
          },
          confirm_password : {
            required : 'Need  to Confirm you new password',
            
          }
         
       }
     });
   }
 
 });
 $(document).ready(function(){
  
  if($("#school").length > 0)
   {
     $('#school').validate({
       rules:{
         name : {
           required : true,
           maxlength : 50
         },
         p_name : {
           required : true,
           maxlength : 50,
           
         },
         phone : {
            required : true,
            maxlength : 50,
            minlength : 10,
          },
         email : {
           required : true,
           maxlength : 50, 
           email : true
         },
         address : {
           required : true,
           maxlength : 200,
           
         },
         flexRadioDefault1 : {
           required : true,
           maxlength : 200,
           
         },
         city : {
           required : true,
           maxlength : 200,
           
         },
         pin : {
           required : true,
           minlength : 6,
           maxlength : 200,
           
         }
         
       },
       messages : {
         name : {
           required : 'Enter School Name',
           maxlength : 'Name should not be more than 50 character'
         },
         p_name : {
           required : 'Enter Principal Name',
           maxlength : 'phone should not be more than 50 character'
         },
         phone : {
            required : 'Enter phone number',
            maxlength : 'phone should not be more than 50 character'
          },
          
          address : {
           required : 'Enter School Address',
           maxlength : 'Addres should not be more than 200 character'
         },
         flexRadioDefault1 : {
           required : 'Enter Subject Category',
           maxlength : 'Subject Category should not be more than 200 character'
         },
         city : {
           required : 'Enter city',
           maxlength : 'city should not be more than 200 character'
         },
         
         pin : {
           required : 'Enter You pin',
           maxlength : 'pin should not be more than 200 character'
         },
         email : {
           required : 'Enter Your Email',
           email : 'Enter Valid Your Email',
           maxlength : 'Email should not be more than 50 character'
         },
         message : {
            required : 'Enter Message Detail',
            minlength : 'Message Details must be minimum 50 character long',
            maxlength : 'Message Details must be maximum 500 character long'
          }
         
       }
     });
   }
 
 });

 
 
  jQuery('#frmRegistration').submit(function(e){
    e.preventDefault();
    jQuery('.field_error').html('');
    jQuery.ajax({
      url:'/register/submit',
      type:'post',
      data:jQuery('#frmRegistration').serialize(),
      success:function(result){
         if(result.status=="error"){
           jQuery.each(result.error,function(key,val){
            jQuery('#'+key+'_error').html(val[0]);
             
           });
         }
         if(result.status=="success"){
          window.location.href='{{asset('verification')}}';
          
         }
        }
      });
    });
    jQuery('#frmlogin').submit(function(e){
    e.preventDefault();
    jQuery('.frmlogin').html('');
    jQuery.ajax({
      url:'/Student/auth',
      type:'post',
      data:jQuery('#frmlogin').serialize(),
      success:function(result){
         if(result.status=="error"){
          jQuery('#login_msg').html(result.msg);
         }
         if(result.status=="success"){
           window.location.href='{{asset('')}}';
           
          //jQuery('#frmlogin')[0].reset();
          //jQuery('#Thank_you_msg').html(result.msg);
         }
        }
      });
    });
    jQuery('#frmlogin1').submit(function(e){
    e.preventDefault();
    jQuery('.frmlogin').html('');
    jQuery.ajax({
      url:'/school/auth',
      type:'post',
      data:jQuery('#frmlogin1').serialize(),
      success:function(result){
         if(result.status=="error"){
          jQuery('#login_msg').html(result.msg);
         }
         if(result.status=="success"){
           window.location.href='{{asset('')}}';
           
          //jQuery('#frmlogin')[0].reset();
          //jQuery('#Thank_you_msg').html(result.msg);
         }
        }
      });
    });
    function exampleModal1()
    {
      jQuery('#exampleModal1').show();
      jQuery('#exampleModal').hide();
      

    }
    function exampleModal()
    {
      
      jQuery('#exampleModal1').hide();
      jQuery('#exampleModal').show();
      

    }
    jQuery('#frmfrogot').submit(function(e){
    e.preventDefault();
    jQuery('.frogot_msg').html('');
    jQuery.ajax({
      url:'/frogot_password ',
      type:'post',
      data:jQuery('#frmfrogot').serialize(),
      success:function(result){
        jQuery('#frogot_msg').html(result.msg);
         
        }
      });
    });
    jQuery('#frmfrogot1').submit(function(e){
    e.preventDefault();
    jQuery('.frogot_msg1').html('');
    jQuery.ajax({
      url:'/school_frogot_password ',
      type:'post',
      data:jQuery('#frmfrogot1').serialize(),
      success:function(result){
        jQuery('#frogot_msg1').html(result.msg);
         
        }
      });
    });
    jQuery('#frmforgotpassword').submit(function(e){
    e.preventDefault();
    jQuery('.Thank_you_msg').html('');
    jQuery.ajax({
      url:'/frogot_password_change',
      type:'post',
      data:jQuery('#frmforgotpassword').serialize(),
      success:function(result){
        jQuery('#Thank_you_msg').html(result.msg);
         
        }
      });
    });
    jQuery('#frmforgotpassword1').submit(function(e){
    e.preventDefault();
    jQuery('.Thank_you_msg').html('');
    jQuery.ajax({
      url:'/school_frogot_password_change',
      type:'post',
      data:jQuery('#frmforgotpassword1').serialize(),
      success:function(result){
        jQuery('#Thank_you_msg').html(result.msg);
         
        }
      });
    });
    function add_to_cart($id,pid)
    {
      
      jQuery('#bk_evel_id').val($id);
      jQuery('#pqty').val(jQuery('#qty').val());
      jQuery('#pbook_id').val(jQuery('#book_id').val());
      jQuery.ajax({
        url:'/add_to_cart',
        data:jQuery('#frmAddToCart').serialize(),
        type:'post',
        success:function(result){
          alert('Product '+ result.msg);
          if(result.totalItem==0){
            jQuery('.cart_span').html('0');
            jQuery('.shopping-cart cart-opened').remove();  
          }
          else{
            jQuery('.cart_span').html('result.totalItem');
          }
          
        }

      });  
    
    
    }
    function deleteCartProduct(pid,attr_id){
    jQuery('#pbook_level').val(jQuery('#book_level').val());
    jQuery('#qty').val(0)
    add_to_cart(pid);
    //jQuery('#total_price_'+attr_id).html('Rs '+qty*price);
    jQuery('#cart_box'+attr_id).hide();
  }
    function updataQty(attr_id,pid){
      jQuery('#pbook_id').val(jQuery('#book_id').val());
      var qty=jQuery('#qty'+pid).val();
      jQuery('#qty').val(qty)
      add_to_cart(attr_id,pid);
      
      
      
       
    }
    
  
  </script>
</body>


<!-- Mirrored from raistheme.com/html/gostudy/gostudy/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Jan 2022 04:52:33 GMT -->
</html>