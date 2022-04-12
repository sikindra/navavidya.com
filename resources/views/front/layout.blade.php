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
    <link rel="stylesheet" href="{{asset('')}}assets2/css/ionicons.min.css">
<link rel="stylesheet" href="{{asset('')}}assets2/css/themify-icons.css">
<link rel="stylesheet" href="{{asset('')}}assets2/css/style.css">
<link rel="stylesheet" href="{{asset('')}}assets2/css/responsive.css">

<link rel="stylesheet" href="{{asset('')}}assets2/css/jquery-ui.css">
<!-- Slick CSS -->    
<!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('')}}assets1/css/style.css">
    <link rel="stylesheet" href="{{asset('')}}assets2/css/simple-line-icons.css">





<!-- Style CSS -->
<link rel="stylesheet" href="{{asset('')}}assets2/css/style.css">
<link rel="stylesheet" href="{{asset('')}}assets2/css/responsive.css">

    

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <link rel="stylesheet" href="{{asset('')}}assets1/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="{{asset('')}}assets1/css/style.min.css"> -->

</head>
<style>
  .remove_coupon_code_link{
    color: red;
    font-size: 15px;

  }
  p#order_place_msg {
    color: red;
    font-size: 15px;
}
  .hide {
    display: none;
}
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
a.nav-link1.active {
    color: #ff324d;
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
                  <a class="footer-logo" href="{{asset('')}}"><img src="{{asset('')}}assets1/images/logo1 (2).png" alt="Logo"></a>
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
                            
                            
                             
                        
                           
                        
                        </li> @if(session()->has('STUDENT_LOGIN'))
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
                            <li>
                              <div class="header-search d-none d-lg-block">
                                <a class="search-btn" href="#"><i class="flaticon-loupe"></i></a>
                                <div class="header-search-content">
                                    <form action="#" method="get">
                                        <input type="text" placeholder="Search..." id="search_str">
                                        <button class="close-search" type="button" onclick="funSerarch()"><i class="flaticon-loupe"></i></button>
                                    </form>
                                </div>
                            </div>
                            </li>
                            
                            
                            
                            
                            
                        </ul>
                      
                    </div>
                    <div>
                        @php 
                               $rand=rand(111111111,999999999);
        		              $rand_id=session()->put('USER_TEMP_ID',$rand);
                            if(session()->has('STUDENT_LOGIN')){
                        		$uid=session()->get('STUDENT_ID');
                        		$user_type="Reg"; 
                        	}else{
                        		$uid=$rand_id;
                        		$user_type="Not_Reg";
                        	}
                        	
                        	$result=DB::table('coursecarts')
                        	->leftJoin('course_levels','course_levels.level_id','=','coursecarts.product_level_id')
                        	->leftJoin('courses','courses.course_id','=','coursecarts.course_id')
                        	->where(['user_id'=>$uid])
                        	->where(['user_type'=>$user_type])
                        	->select('coursecarts.level','course_levels.level','course_levels.level_img_file_name','course_levels.price','courses.course_name')
                        	
                        	->get();
                        	
                        	
                        
                            $total=count($result);
                            $totalPrice=0;
                            @endphp
                            
                         <a href="#" data-toggle="dropdown"><i class="flaticon-shopping-cart" ></i><span class="cart_count">{{$total}}</span></a>
                              @if($total>0)
                              @endif
                              @if($total>0)
                            <div class="cart_box dropdown-menu dropdown-menu-right" style="width: 350px;  margin-left: 13px;">
                                    <ul class="cart_list">
                                        @php
                                          $totalPrice=0;
                                          @endphp
                                          @foreach($result as $coursecarts)
                                          @php 
                                          $totalPrice=$totalPrice+($coursecarts->price)
                                          @endphp
                                        <li>
                                           
                                            <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                            <a href="#" ><img src="{{asset('')}}assets/uploads/courses_img/{{$coursecarts->level_img_file_name}}" alt="{{$coursecarts->level_img_file_name}}"><span style="margin-left: 33px;">{{$coursecarts->level}}</span><br> <span style="margin-left: 53px;">{{$coursecarts->price}}</span></a>
                                        </li>
                                        @endforeach
                                       
                                    </ul>
                                    <div class="cart_footer">
                                         <p style="margin-left: 110px;"><span>Total</span> = <span class="cart_price"></span>{{$totalPrice}}</p>
                                        <p class="cart_buttons"><a href="{{asset('')}}course_cart" class="btn btn-fill-line btn-radius view-cart">View Cart</a><a href="{{asset('')}}show_cart" class="btn btn-fill-out btn-radius checkout">Checkout</a></p>
                                    </div>
                                </div>
                                @endif 
                    </div>
                    <div class="header-cart">
                      @php 
                               $rand=rand(111111111,999999999);
        		              $rand_id=session()->put('USER_TEMP_ID',$rand);
                            if(session()->has('STUDENT_LOGIN')){
                        		$uid=session()->get('STUDENT_ID');
                        		$user_type="Reg"; 
                        	}else{
                        		$uid=$rand_id;
                        		$user_type="Not_Reg";
                        	}
                        	$result=DB::table('carts')
                        	->leftJoin('book_levels','book_levels.bk_evel_id','=','carts.product_book_id')
                        	->leftJoin('books','books.book_id','=','carts.book_id')
                        	->where(['user_id'=>$uid])
                        	->where(['user_type'=>$user_type])
                        	->select('carts.qty','book_levels.name','book_levels.image','book_levels.price','books.title','book_levels.bk_evel_id as pid','books.book_id as attr_id')
                        	
                        	->get();
                        	
                            $total=count($result);
                            $totalPrice=0;
                            @endphp
                            
                              <a class="cart-btn" href="#"><i class="flaticon-shopping-cart"></i><span class="cart_count">{{$total}}</span></a>
                              @if($total>0)
                              @endif
                     
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
                <a href="#"><img src="{{asset('')}}assets1/images/logo1 (2).png" alt=""></a>
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
                        <a class="footer-logo" href="index.html"><img src="{{asset('')}}assets1/images/logo1 (2).png" alt="Logo"></a>

                        <div class="widget-info">
                            <p>We support programs that create advancement opportunities for people.</p>

                            <ul class="social" >
                                <li><a href="#"><i class="fab fa-facebook" style="color: white;"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest" style="color: white;"></i></a></li>
                                <li><a href="#"><i class="fab fa-github" style="color: white;"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">COMPANY</h4>

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
                        <h4 class="footer-widget-title">QUICK LINKS</h4>

                        <div class="widget-link">
                            <ul class="link">
                                <li><a href="{{asset('')}}course_offer">Course Offer</a></li>
                                <li><a href="{{asset('')}}feature">Feature</a></li>
                                <li><a href="{{asset('')}}book">Book</a></li>
                                <li><a href="{{asset('')}}contact">Contact US</a></li>
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
                                        <a href="tel:+91458654528" style="color: white;">07676319577</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <i class="flaticon-email"></i>
                                    <div class="media-body">
                                        <a href="gostudy%40gmail.html" style="color: white;">navavision2000@gmail.com</a>
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
                    <p>Designed & Developed by <a href="#"> Sikindra</a></p>
                </div>
                <div class="copyright-text">
                    <p>Nava Vision © 2021 All Rights Reserved.</p>
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
                           <input type="email" class="inp" autocomplete="off" name="str_login_email" value="{{$login_email}}" >
                       
                        </div>
                          <div class="input-group">
                            <span>Password</span>
                           
                           <input type="password" class="inp" autocomplete="off" name="str_login_password" value="{{$login_pwd}}" >
                        </div>
                          <div class="input-group" style="margin-top:20px;" type="submit">
                           
                            <x-jet-button class="inp submit-inp">
                              <input type="submit" id="btnLogin" style="background: #ff1f59;" class="btn" value="Log in" />
                          </x-jet-button>
                        
                        

                        </div>
                        <div class="input-group" style="margin-top:05px;" >
                        <label>
                          <input type="checkbox" id="rememberme"  name="rememberme" {{$is_remember}}> Remember me
                        </label>
                        </div>
                        <div class="input-group" >
                          <div id="login_msg" style="color: red;"></div>
                          </div>
                        <div class="input-group" style="margin-top:10px;" >

                          <a class="underline text-sm text-gray-600 hover:text-gray-900" data-bs-toggle="modal"    data-bs-target="#exampleModal1" href="javascript:void(0)" onclick="exampleModal1()">
                            {{ __('Forgot your password?') }}
                        </a></div>
                      
                    </form>
                    <form class="login" id="frmlogin1">
                      @csrf
                      <div class="input-group">
                          <span>Email</span>
                         <input type="email" class="inp" autocomplete="off" name="str_login_email" value="{{$login_email}}" >
                     
                      </div>
                        <div class="input-group">
                          <span>Password</span>
                         
                         <input type="password" autocomplete="off" class="inp" name="str_login_password" value="{{$login_pwd}}" >
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
                        <div id="login_msg1"></div>
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
                       <input type="email" autocomplete="off" class="inp" name="str_frogot_email" value="{{$login_email}}" >
                   
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
                       <input type="email" class="inp" autocomplete="off" name="str_frogot_email" value="{{$login_email}}" >
                   
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
    
                
        <ul class="cart_list">
          @php
          $totalPrice=0;
          @endphp
          @foreach($result as $cart)
          @php 
          $totalPrice=$totalPrice+($cart->price*$cart->qty)
          @endphp
            <li>
                <a href="#" class="item_remove"><i class="ion-close"></i></a>
                <a href="#"><img src="{{asset('assets/uploads/books')}}/{{$cart->image}}" alt="cart_thumb1">{{$cart->name}} <br>{{$cart->qty}} * {{$cart->price}}</a>
               
            </li>
            @endforeach 
            
        </ul>
        <div class="cart_footer">
          
            <p ><strong></strong><span>Total</span> = <span class="cart_price"></span>{{$totalPrice}}</p>
            <p class="cart_buttons"><a href="{{asset('')}}cart" class="btn btn-fill-line view-cart">View Cart</a><a href="{{asset('')}}checkout" class="btn btn-fill-out checkout">Checkout</a></p>
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
    <script src="{{asset('')}}assets2/js/jquery-3.6.0.min.js"></script> 
<!-- jquery-ui --> 
<script src="{{asset('')}}assets2/js/jquery-ui.js"></script>
<!-- popper min js -->
<script src="{{asset('')}}assets2/js/popper.min.js"></script>
<!-- Latest compiled and minified Bootstrap --> 
<script src="{{asset('')}}assets2/bootstrap/js/bootstrap.min.js"></script> 
<!-- owl-carousel min js  --> 
<script src="{{asset('')}}assets2/owlcarousel/js/owl.carousel.min.js"></script> 
<!-- magnific-popup min js  --> 
<script src="{{asset('')}}assets2/js/magnific-pop up.min.js"></script> 
<!-- waypoints min js  --> 
<script src="{{asset('')}}assets2/js/waypoints.min.js"></script> 
<!-- parallax js  --> 
<script src="{{asset('')}}assets2/js/parallax.js"></script> 
<!-- countdown js  --> 
<script src="{{asset('')}}assets2/js/jquery.countdown.min.js"></script> 
<!-- imagesloaded js --> 
<script src="{{asset('')}}assets2/js/imagesloaded.pkgd.min.js"></script>
<!-- isotope min js --> 
<script src="{{asset('')}}assets2/js/isotope.min.js"></script>
<!-- jquery.dd.min js -->
<script src="{{asset('')}}assets2/js/jquery.dd.min.js"></script>
<!-- slick js -->
<script src="{{asset('')}}assets2/js/slick.min.js"></script>
<!-- elevatezoom js -->
<script src="{{asset('')}}assets2/js/jquery.elevatezoom.js"></script>
<!-- scripts js --> 
<script src="{{asset('')}}assets2/js/scripts.js"></script>
<script src="{{asset('assets2/js/custom.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>


    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->


 
    <!-- Main JS -->
    <script src="{{asset('')}}assets1/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
    
    
    
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

if($("#liveclass").length > 0)
{
  $('#liveclass').validate({
    rules:{
     category : {
        required : true,
        maxlength : 50
      },
      course : {
        required : true,
        maxlength : 50,
        
      },
     
      subject : {
        required : true,
        maxlength : 50, 
        email : true
      },
      kidname : {
        required : true,
        maxlength : 50, 
        email : true
      },
     
      useremail : {
        required : true,
        maxlength : 200,
        
      },
      user_phone : {
        required : true,
        maxlength : 200,
        
      },
      parentName : {
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
     category : {
        required : 'Please enter a value ',
        maxlength : 'Name should not be more than 50 character'
      },
      course : {
        required : 'Please enter a value',
        maxlength : 'phone should not be more than 50 character'
      },
      subject : {
         required : 'Please enter a value ',
         maxlength : 'phone should not be more than 50 character'
       },
       kidname : {
         required : 'Enter Kid Name',
         maxlength : 'phone should not be more than 50 character'
       },
       parentName : {
         required : 'Enter Parent Name',
         maxlength : 'phone should not be more than 50 character'
       },
       
       useremail : {
        required : 'Enter  Email id ',
        maxlength : 'Addres should not be more than 200 character'
      },
      user_phone : {
        required : 'Enter mobile number Name',
        maxlength : 'Addres should not be more than 200 character'
      },
      city : {
        required : 'Enter city',
        maxlength : 'city should not be more than 200 character'
      },
      state : {
        required : 'Please enter a value',
        maxlength : 'state should not be more than 200 character'
      },
      country : {
        required : 'Please enter a value',
        maxlength : 'country should not be more than 200 character'
      },
      zip : {
        required : 'Enter Pincode',
        maxlength : 'Pin should not be more than 200 character'
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
   url:'{{asset('')}}register/submit',
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
 jQuery('#school').submit(function(e){
 e.preventDefault();
 jQuery('.field_error').html('');
 jQuery.ajax({
   url:'{{asset('')}}school_register/submit',
   type:'post',
   data:jQuery('#school').serialize(),
   success:function(result){
      if(result.status=="error"){
        jQuery.each(result.error,function(key,val){
         jQuery('#'+key+'_error').html(val[0]);
          
        });
      }
      
      if(result.status=="success"){
        //window.location.href=window.location.href;
        
       jQuery('#school')[0].reset();
       jQuery('#Thank_you_msg').html(result.msg);
       
      }
     }
   });
 });
 jQuery('#liveclass').submit(function(e){
 e.preventDefault();
 jQuery('.field_error').html('');
 jQuery.ajax({
   url:'{{asset('')}}liveclass/submit',
   type:'post',
   data:jQuery('#liveclass').serialize(),
   success:function(result){
      if(result.status=="error"){
        jQuery.each(result.error,function(key,val){
         jQuery('#'+key+'_error').html(val[0]);
          
        });
      }
      
      if(result.status=="success"){
        //window.location.href=window.location.href;
        
       jQuery('#liveclass')[0].reset();
       jQuery('#Thank_you_msg').html(result.msg);
       
      }
     }
   });
 });
 jQuery('#frmlogin').submit(function(e){
 e.preventDefault();
 jQuery('.frmlogin').html('');
 jQuery.ajax({
   url:'{{asset('')}}Student/auth',
   type:'post',
   data:jQuery('#frmlogin').serialize(),
   success:function(result){
      if(result.status=="error"){
       jQuery('#login_msg').html(result.msg);
      }
      if(result.status=="success"){
        window.location.href=window.location.href;
        
       //jQuery('#frmlogin')[0].reset();
       //jQuery('#Thank_you_msg').html(result.msg);
      }
     }
   });
 });
 jQuery('#frmlogin1').submit(function(e){
 e.preventDefault();
 jQuery('.frmlogin1').html('');
 jQuery.ajax({
   url:'{{asset('')}}test/school/auth',
   type:'post',
   data:jQuery('#frmlogin1').serialize(),
   success:function(result){
      if(result.status=="error"){
       jQuery('#login_msg1').html(result.msg);
      }
      if(result.status=="success"){
        window.location.href=window.location.href;
        
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
   url:'{{asset('')}}frogot_password ',
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
   url:'{{asset('')}}school_frogot_password ',
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
   url:'{{asset('')}}frogot_password_change',
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
   url:'{{asset('')}}school_frogot_password_change',
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
     url:'{{asset('')}}add_to_cart',
     data:jQuery('#frmAddToCart').serialize(),
     type:'post',
     success:function(result){
      
      alert(''+result.msg);
       window.location.href='{{asset('')}}cart';
       if(result.totalItem==0){
         jQuery('.cart_count').html('0');
         jQuery('.shopping-cart-inner').hide();
         
          
       }
       else{
         jQuery('.cart_count').html(result.totalItem);
       }
       
     }

   });  
 
 
 }
 function add_to_cart1($id,$level){
   jQuery('#blevel_id').val($id);
   jQuery('#plevel').val($level);
  
   var id=jQuery('#blevel_id').val();
   jQuery('#pcourse_id').val(jQuery('#course_id').val());
   jQuery.ajax({
     url:'{{asset('')}}add_to_cart1',
     data:jQuery('#frmAddToCart1').serialize(),
     type:'post',
     success:function(result){
      
        alert(''+result.msg);
         window.location.href='{{asset('')}}course_cart'; 
       if(result.totalItem==0){
         jQuery('.cart_span').html('0');
         jQuery('.shopping-cart cart-opened').remove(); 
           
       }
       else{
         jQuery('.cart_span').html('result.totalItem');
       }
       
      
       
       

    jQuery('#order_place_msg').html(result.msg);
   
    

      
      
    }

   });  
   
 }
 function join_level($id,$level_id){
   jQuery('#pcourse_id').val($id);
   jQuery('#blevel_id').val($level_id);
  
  jQuery('#pexecutive_id').val(jQuery('#executive_id').val());
   jQuery.ajax({
     url:'{{asset('')}}join_level',
     data:jQuery('#frmjoin_level').serialize(),
     type:'post',
     success:function(result){
      
      window.location.href="{{asset('')}}show_cart";
      if(result.totalItem==0){
        jQuery('.cart_span').html('0');
        jQuery('.shopping-cart cart-opened').remove(); 
         
      }
      else{
        jQuery('.cart_span').html('result.totalItem');
      }
      jQuery('#order_place_msg').html(result.msg);
      
    }

   });  
   
 }
 function deleteCartProduct(attr_id,pid){
  jQuery('#cbook_id').val(pid);
 jQuery('#qty').val(0)
 add_to_cart(attr_id);
 //jQuery('#total_price_'+attr_id).html('Rs '+qty*price);
 jQuery('#cart_box'+attr_id).hide();
}
function deleteCartProduct1(attr_id,pid){
  jQuery('#ccourse_id').val(pid);
 
 add_to_cart1(attr_id);
 //jQuery('#total_price_'+attr_id).html('Rs '+qty*price);
 jQuery('#cart_box'+attr_id).hide();
}
 function updataQty(attr_id,pid,price){
  
   jQuery('#cbook_id').val(pid);
   var qty=jQuery('#qty'+pid).val();
   jQuery('#qty').val(qty)
   add_to_cart(attr_id);
   jQuery('#total_price_'+attr_id).html('Rs '+qty*price);

   
   
   
    
 }
 function updataQty1(attr_id,pid){
   jQuery('#pbook_id').val(book_id);
   var qty=jQuery('#qty'+pid).val();
   jQuery('#qty').val(qty)
   add_to_cart(attr_id,pid);
   
   
   
    
 }

 function sort_by(){
   var sort_by_value=jQuery('#sort_by_value').val();
   jQuery('#sort').val(sort_by_value);
   jQuery('#categoryFilter').submit();

 

 }
 
 function sort_by1(){
   jQuery('#book').val(jQuery('#book_id').html());
   jQuery('#categoryFilter').submit();
  

 

 }
 function sort_price_filter(){  
  
   jQuery('#filter_price_start').val(jQuery('#flt_price').html());
   jQuery('#filter_price_end').val(jQuery('#flt_price1').html());
   jQuery('#categoryFilter').submit();
   
  
 }
 function funSerarch(){
   var search_str=jQuery('#search_str').val();
   if(search_str!='' &&search_str.length>3){
     window.location.href='{{asset('')}}search/'+search_str;

   }

 }
 function applyCouponCode(){
   jQuery('#coupon_code_msg').html('');
   jQuery('#order_place_msg').html(''); 
   var coupon_code=jQuery('#coupon_code').val();
   if(coupon_code!=''){
     jQuery.ajax({
       type:'post',
       url:'{{asset('')}}apply_coupon_code',
       data:'coupon_code='+coupon_code+'&_token='+jQuery("[name='_token']").val(),
       success:function(result){
         if(result.status=='success'){
           jQuery('.shop_coupon_box').removeClass('hide');
           jQuery('#coupon_code_str').html(coupon_code);
           jQuery('#total_price').html(result.totalPrice);
           jQuery('#total_price1').val(result.totalPrice);
           jQuery('.apply_coupon_box').hide();
           
           

         }else{
           
         }
         jQuery('#order_place_msg').html(result.msg);
       }

     });
     

   }else{
     jQuery('#order_place_msg').html('Please enter coupon code');

   }
 }
 function applyCouponCode1(){
   jQuery('#coupon_code_msg').html('');
   jQuery('#coupon_code_msg').html(''); 
 
   var coupon_code=jQuery('#coupon_code').val();
   if(coupon_code!=''){
     jQuery.ajax({
       type:'post',
       url:'{{asset('')}}apply_coupon_code1',
       data:'coupon_code='+coupon_code+'&_token='+jQuery("[name='_token']").val(),
       success:function(result){
         if(result.status=='success'){
           jQuery('.shop_coupon_box').removeClass('hide');
           jQuery('#coupon_code_str').html(coupon_code);
           jQuery('#total_price').html(result.totalPrice);
           jQuery('#total_price1').val(result.totalPrice);
           jQuery('.apply_coupon_box').hide();
           
           

         }else{
           
         }
         jQuery('#coupon_code_msg').html(result.msg);
       }

     });
     

   }else{
     jQuery('#coupon_code_msg').html('Please enter coupon code');

   }
 }
 function pay_now1(){
        var name=jQuery('#name').val();
        var amt=jQuery('#total_price1').val();
         jQuery.ajax({
               type:'post',
               url:'{{asset('')}}course/place_order1',
              data:jQuery('#frmPlaceOrder1').serialize(),
               success:function(result){
                 if(result.payment_url!=''){
                   var options = {
                        "key": "rzp_test_PspFUFTwqhN4CY", 
                        "amount": amt*100, 
                        "currency": "INR",
                        "name": name,
                        "phone": phone,
                        "email": email,
                        "description": "Test Transaction",
                        "image": "https://image.freepik.com/free-vector/logo-sample-text_355-558.jpg",
                        "handler": function (response){
                           jQuery.ajax({
                               type:'post',
                               url:'{{asset('')}}course/razorpay',
                               data:"payment_id="+response.razorpay_payment_id,
                             
                               success:function(result){
                                 window.location.href="{{asset('')}}course_placed"; 
                               }
                           });
                        }
                    };
                  }
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
               }
           });
        
        
    }
   function pay_now(){
        var name=jQuery('#name').val();
        var amt=jQuery('#total_price1').val();
         jQuery.ajax({
               type:'post',
               url:'{{asset('')}}book/place_order',
              data:jQuery('#frmPlaceOrder').serialize(),
               success:function(result){
                 if(result.payment_url!=''){
                   var options = {
                        "key": "rzp_test_PspFUFTwqhN4CY", 
                        "amount": amt*100, 
                        "currency": "INR",
                        "name": name,
                        "phone": phone,
                        "email": email,
                        "description": "Test Transaction",
                        "image": "https://image.freepik.com/free-vector/logo-sample-text_355-558.jpg",
                        "handler": function (response){
                           jQuery.ajax({
                               type:'post',
                               url:'{{asset('')}}book/razorpay',
                               data:"payment_id="+response.razorpay_payment_id,
                             
                               success:function(result){
                                 window.location.href="{{asset('')}}order_placed"; 
                               }
                           });
                        }
                    };
                  }
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
               }
           });
        
        
    }
    
 function course_remove($id)
 {
   
   jQuery('#pbook_id').val($id);
  
   jQuery.ajax({
     url:'{{asset('')}}add_to_cart_course',
     data:jQuery('#frmAddToCart').serialize(),
     type:'post',
     success:function(result){
       window.location.href='{{asset('')}}show_cart';
      
     if(result.totalItem==0){
         jQuery('.cart_span').html('0');
         jQuery('.shopping-cart cart-opened').remove(); 
           
       }
       else{
         jQuery('.cart_span').html('result.totalItem');
       }
       
      
       
       

    jQuery('#order_place_msg').html(result.msg);
       
     }

   });
  
 }
 function remove_coupon_code1(){
   jQuery('#coupon_code_msg').html('');
   var coupon_code=jQuery('#coupon_code').val();
   if(coupon_code!=''){
     jQuery.ajax({
       type:'post',
       url:'{{asset('')}}remove_coupon_code1',
       data:'coupon_code='+coupon_code+'&_token='+jQuery("[name='_token']").val(),
       success:function(result){
         if(result.status=='success'){
           jQuery('.shop_coupon_box').addClass('hide');
           jQuery('#coupon_code_str').html('');
           jQuery('#total_price').html('Rs. '+result.totalPrice);
           jQuery('.apply_coupon_box').show();
           
           

         }else{
           
         }
         jQuery('#coupon_code_msg').html(result.msg);
       }

     });
   }
     

   
 }
 function remove_coupon_code(){
   jQuery('#coupon_code_msg').html('');
   var coupon_code=jQuery('#coupon_code').val();
   if(coupon_code!=''){
     jQuery.ajax({
       type:'post',
       url:'{{asset('')}}remove_coupon_code',
       data:'coupon_code='+coupon_code+'&_token='+jQuery("[name='_token']").val(),
       success:function(result){
         if(result.status=='success'){
           jQuery('.shop_coupon_box').addClass('hide');
           jQuery('#coupon_code_str').html('');
           jQuery('#total_price').html('Rs. '+result.totalPrice);
           jQuery('.apply_coupon_box').show();
           
           

         }else{
           
         }
         jQuery('#coupon_code_msg').html(result.msg);
       }

     });
   }
     

   
 }
 jQuery('#frmPlaceOrder').submit(function(e){
 e.preventDefault();
 jQuery('.Thank_you_msg').html('');
 jQuery.ajax({
   url:'{{asset('')}}place_order',
   type:'post',
   data:jQuery('#frmPlaceOrder').serialize(),
   success:function(result){

     if(result.status=='success'){
       if(result.payment_url!=''){
         window.location.href=result.payment_url;

       }else{
         window.location.href="{{asset('')}}order_placed";

       }
      

     }else{

     }
     jQuery('#order_place_msg').html(result.msg);
      
     }
   });
 });
 jQuery('#frmPlaceOrder1').submit(function(e){
 e.preventDefault();
 jQuery('.Thank_you_msg').html('');
 jQuery.ajax({
   url:'{{asset('')}}place_order1',
   type:'post',
   data:jQuery('#frmPlaceOrder1').serialize(),
   success:function(result){

     if(result.status=='success'){
       if(result.payment_url!=''){
         window.location.href=result.payment_url;

       }else{
         window.location.href="{{asset('')}}order_placed1";

       }
      

     }else{

     }
     jQuery('#order_place_msg').html(result.msg);
      
     }
   });
 });
 function confirm_join($id,$courses){
   jQuery('#blevel_id').val($id);
  
   
   jQuery('#pcourses').val($courses);
  jQuery('#pcoupon_code').val(jQuery('#coupon_code').val());
  jQuery('#ptotal_price').val(jQuery('#total_price').val());
   
   jQuery.ajax({
     url:'{{asset('')}}confirm_join',
     data:jQuery('#frmAddToCart1').serialize(),
     type:'post',
     success:function(result){
      
       
         consol.log(result);
   
    

      
      
    }

   });  
 }
 
 jQuery(document).ready(function(){
              jQuery('#category').change(function(){
                  let mid=jQuery(this).val();
                  jQuery('#sub').html('<option value="">Select option</option>')
                  jQuery.ajax({
                          url:'{{asset('')}}front/getCat',
                          type:'post',
                          data:'mid='+mid+'&_token={{csrf_token()}}',
                          success:function(result){
                              jQuery('#course').html(result)
                          }
                      });
              });
              jQuery('#course').change(function(){
                      let cid=jQuery(this).val();
                      jQuery('#sub').html('<input value="">')
                      jQuery.ajax({
                          url:'{{asset('')}}front/getSub',
                          type:'post',
                          data:'cid='+cid+'&_token={{csrf_token()}}',
                          success:function(result){
                              jQuery('#sub').html(result)
                          }
                      });
                  });
              
            
          });
        
  
  </script> 
  
 
</body>


<!-- Mirrored from raistheme.com/html/gostudy/gostudy/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Jan 2022 04:52:33 GMT -->
</html>