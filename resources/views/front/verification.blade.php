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
    .error
    {
     color:#FF0000;
     margin-top: 7px;
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
    

    
    <!-- Header End -->
    <div class="section contact-form-section section-padding-02" style="padding-bottom: 120px;">
        <div class="container">
            <!-- Contact Form Wrapper Start -->
            <div class="contact-form-wrapper">
                <div class="row">
                    <!--<div class="col-lg-4">
                        <div class="contact-map">
                            <img src="" alt="">
                             </div>
                    </div>-->
                    <div class="col-lg-12">
                        <!-- Contact Form Start -->
                        <div class="contact-form">
                            <h4 class="title" style="text-align: center;">Verification Email</h4>
                            
                                <form id="register" method="post" action="{{ url('email_verification') }}">
                                    @csrf
                                <div class="row" style="background: #fff">
                                    <div class="col-sm-12">
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <label >Email OTP</label>
                                            <input type="text" id="rand_id" name="rand_id" placeholder="OTP">
                                        </div>
                                        <!-- Single Form End -->
                                    </div>
                                    
                                   
                                   
                                    
                                    <div class="col-sm-12">
                                        <!-- Single Form Start -->
                                        <div class="contact-btn" style="text-align: center">
                                            
                                            <input type="submit" class="btn" value="sign in" />
                                           
                                        </div>
                                        <!-- Single Form End -->
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Contact Form End -->
                    </div>
                </div>
    
            </div>
            <!-- Contact Form Wrapper End -->
        </div>
    </div>

    <!-- Offcanvas Start -->
    

<!-- Back to Top End -->
<button class="back-btn" id="backBtn"><i class="flaticon-left-arrow-1"></i></button>
   
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
  
  if($("#register").length > 0)
   {
     $('#register').validate({
       rules:{
        rand_id : {
           required : true,
           maxlength : 6,
           minlength : 6
         }
         
       },
       messages : {
        rand_id : {
           required : 'Enter OTP',
           maxlength : 'Name should not be more than 6 Digit'
         }
       }
     });
   }
 
 });
 
  </script>
</body>


<!-- Mirrored from raistheme.com/html/gostudy/gostudy/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Jan 2022 04:52:33 GMT -->
</html>