<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <title>Nava vidya</title> 

    
    <link href="{{asset('assets/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/font-awesome-4.7/assets/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/font-awesome-5/assets/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/mdi-font/assets/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    
    <link href="{{asset('assets/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    
     
    
    <link href="{{asset('assets/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5" style="background-image: url('{{asset('assets/images/icon/school.png')}}');">
            
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content" style="background: #63a1ab;">
                        <div class="login-logo" >
                            <a href="#">
                                <img src="{{asset('assets/images/icon/logo.png')}}" alt="CoolAdmin">
                               
                            </a>
                        </div>
                        <div class="login-form" >
                            <form action="{{route('superadmin.auth')}}" method="post">
                               @csrf
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <label>Pass word</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password" required>
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                                 
                                <div class="alert alert-danger" role="alert">
                                    {{session('error') }}
                                  
                                    
                                </div>
                            </form>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

   
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
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->