<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <title>Nava vidya</title> 
       <link rel="shortcut icon" type="image/x-icon" href="{{asset('')}}assets1/images/favicon.png">
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
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    
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
                                    <img  src="{{asset('assets/images/admin/')}}/{{session()->get('SUPERADMIN_IMAGE')}}" alt="John Doe" / style="height: 45px;">
                                    </div>
                                    <div class="content" style="margin-left: 69px; margin-top:9px;">
                                        {{session()->get('SUPERADMIN_NAME')}}
                                    </div>
                                    
                                
                                </a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                               
                                
                                <li>
                                    <a href="{{asset('superadmin/edit_profile')}}"> <i class="zmdi zmdi-account"></i> My Profile</a>
                                </li>
                                <li>
                                    
                                        <a href="{{asset('superadmin/logout')}}"><i class="zmdi zmdi-power"></i> Logout</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class=" has-sub">
                            <a  href="{{asset('superadmin/dashboard')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                                
                            </a>
                           
                        </li>
                        
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-book"></i>Manage Course</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="{{asset('superadmin/mode_list')}}">
                                        <i class="fas fa-table"></i>Mode of eduction</a>
                                </li>
                                <li>
                                    <a href="{{asset('superadmin/category')}}">
                                        <i class="fas fa-table"></i>Category</a>
                                </li>
                                <li>
                                    <a href="{{asset('superadmin/add_course')}}">
                                        <i class="far fa-check-square"></i>Course</a>
                                </li>
                                <li>
                                    <a href="{{asset('superadmin/course_list')}}">
                                        <i class="fas fa-calendar-alt"></i>Course list</a>
                                </li>
                                <li>
                                    <a href="{{asset('superadmin/feature_list')}}">
                                        <i class="fas fa-map-marker-alt"></i>Feature list</a>
                                </li>
                                <li>
                                    <a href="{{asset('superadmin/testimonials_list')}}">
                                        <i class="fas fa-map-marker-alt"></i>Testimonials list</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-book"></i>Manage Orders</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="{{asset('superadmin/orders')}}">
                                        <i class="fas fa-table"></i> Books Orders</a>
                                </li>
                                 <li>
                                    <a href="{{asset('')}}superadmin/course_details">
                                        Course Student</a>
                                </li>
                                
                                
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Set Permission</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="{{asset('superadmin/book')}}">
                                        Books</a>
                                </li>
                                <li>
                                    <a href="{{asset('superadmin/banner')}}">
                                        Banner Index</a>
                                </li>
                                <li>
                                    <a href="{{asset('superadmin/address')}}">
                                        Add Address</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>Admin Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="{{asset('superadmin/franchise_list')}}">
                                        Franchise user List</a>
                                </li>
                                <li>
                                    <a href="{{asset('superadmin/admin_list')}}">
                                        Admin user List</a>
                                </li>
                                <li>
                                    <a href="{{asset('superadmin/franchise_ch_number')}}">
                                        Change Phone Number</a>
                                </li>
                                <li>
                                    <a href="{{asset('superadmin/school_list')}}">
                                       School List</a>
                                </li>
                                
                               
                                <li>
                                    <a href="{{asset('superadmin/workshop_list')}}">
                                        Workshop</a>
                                </li>
                                <li>
                                    <a href="{{asset('superadmin/workshop_paymentList')}}">
                                        Warkshop Payment</a>
                                </li>
                                <li>
                                    <a href="{{asset('superadmin/payment_data')}}">
                                        Payment Report </a>
                                </li>
                                <li>
                                    <a href="{{asset('superadmin/student_data')}}">
                                        Student Report</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Roll Master</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="{{asset('superadmin/employee')}}">
                                        Employee</a>
                                </li>
                                <li>
                                    <a href="#">
                                        Roles</a>
                                </li>
                                <li>
                                    <a href="#">
                                       Employee Roles</a>
                                </li>
                            </ul>
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
                                    <img src="{{asset('assets/images/admin/')}}/{{session()->get('SUPERADMIN_IMAGE')}}" alt="John Doe"  style="height: 45px;"/>
                                    </div>
                                    <div class="content">
                                        {{session()->get('SUPERADMIN_NAME')}}
                                    </div>
                                   </div>
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{asset('superadmin/edit_profile')}}"> <i class="zmdi zmdi-account"></i> My Profile</a>
                        </li>
                        <li>
                            
                                <a href="{{asset('superadmin/logout')}}"><i class="zmdi zmdi-power"></i> Logout</a>
                        </li>
                        
                    </ul>
                </li>
                <li class="has-sub">
                    <a  href="dashboard">
                        <i class="fas fa-tachometer-alt"></i>Dashboard
                        
                    </a>
                   
                </li>
                
                
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-book"></i>Manage Course
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{asset('superadmin/mode_list')}}">
                                Mode of eduction</a>
                        </li>
                        <li>
                            <a href="{{asset('superadmin/category')}}">
                                Category</a>
                        </li>
                        <li>
                            <a href="{{asset('superadmin/add_course')}}">
                                Course</a>
                        </li>
                        <li>
                            <a href="{{asset('superadmin/course_list')}}">
                                Course list</a>
                        </li>
                        <li>
                            <a href="{{asset('superadmin/feature_list')}}">
                                Feature list</a>
                        </li>
                        <li>
                            <a href="{{asset('superadmin/testimonials_list')}}">
                                Testimonials list</a>
                        </li>
                        
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-book"></i>Manage Orders
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{asset('superadmin/orders')}}">
                                Books Orders</a>
                        </li>
                         <li>
                                    <a href="{{asset('')}}superadmin/course_details">
                                        Course Student</a>
                                </li>
                        
                        
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Set Permission
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{asset('superadmin/book')}}">
                                Books</a>
                        </li>
                        <li>
                            <a href="{{asset('superadmin/banner')}}">
                                Banner Index</a>
                        </li>
                        <li>
                            <a href="{{asset('superadmin/address')}}">
                                Add Address</a>
                        </li>
                        
                    </ul>
                </li>
                <li class="has-sub">
                    <a  href="{{asset('superadmin/list_of_request')}}">
                        List of Request
                        
                    </a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-desktop"></i>Admin Dashboard
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{asset('superadmin/franchise_list')}}">
                                Franchise user List</a>
                        </li>
                        <li>
                            <a href="{{asset('superadmin/admin_list')}}">
                                Admin user List</a>
                        </li>
                        <li>
                            <a href="{{asset('superadmin/franchise_ch_number')}}">
                                Change Phone Number</a>
                        </li>
                        <li>
                            <a href="{{asset('superadmin/school_list')}}">
                               School List</a>
                        </li>
                        
                       
                        <li>
                            <a href="{{asset('superadmin/workshop_list')}}">
                                Workshop</a>
                        </li>
                        <li>
                            <a href="{{asset('superadmin/workshop_paymentList')}}">
                                Warkshop Payment</a>
                        </li>
                        <li>
                            <a href="{{asset('superadmin/payment_data')}}">
                                Payment Report </a>
                        </li>
                        <li>
                            <a href="{{asset('superadmin/student_data')}}">
                            Student Report</a>
                        </li>
                        
                        
                        
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Roll 
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{asset('superadmin/employee')}}">
                                Employee</a>
                        </li>
                        <li>
                            <a href="#">
                                Roles</a>
                        </li>
                        <li>
                            <a href="#">
                               Employee Roles</a>
                        </li>
                        
                        
                        
                        
                        </li>
                    </ul>
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
                                            <img src="{{asset('assets/images/admin/')}}/{{session()->get('SUPERADMIN_IMAGE')}}" alt="John Doe" style="height: 45px;" />
                                            </div>
                                        
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{session()->get('ADMIN_NAME')}}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                
                                                <div class="image img-cir img-120">
                                                    <img src="{{asset('assets/images/admin/')}}/{{session()->get('SUPERADMIN_IMAGE')}}" alt="John Doe" style="height: 65px;" />
                                                    </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">{{session()->get('ADMIN_NAME')}}</a>
                                                    </h5>
                                                    <span class="email">{{session()->get('ADMIN_EMAIL')}}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="{{asset('superadmin/edit_profile')}}">
                                                    <i class="zmdi zmdi-account"></i> Edit Profile</a>
                                            </div>
                                         
                                            <div class="account-dropdown__footer">
                                                <a href="{{asset('superadmin/logout')}}"><i class="zmdi zmdi-power"></i> Logout</a>
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
      
        
        
    
        
        </script>
         <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
         <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
         
        
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       
         <script>
         $(document).ready(function() {
                $("#textarea-input").summernote();
                $('.dropdown-toggle').dropdown();
            });
            $(document).ready(function() {
                $("#description").summernote();
                $('.dropdown-toggle').dropdown();
            });
        
         $(document).ready(function (e) {
         
           
           $('#image').change(function(){
                    
            let reader = new FileReader();
         
            reader.onload = (e) => { 
         
              $('#preview-image-before-upload').attr('src', e.target.result); 
            }
         
            reader.readAsDataURL(this.files[0]); 
           
           });
           
        });
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
         
         function check_student_details(){
             var cat=jQuery('#cat').val();
             var sub=jQuery('#sub').val();
             if(sub!='')
             window.location.href='{{asset('')}}superadmin/student_data/'+sub;
            
          
         }
         function check_payment_details(){
             var cat=jQuery('#cat').val();
             var sub=jQuery('#sub').val();
             if(sub!='')
             window.location.href='{{asset('')}}superadmin/payment_data/'+sub;
            
          
         }
         
             function update_payment_status(id){
                 var check=confirm('Are you sure?');
                 var payment_status=jQuery('#payment_status').val();
                 
                 if(check==true){
                     window.location.href='/superadmin/update_payment_status/'+payment_status+'/'+id;

                 } 
                   
             }
             function update_orders_status(id){
                 var check=confirm('Are you sure?');
                 var orders_status=jQuery('#orders_status').val();
                 
                 if(check==true){
                     window.location.href='/superadmin/update_orders_status/'+orders_status+'/'+id;

                 }
                   
             }

             jQuery(document).ready(function(){
                 jQuery('#mode').change(function(){
                     let mid=jQuery(this).val();
                     jQuery('#sub').html('<option value="">Select option</option>')
                     jQuery.ajax({
                             url:'{{asset('')}}superadmin/getCat',
                             type:'post',
                             data:'mid='+mid+'&_token={{csrf_token()}}',
                             success:function(result){
                                 jQuery('#category').html(result)
                             }
                         });
                 });
                 jQuery('#category').change(function(){
                         let cid=jQuery(this).val();
                         jQuery.ajax({
                             url:'{{asset('')}}superadmin/getSub',
                             type:'post',
                             data:'cid='+cid+'&_token={{csrf_token()}}',
                             success:function(result){
                                 jQuery('#sub').html(result)
                             }
                         });
                     });
                 
               
             });
             jQuery(document).ready(function(){
                 jQuery('#cat').change(function(){
                     let cid=jQuery(this).val();
                     
                     jQuery.ajax({
                             url:'{{asset('')}}superadmin/getstudentCat',
                             type:'post',
                             data:'cid='+cid+'&_token={{csrf_token()}}',
                             success:function(result){
                                 jQuery('#sub').html(result)
                             }
                         });
                 });
                 
               
             });
             
            
                  
             
            
 

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
    <style>
        .error {
        color: #FF0000;
        margin-top: 7px;
    }
    label#doc-error {
    margin-top: 84px;
}
    </style>
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script> 
         <script>
          
            $(document).ready(function(){
                if($("#frmRegistration").length > 0)
                {
                  $('#frmRegistration').validate({
                    rules:{
                      
                      password:{
                          required:true,
                          minlength:8,
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
                if($("#mode").length > 0)
                {
                  $('#mode').validate({
                    rules:{
                      
                      name:{
                          required:true,
                          minlength:8,
                          maxlength:100
                      },
                      image:{
                          required:true,
                          
                      },
                      description:{
                          required:true,
                          minlength:8,
                          maxlength:200
                      }
            
                      
                    },
                    messages : {
                      
                       name : {
                         required : 'Enter you name',
                         maxlength : 'name should not be more than 50 character'
                       },
                       image : {
                          required : 'Enter you image',
                         maxlength : 'image should not be more than'
                         
                       },
                       description : {
                         required : 'Please enter a value',
                         maxlength : 'description should not be more than 200 character'
                       }
                       
                    }
                  });
                }
                
                });
                $(document).ready(function(){
                if($("#Category").length > 0)
                {
                  $('#Category').validate({
                    rules:{
                      
                      names:{
                          required:true,
                          minlength:2,
                          maxlength:100
                      },
                      stud_level:{
                          required:true,
                          minlength:2,
                          maxlength:100
                      },
                      sub_names:{
                          required:true,
                          minlength:2,
                          maxlength:100
                      },
                      subject_names:{
                          required:true,
                          minlength:2,
                          maxlength:100
                      },
                       type_id:{
                          required:true,
                          
                      },
                      image:{
                          required:true,
                          
                      }
                      
                    },
                    messages : {
                      
                       names : {
                         required : 'Enter Course Category',
                         maxlength : 'name should not be more than 50 character'
                       },
                       stud_level : {
                         required : 'Please enter Course Level',
                         maxlength : 'name should not be more than 50 character'
                         
                       },
                       sub_names : {
                         required : 'Please enter Subject Name',
                         maxlength : 'name should not be more than 50 character'
                         
                       },
                       subject_names : {
                         required : 'Please enter Subject Names',
                         maxlength : 'name should not be more than 50 character'
                         
                       },
                       type_id : {
                         required : 'Please select Category Type'
                        
                         
                       },
                       image : {
                       required : 'Select Image'
                        
                         
                       }
                      
                    }
                  });
                }
                
                });
                $(document).ready(function(){
                if($("#add_book").length > 0)
                {
                  $('#add_book').validate({
                    rules:{
                      
                      title:{
                          required:true,
                          minlength:2,
                          maxlength:100
                      },
                      level:{
                          required:true,
                          
                      },
                      sub_names:{
                          required:true,
                          minlength:2,
                          maxlength:100
                      },
                      publisher:{
                          required:true,
                          minlength:2,
                          maxlength:100
                      },
                       
                      image:{
                          required:true,
                          
                      }
                      
                    },
                    messages : {
                      
                       title : {
                         required : 'Enter you book name',
                         maxlength : 'name should not be more than 50 character'
                       },
                       level : {
                         required : 'Please enter book Level',
                         maxlength : 'name should not be more than 50 character'
                         
                       },
                       publisher : {
                         required : 'Please enter publisher No',
                         maxlength : 'name should not be more than 50 character'
                         
                       },
                       type_id : {
                         required : 'Please select Category Type'
                        
                         
                       },
                       image : {
                       required : 'Select Image'
                        
                         
                       }
                      
                    }
                  });
                }
                
                });
                $(document).ready(function(){
                if($("#add_subcategory").length > 0)
                {
                  $('#add_subcategory').validate({
                    rules:{
                      
                      sub_cat_name:{
                          required:true,
                          minlength:2,
                          maxlength:100
                      }
                      
                    },
                    messages : {
                      
                       sub_cat_name : {
                         required : 'select Category name:',
                         maxlength : 'name should not be more than 50 character'
                       }
                      
                    }
                  });
                }
                
                });
                $(document).ready(function(){
                if($("#add_testimonials").length > 0)
                {
                  $('#add_testimonials').validate({
                    rules:{
                      
                      name:{
                          required:true,
                          minlength:2,
                          maxlength:100
                      },
                      person_name:{
                          required:true,
                          minlength:2,
                          maxlength:100
                      },
                      image : {
                       required:true,
                        
                         
                       }
                      
                    },
                    messages : {
                      
                       name : {
                         required : 'Enter you Testimonials name:',
                         maxlength : 'name should not be more than 50 character'
                       },
                       person_name : {
                         required : 'Enter you Testimonials person name:',
                         maxlength : 'name should not be more than 50 character'
                       },
                       image : {
                       required : 'Select Image'
                        
                         
                       }
                      
                    }
                  });
                }
                
                });
                 $(document).ready(function(){
                if($("#address").length > 0)
                {
                  $('#address').validate({
                    rules:{
                      
                      location:{
                          required:true,
                          minlength:2,
                          maxlength:100
                      },
                      name:{
                          required:true,
                          minlength:2,
                          maxlength:100
                      },
                      city : {
                       required:true,
                       minlength:2,
                       maxlength:100
                        
                         
                       },
                       address1:{
                          required:true,
                          minlength:2,
                          maxlength:100
                      },
                      address2:{
                          required:true,
                          minlength:2,
                          maxlength:100
                      },
                      state : {
                       required:true,
                       minlength:2,
                       maxlength:100
                       
                        
                         
                       },
                       pincode : {
                       required:true,
                       minlength:2,
                       maxlength:100
                           
                       },
                       phone : {
                       required:true,
                       minlength:2,
                       maxlength:100
                           
                       },
                       alt_phone : {
                       required:true,
                       minlength:2,
                       maxlength:100
                           
                       },
                       email_id : {
                       required:true,
                       minlength:2,
                       maxlength:100
                           
                       },
                       alt_email : {
                       required:true,
                       minlength:2,
                       maxlength:100
                           
                       }
                      
                    },
                    messages : {
                      
                       location : {
                         required : 'Please enter Location Name',
                         maxlength : 'Place name should not be more than 50 character'
                       },
                       name : {
                         required : 'Enter you full name:',
                         maxlength : 'name should not be more than 50 character'
                       },
                       city : {
                       required : 'Enter City',
                       maxlength : 'name should not be more than 50 character'
                        
                         
                       },
                       address1 : {
                         required : 'Please enter address1',
                         maxlength : 'Place name should not be more than 50 character'
                       },
                       address2 : {
                         required : 'Please enter value',
                         maxlength : 'name should not be more than 50 character'
                       },
                       state : {
                       required : 'Enter State',
                       maxlength : 'name should not be more than 50 character'
                        
                         
                       },
                       pincode : {
                       required : 'Enter Pincode',
                       maxlength : 'name should not be more than 50 character'
                        
                         
                       },
                       phone : {
                       required : 'Enter Phone',
                       maxlength : 'name should not be more than 50 character'
                        
                         
                       },
                       alt_phone : {
                       required : 'Enter alt_phone',
                       maxlength : 'name should not be more than 50 character'
                        
                         
                       },
                       email_id : {
                       required : 'Enter Email id',
                       maxlength : 'name should not be more than 50 character'
                        
                         
                       },
                       alt_email : {
                       required : 'Enter alt_email',
                       maxlength : 'name should not be more than 50 character'
                        
                         
                       }
                      
                    }
                  });
                }
                
                });
                 $(document).ready(function(){
                if($("#add_feature").length > 0)
                {
                  $('#add_feature').validate({
                    rules:{
                      
                      heading:{
                          required:true,
                          minlength:2,
                          maxlength:100
                      },
                      icon_tag:{
                          required:true,
                          minlength:2,
                          maxlength:100
                      }
                      
                    },
                    messages : {
                      
                       heading : {
                         required : 'Enter you Feature name:',
                         maxlength : 'name should not be more than 50 character'
                       },
                       icon_tag : {
                         required : 'Enyter you Feature icon name:',
                         maxlength : 'name should not be more than 50 character'
                       }
                      
                    }
                  });
                }
                
                });
                
                $(document).ready(function(){
                if($("#add_level").length > 0)
                {
                  $('#add_level').validate({
                    rules:{
                      
                      type_id:{
                          required:true
                         
                      },
                      level:{
                          required:true,
                          minlength:2,
                          maxlength:100
                      },
                      text_link:{
                          required:true,
                          minlength:2,
                          maxlength:100
                      },
                      work_book_link:{
                          required:true,
                          minlength:2,
                          maxlength:100
                      },
                      sample_video_file_name:{
                          required:true,
                          minlength:2,
                          maxlength:100
                      },
                      level_img_file_name:{
                          required:true,
                          
                      },
                      price:{
                          required:true,
                          
                      },
                      
                    },
                    messages : {
                      
                       type_id : {
                         required : 'Please select Category Type'
                         
                       },
                       level : {
                         required : 'Please select Category level',
                         maxlength : 'name should not be more than 100 character'
                       },
                       text_link : {
                         required : 'enter you Text book Link.',
                         maxlength : 'name should not be more than 100 character'
                       },
                       work_book_link : {
                         required : 'enter you work book Link.',
                         maxlength : 'name should not be more than 100 character'
                       },
                       sample_video_file_name : {
                         required : 'enter you sample video file name',
                         maxlength : 'name should not be more than 100 character'
                       },
                       level_img_file_name : {
                       required : 'Select Image'
                        
                         
                       },
                       
                       price : {
                         required : 'enter you price',
                         
                       },
                      
                      
                    }
                  });
                }
                
                });
                $(document).ready(function(){
                if($("#add_book_level").length > 0)
                {
                  $('#add_book_level').validate({
                    rules:{
                      
                      title:{
                          required:true,
                          minlength:2,
                          maxlength:100
                      },
                      book:{
                          required:true,
                          
                      },
                      price:{
                          required:true,
                          minlength:2,
                          maxlength:100
                      },
                      
                       
                      image:{
                          required:true,
                          
                      }
                      
                    },
                    messages : {
                      
                       title : {
                         required : 'Enter you book name',
                         maxlength : 'name should not be more than 50 character'
                       },
                       book : {
                         required : 'Please enter book Level',
                         maxlength : 'name should not be more than 50 character'
                         
                       },
                       price : {
                         required : 'Please enter price ',
                         maxlength : 'name should not be more than 50 character'
                         
                       },
                       type_id : {
                         required : 'Please select Category Type'
                        
                         
                       },
                       image : {
                       required : 'Select Image'
                        
                         
                       }
                      
                    }
                  });
                }
                
                });
                $(document).ready(function(){
                if($("#add_course").length > 0)
                {
                  $('#add_course').validate({
                    rules:{
                      
                      sub_cat_id:{
                          required:true,
                          
                      },
                      cat_id:{
                          required:true,
                          
                      },
                      price:{
                          required:true,
                          
                      },
                      course_name:{
                          required:true,
                          
                      },
                      levels:{
                          required:true,
                          
                      },
                      sample_video:{
                          required:true,
                          
                      },
                      course_name:{
                          required:true,
                          
                      },
                      
                       
                      image:{
                          required:true,
                          
                      }
                      
                    },
                    messages : {
                      
                       sub_cat_id : {
                         required : 'Please enter a value'
                         
                       },
                       cat_id : {
                         required : 'Please select Course Category',
                        
                         
                       },
                       price : {
                         required : 'Please enter price ',
                         
                         
                       },
                       course_name : {
                         required : 'Enter Course Name',
                         
                         
                       },
                       type_id : {
                         required : 'Please select Category Type'
                        
                         
                       },
                       levels : {
                         required : 'Please enter levels ',
                         
                         
                       },
                       sample_video : {
                         required : 'Enter sample_video',
                         
                         
                       },
                       type_id : {
                         required : 'Please select Category Type'
                        
                         
                       },
                       image : {
                       required : 'Select Image'
                        
                         
                       }
                      
                    }
                  });
                }
                
                });
                $(document).ready(function(){
                if($("#admin_add").length > 0)
                {
                  $('#admin_add').validate({
                    rules:{
                      
                      name:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      email:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      phone:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
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
                      address:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      state:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      city:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      country:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      
                       
                      image:{
                          required:true,
                          
                      }
                      
                    },
                    messages : {
                      
                       name : {
                         required : 'Please Enter you name',
                         
                         
                       },
                       email : {
                         required : 'Please Enter you email id',
                        
                         
                       },
                       phone : {
                         required : 'Please Enter you phone number ',
                         
                         
                       },
                       address : {
                         required : 'please Enter address',
                         
                         
                       },
                       state : {
                         required : 'Please Enter you state'
                        
                         
                       },
                       country : {
                         required : 'Please Enter you country ',
                         
                         
                       },
                       city : {
                         required : 'Please Enter you city ',
                         
                         
                       },
                       password : {
                         required : 'lease Enter you password',
                         
                         
                       },
                       confirm_password : {
                         required : 'Need  to Confirm you new password',
                         
                       },
                       type_id : {
                         required : 'Please select Category Type'
                        
                         
                       },
                       image : {
                       required : 'Select Image'
                        
                         
                       }
                      
                    }
                  });
                }
                
                });
                $(document).ready(function(){
                if($("#add_franchise").length > 0)
                {
                  $('#add_franchise').validate({
                    rules:{
                      
                      f_name:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      l_name:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      email:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      phone:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      alternate_phone:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
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
                      address:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      assembly_cons:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      state:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      city:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      district:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      pincode:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      
                       
                      image:{
                          required:true,
                          
                      }
                      
                    },
                    messages : {
                      
                       f_name : {
                         required : 'Please Enter you full name',
                         
                         
                       },
                       l_name : {
                         required : 'Please Enter you last name',
                         
                         
                       },
                       email : {
                         required : 'Please Enter you email id',
                        
                         
                       },
                       phone : {
                         required : 'Please Enter you phone number ',
                         
                         
                       },
                       alternate_phone : {
                         required : 'Please Enter you alternate phone number ',
                         
                         
                       },
                       assembly_cons : {
                         required : 'Please Enter you Assembly Constiency',
                         
                         
                       },
                       address : {
                         required : 'please Enter address',
                         
                         
                       },
                       state : {
                         required : 'Please Enter you state'
                        
                         
                       },
                       district : {
                         required : 'Please Enter you district ',
                         
                         
                       },
                       pincode : {
                         required : 'Please Enter you Pin Code ',
                         
                         
                       },
                       city : {
                         required : 'Please Enter you city ',
                         
                         
                       },
                       password : {
                         required : 'lease Enter you password',
                         
                         
                       },
                       confirm_password : {
                         required : 'Need  to Confirm you new password',
                         
                       },
                       type_id : {
                         required : 'Please select Category Type'
                        
                         
                       },
                       image : {
                       required : 'Select Image'
                        
                         
                       }
                      
                    }
                  });
                }
                
                });
                $(document).ready(function(){
                if($("#franchise_ch_number").length > 0)
                {
                  $('#franchise_ch_number').validate({
                    rules:{
                      
                      new_phone:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      l_name:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      }
                      
                    },
                    messages : {
                      
                       new_phone : {
                         required : 'Please Enter you new phone',
                         
                         
                       },
                       l_name : {
                         required : 'Please Enter you last name',
                         
                         
                       }
                      
                    }
                  });
                }
                
                });
                $(document).ready(function(){
                if($("#add_school").length > 0)
                {
                  $('#add_school').validate({
                    rules:{
                      
                      school_name:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      pri_name:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      email:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      moe:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      no_of_login:{
                          required:true,
                          
                          maxlength:100
                          
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
                      address:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      categories:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      state:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      city:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      district:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      pincode:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      
                       
                      image:{
                          required:true,
                          
                      }
                      
                    },
                    messages : {
                      
                       school_name : {
                         required : 'Please Enter you school name',
                         
                         
                       },
                       pri_name : {
                         required : 'Please Enter you Peincipal name',
                         
                         
                       },
                       email : {
                         required : 'Please Enter you email id',
                        
                         
                       },
                       moe : {
                         required : 'Please Enter you Mode ',
                         
                         
                       },
                       no_of_login : {
                         required : 'Please Enter you alternate no of login',
                         
                         
                       },
                       categories : {
                         required : 'Please Enter you categories',
                         
                         
                       },
                       address : {
                         required : 'please Enter address',
                         
                         
                       },
                       state : {
                         required : 'Please Enter you state'
                        
                         
                       },
                       district : {
                         required : 'Please Enter you district ',
                         
                         
                       },
                       pincode : {
                         required : 'Please Enter you Pin Code ',
                         
                         
                       },
                       city : {
                         required : 'Please Enter you city ',
                         
                         
                       },
                       password : {
                         required : 'lease Enter you password',
                         
                         
                       },
                       confirm_password : {
                         required : 'Need  to Confirm you new password',
                         
                       },
                       type_id : {
                         required : 'Please select Category Type'
                        
                         
                       },
                       image : {
                       required : 'Select Image'
                        
                         
                       }
                      
                    }
                  });
                }
                
                });
                $(document).ready(function(){
                if($("#add_employee").length > 0)
                {
                  $('#add_employee').validate({
                    rules:{
                      
                      first_name:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      pri_name:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      email:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      phone:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      no_of_login:{
                          required:true,
                          
                          maxlength:100
                          
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
                      address1:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      categories:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      state:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      city:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      country:{
                          required:true,
                          minlength:2,
                          maxlength:100
                          
                      },
                      pincode:{
                          required:true,
                          minlength:6,
                          maxlength:6
                          
                      },
                      
                       
                      image:{
                          required:true,
                          
                      }
                      
                    },
                    messages : {
                      
                       first_name : {
                         required : 'Please Enter you first name',
                         
                         
                       },
                       last_name : {
                         required : 'Please Enter you last name',
                         
                         
                       },
                       email : {
                         required : 'Please Enter you email id',
                        
                         
                       },
                       phone : {
                         required : 'Please Enter you phone ',
                         
                         
                       },
                       address2 : {
                         required : 'please Enter address',
                         
                         
                       },
                       categories : {
                         required : 'Please Enter you categories',
                         
                         
                       },
                       address1 : {
                         required : 'please Enter address',
                         
                         
                       },
                       state : {
                         required : 'Please Enter you state'
                        
                         
                       },
                       country : {
                         required : 'Please Enter you country ',
                         
                         
                       },
                       pincode : {
                         required : 'Please Enter you Pin Code ',
                         
                         
                       },
                       city : {
                         required : 'Please Enter you city ',
                         
                         
                       },
                       password : {
                         required : 'lease Enter you password',
                         
                         
                       },
                       confirm_password : {
                         required : 'Need  to Confirm you new password',
                         
                       },
                       type_id : {
                         required : 'Please select Category Type'
                        
                         
                       },
                       image : {
                       required : 'Select Image'
                        
                         
                       }
                      
                    }
                  });
                }
                
                });
                
                
                 
                 </script>
         
</body>

</html>
<!-- end document-->