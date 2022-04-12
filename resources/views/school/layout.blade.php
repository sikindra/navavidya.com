<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <title>Nava vidya</title> 

    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">


    <link href="{{asset('assets/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    
    <link href="{{asset('assets/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    
    <link href="{{asset('assets/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/slick/slick.css" rel="stylesheet')}}" media="all">
    <link href="{{asset('assets/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
    
    <link href="{{asset('assets/css/theme.css')}}" rel="stylesheet" media="all">

</head>


<body>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            {{Config::get('constants.site_name')}}
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <div class="account-item clearfix js-item-menu">
                                <div class="image img-cir img-120" style="margin-left: 13px;">
                                    <img  src="{{asset('assets/images/icon/avatar-01.jpg')}}" alt="John Doe" />
                                    </div>
                                    <div class="content" style="margin-left: 69px; margin-top:9px;">
                                        {{session()->get('SCHOOL_NAME')}}
                                    </div>
                                    
                                
                                </a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                               
                                
                                <li>
                                    <a href="#"> <i class="zmdi zmdi-account"></i> My Profile</a>
                                </li>
                                <li>
                                    
                                        <a href="{{asset('admin/logout')}}"><i class="zmdi zmdi-power"></i> Logout</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class=" has-sub">
                            <a  href="{{asset('admin/dashboard')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                                
                            </a>
                           
                        </li>
                        
                        
                        <li class="has-sub">
                            <a  href="{{asset('Student/joined_courses')}}">
                                Join Courses
                                
                            </a>
                        </li>
                        <li class="has-sub">
                            <a  href="{{asset('Student/payment_details')}}">
                                Payment Details
                                
                            </a>
                        </li>
                        

                        
                       
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    
                    <!--<img src="{{asset('assets/images/icon/logo.png')}}" alt="Cool Admin" />-->
                </a>
                {{Config::get('constants.site_name')}}
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                
        <nav class="navbar-sidebar2">
            <ul class="list-unstyled navbar__list">
                <li class="has-sub">
                    
                    <a class="js-arrow" href="#">
                        <div class="account-item clearfix js-item-menu">
                                
                            <div class="image img-cir img-120">
                                    <img src="{{asset('assets/images/icon/avatar-01.jpg')}}" alt="John Doe" />
                                    </div>
                                    <div class="content">
                                        {{session()->get('SCHOOL_NAME')}}
                                    </div>
                                   </div>
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="#"> <i class="zmdi zmdi-account"></i> My Profile</a>
                        </li>
                        <li>
                            
                                <a href="{{asset('admin/logout')}}"><i class="zmdi zmdi-power"></i> Logout</a>
                        </li>
                        
                    </ul>
                </li>
                <li class="has-sub">
                    <a  href="dashboard">
                        <i class="fas fa-tachometer-alt"></i>Dashboard
                        
                    </a>
                   
                </li>
                
                
                
                
                <li class="has-sub">
                    <a  href="{{asset('Student/joined_courses')}}">
                        Join Courses
                        
                    </a>
                </li>
                <li class="has-sub">
                    <a  href="{{asset('Student/payment_details')}}">
                        Payment Details
                        
                    </a>
                </li>
                
                
            </ul>
        </nav>
    </div>
</aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                
                                    
                                    
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        
                                        <div class="image img-cir img-120">
                                            <img src="{{asset('assets/images/icon/avatar-01.jpg')}}" alt="John Doe" />
                                            </div>
                                        
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"> {{session()->get('SCHOOL_NAME')}}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                
                                                <div class="image img-cir img-120">
                                                    <img src="{{asset('assets/images/icon/avatar-01.jpg')}}" alt="John Doe" />
                                                    </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"> {{session()->get('SCHOOL_NAME')}}</a>
                                                    </h5>
                                                    <span class="email"> {{session()->get('SCHOOL_EMAIL')}}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-account"></i> Edit Profile</a>
                                            </div>
                                         
                                            <div class="account-dropdown__footer">
                                                <a href="logout"><i class="zmdi zmdi-power"></i> Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
  
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        @section('container')
                            
                        @show
                        
                       
                        
                       
                        
                        
                    </div>
                </div>
            </div>
          
        </div>

    </div>

</body>
 

   
    <script src="{{asset('assets/vendor/jquery-3.2.1.min.js')}}"></script>
    
    <script src="{{asset('assets/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    
    <script src="{{asset('assets/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('assets/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('assets/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('assets/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('assets/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/select2/select2.min.js')}}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   



    </script>

    <!-- Main JS-->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script type="text/javascript">
      
        $(document).ready(function (e) {
         
           
           $('#image').change(function(){
                    
            let reader = new FileReader();
         
            reader.onload = (e) => { 
         
              $('#preview-image-before-upload').attr('src', e.target.result); 
            }
         
            reader.readAsDataURL(this.files[0]); 
           
           });
           
        });
        
    
         
        </script>
         <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
         <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
         <script>
             @if(Session::has('message'))
		var type="{{Session::get('alert-type','success')}}"

        

		switch(type){
			
	        case 'success':
	            toastr.success("{{ Session::get('message') }}");
	            break;
         	
	        case 'error':
		        toastr.error("{{ Session::get('message') }}");
		        break;
		}
	@endif
         </script>
         
</body>

</html>
<!-- end document-->