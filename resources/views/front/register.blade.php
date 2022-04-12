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
                        <h4 class="title" style="text-align: center;">Sign Up</h4>
                         
                            <form id="frmRegistration" action="#">
                               
                            <div class="row" style="background: #fff">
                                <div class="col-sm-6">
                                    
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <label >First Name</label>
                                        <input type="text" id="name" name="name" placeholder="First Name">
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                <div class="col-sm-6">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <label >Last Name</label>
                                        <input type="text" id="last_name" name="last_name" placeholder="Last Name">
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                <div class="col-sm-6">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <label >Email</label>
                                        <input type="text" name="email"  id="email" placeholder="Your Email">
                                       <span id="email_error" class="field_error"></span>
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                <div class="col-sm-6">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <label >Phone</label>
                                        <input type="text" name="phone"  id="phone" placeholder="Phone">
                                        <span id="phone_error" class="field_error"></span>
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                <div class="col-sm-6">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <label >Password</label>
                                        <input type="password" name="password"  id="password" placeholder="Password" >
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                <div class="col-sm-6">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <label >Confirm Password</label>
                                        <input type="password" name="confirm_password"  id="confirm_password" placeholder="Confirm Password" >
                                    </div>
                                    <!-- Single Form End -->
                                </div>

                                <div class="col-sm-6">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <label >Address</label>
                                        <input type="text" name="address1"  id="address1" placeholder="1234 Main St">
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                <div class="col-sm-6">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <label >Address 2</label>
                                        <input type="text" name="address2" id="address2" placeholder="Apartment, studio, or floor">
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                <div class="col-sm-3">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <label >City</label>
                                        <input type="text" name="city" id="city">
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                <div class="col-sm-3">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <label> State</label>
                                        <select name="state" id="state">
                                            <option value="" selected>Choose...</option>
                                           <option selected>State</option>
                                               <option value="AD">Andhra Pradesh</option>
                                                                          <option value="AN">Andaman and Nicobar Islands</option>
                                                                          <option value="AR">Arunachal Pradesh</option>
                                                                          <option value="AS">Assam</option>
                                                                          <option value="BR">Bihar</option>
                                                                          <option value="CH">Chandigarh</option>
                                                                          <option value="CG">Chhattisgarh</option>
                                                                          
                                                                          <option value="DL">Delhi</option>
                                                                          <option value="LD">Lakshadweep</option>
                                                                          <option value="Puducherry">Puducherry</option>
                                                                          <option value="GA">Goa</option>
                                                                          <option value="GJ">Gujarat</option>
                                                                          <option value="HR">Haryana</option>
                                                                          <option value="HP">Himachal Pradesh</option>
                                                                          <option value="JK">Jammu and Kashmir</option>
                                                                          <option value="JH">Jharkhand</option>
                                                                          <option value="KA">Karnataka</option>
                                                                          <option value="KL">Kerala</option>
                                                                          <option value="MP">Madhya Pradesh</option>
                                                                          <option value="MH">Maharashtra</option>
                                                                          <option value="MN">Manipur</option>
                                                                          <option value="ML">Meghalaya</option>
                                                                          <option value="MZ">Mizoram</option>
                                                                          <option value="NL">Nagaland</option>
                                                                          <option value="OD">Odisha</option>
                                                                          <option value="PB">Punjab</option>
                                                                          <option value="RJ">Rajasthan</option>
                                                                          <option value="SK">Sikkim</option>
                                                                          <option value="TN">Tamil Nadu</option>
                                                                          <option value="TS">Telangana</option>
                                                                          <option value="TR">Tripura</option>
                                                                          <option value="UP">Uttar Pradesh</option>
                                                                          <option value="UK">Uttarakhand</option>
                                                                          <option value="WB">West Bengal</option>
                      
                                          </select>
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                <div class="col-sm-3">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <label >Country</label>
                                        <select name="country" id="country">
                                            <option >
                                                Choose...
                                            </option>
                                            <option >
                                                India
                                            </option>

                                        </select>
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                <div class="col-sm-3">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <label >Zip</label>
                                        <input type="text"  name="zip" id="zip" >
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                
                                
                                
                                <div class="col-sm-12">
                                    <!-- Single Form Start -->
                                    <div class="contact-btn" style="text-align: center">
                                        
                                        <input type="submit" id="btnRegistration" class="btn" value="Register" />
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