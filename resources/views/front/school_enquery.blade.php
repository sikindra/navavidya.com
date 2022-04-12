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
                        <h4 class="title" style="text-align: center;">School Enquiry Form</h4>
                        
                            <form id="school" action="#">
                            <div class="row" style="background: #fff">
                                <div class="col-sm-6">
                                    <!-- Single Form Start -->
                                        <div class="single-form">
                                            <label >School Name:</label>
                                            <input type="text" name="name" id="name" placeholder="Enter School Name">
                                        </div>
                                        <!-- Single Form End -->
                                    
                                    
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <label >School address:</label>
                                            <input type="text" name="address" id="address" placeholder="Enter School address">
                                        </div>
                                        <!-- Single Form End -->
                                
                                    
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <label >Principal Name</label>
                                            <input type="text" name="p_name" id="p_name" placeholder="Enter Principal Full Name" required>
                                        </div>
                                        <!-- Single Form End -->
                                    
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <label >School Email:</label>
                                            <input type="text" name="email" id="email" placeholder="Enter Email Address" required>
                                        </div>
                                        <!-- Single Form End -->
                                    
                                        <!-- Single Form Start -->
                                        <div class="col-md-12">
                                        <div class="single-form">
                                            <label >School Phone:</label>
                                            <input type="text" name="phone" id="phone" placeholder="Enter Phone Number" required>
                                        </div>
                                        </div>
                                        <!-- Single Form End -->
                                    
                                        <!-- Single Form Start -->
                                    <div class="row">
                                        <div class="col-md-6">
                                        <div class="single-form">
                                            <label >City:</label>
                                            <input type="text" name="city" id="city" placeholder="Enter City" required>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <label >Pin code:</label>
                                                <input type="text" name="pin" id="pin">
                                             </div>
                                        </div>
                                    </div>
                                
                                </div>
                                
                                <div class="col-sm-6">
                                    <!-- Single Form Start -->
                                        <div class="single-form">
                                            <label >Select interested Subject Category:</label>
                                            
                                        </div> 
                                        <div class="form-check ml-2">
                                            <input class="form-check-input"  value="Academic" type="checkbox" name="Category[]" id="flexRadioDefault1">
                                            <span class="form-check-label" for="Category">Academic</span>
                                        </div>
                                        <div class="form-check ml-2">
                                            <input class="form-check-input" value="Non-Academic" type="checkbox" name="Category[]" id="flexRadioDefault1">
                                            <span class="form-check-label" for="Category">Non-Academic</span>
                                        </div>
                                        <div class="form-check ml-2">
                                            <input class="form-check-input" value="Teacher Training Programe" type="checkbox" name="Category[]" id="flexRadioDefault1">
                                            <span class="form-check-label" for="Category">
                                                Teacher Training Programe
                                            </span>
                                        </div>
                                        <div class="form-check ml-2">
                                            <input class="form-check-input" value="Teacher Development Programe" type="checkbox" name="Category[]" id="flexRadioDefault1">
                                            <span class="form-check-label" for="Category">
                                                Teacher Development Programe
                                            </span>
                                        </div>
                                                    
                                                    
                               
                                        <div class="single-form">
                                            <label >Select Course Type (Mode of education):</label>
                                        </div>
                                        <div class="form-check ml-2">
                                            <input class="form-check-input" value="Pre-Ordered" type="checkbox" name="Course[]" id="flexRadioDefault1" checked>
                                            <span class="form-check-label" for="Description">
                                                Pre-Ordered
                                            </span>
                                        </div>
                                        <div class="form-check ml-2">
                                            <input class="form-check-input" value="live" type="checkbox" name="Course[]" id="flexRadioDefault1">
                                            <span class="form-check-label" for="Description">
                                                live
                                            </span>
                                        </div>
                                        <div class="form-check ml-2">
                                            <input class="form-check-input" value="QR Code" type="checkbox" name="Course[]" id="flexRadioDefault1">
                                            <span class="form-check-label" for="Description">
                                                QR Code
                                            </span>
                                        </div>
                                        <div class="single-form">
                                            <label>Enquiry Detail:</label>
                                        <textarea name="description" id="message" class="form-control" required="" placeholder="Enter Your Description details.." rows="10"></textarea>
                                        </div>
                                </div>
                                 
                                
                               
                                
                                <div class="col-sm-12">
                                    <!-- Single Form Start -->
                                    <div class="contact-btn" style="text-align: center">
                                        <input type="submit" class="btn" value="Register" />
                                         @csrf
                                         <div id="Thank_you_msg" class="field_error">frsdxc</div>
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