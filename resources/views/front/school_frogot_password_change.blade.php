@extends('front/layout')

@section('container')
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
                        <h4 class="title" style="text-align: center;">Forgot Password</h4>
                         
                            <form id="frmforgotpassword1" action="#">
                               
                            <div class="row" style="background: #fff">
                                <div class="col-sm-12">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <label >Password</label>
                                        <input type="password" name="password"  id="password" placeholder="Password" >
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                <div class="col-sm-12">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <label >Confirm Password</label>
                                        <input type="password" name="confirm_password"  id="confirm_password" placeholder="Confirm Password" >
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                
                                
                                
                                <div class="col-sm-12">
                                    <!-- Single Form Start -->
                                    <div class="contact-btn" style="text-align: center">
                                        
                                        <input type="submit" id="btnRegistration" class="btn" value="Update Password" />
                                        @csrf
                                        <div id="Thank_you_msg" class="field_error"></div>
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

@endsection