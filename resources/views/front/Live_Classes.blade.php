@extends('front/layout')

@section('container')


<div class="section top-courses-section section-padding" style="background: #fff;">
        <div class="container">
            
            <div class="top-courses-wrapper">
               
                <div class="row">
                  
                       
                  <div class="col-md-12">
                    <div class="contact-form" style="margin-top: 0px;">
                        <h4 class="title" style="text-align: center;">Live Class Enquiry form</h4>
                         
                            <form id="liveclass" action="#">
                               
                            <div class="row" style="background: #fff">
                                <div class="col-sm-6">
                                    
                                    <!-- Single Form Start -->
                                    <div class="single-form">  
                                        <label >Select Category</label>
                                        <select id="category" name="category" class="form-control-sm form-control" style="border: 1px solid black; height: 54px;">
                                          <option value="">select Category</option>
                                          @foreach ($cate as $key => $cate)
                                          <option value="{{$cate->id}}">{{$cate->names}}</option>
                                           @endforeach
                                      </select>
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                
                                <div class="col-sm-6">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <label >Select Course</label>
                                        <select name="course" id="course" class="form-control-sm form-control" style="border: 1px solid black; height: 54px;">
                                        
                                          <option value="">select option</option>
                                      
                                  </select>
                                  
                                      
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                <div class="col-md-12">
                                    <div class="single-form">
                                         <label for="">Subjects/Levels</label>
                                    <!-- Single Form Start -->
                                       <span name="sub_cat_id"  id="sub"></span>
							    
                                   
                                   </div>
                                    <!-- Single Form End -->
                                </div>
                                
                                
                               
                                
                               

                              <div class="col-sm-6">
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <label >Kid Name</label>
                                    <input type="text" name="kid"    placeholder="kids  Name">
                                </div>
                                <!-- Single Form End -->
                            </div>
                            
                            <div class="col-sm-6">
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <label >Parent Name</label>
                                    <input type="text"  name="parentName"  placeholder="Parent Name">
                                </div>
                                <!-- Single Form End -->
                            </div>
                            <div class="col-sm-6">
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <label> Email (Parent Email)</label>
                                    <input type="text"  name="useremail" id="useremail" placeholder="Parent Email">
                                </div>
                                <!-- Single Form End -->
                            </div>
                            
                            <div class="col-sm-6">
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <label >Phone (Parent Phone number)</label>
                                    <input type="text"  name="user_phone" id="user_phone"  placeholder="Phone (Parent Phone number)">
                                </div>
                                <!-- Single Form End -->
                            </div>
                                
                                <div class="col-sm-3">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <label >City</label>
                                        <input type="text"  name="city" id="city" placeholder="City">
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                <div class="col-sm-3">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <label> State</label>
                                        <select name="state" id="state" class="form-control-sm form-control" style="border: 1px solid black; height: 54px;">
                                          <option value="" selected="">Choose State...</option>
                                          <option value="AP">Andhra Pradesh</option>
                                          <option value="AN">Andaman and Nicobar Islands</option>
                                          <option value="AR">Arunachal Pradesh</option>
                                          <option value="AS">Assam</option>
                                          <option value="BR">Bihar</option>
                                          <option value="CH">Chandigarh</option>
                                          <option value="CT">Chhattisgarh</option>
                                          <option value="DN">Dadar and Nagar Haveli</option>
                                          <option value="DD">Daman and Diu</option>
                                          <option value="DL">Delhi</option>
                                          <option value="LD">Lakshadweep</option>
                                          <option value="PY">Puducherry</option>
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
                                          <option value="OR">Odisha</option>
                                          <option value="PB">Punjab</option>
                                          <option value="RJ">Rajasthan</option>
                                          <option value="SK">Sikkim</option>
                                          <option value="TN">Tamil Nadu</option>
                                          <option value="TG">Telangana</option>
                                          <option value="TR">Tripura</option>
                                          <option value="UP">Uttar Pradesh</option>
                                          <option value="UT">Uttarakhand</option>
                                          <option value="WB">West Bengal</option>
                                      
                                      </select>
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                <div class="col-sm-3">
                                  <!-- Single Form Start -->
                                  <div class="single-form">
                                      <label> Country</label>
                                      <select name="country" id="country" class="form-control-sm form-control" style="border: 1px solid black; height: 54px;">
                                        
                                          <option value="" selected="">Choose Country...</option>
                                          <option value="IN">India</option>
                                    
                                    </select>
                                  </div>
                                  <!-- Single Form End -->
                              </div>
                                 
                                <div class="col-sm-3">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <label >Zip</label>
                                        <input type="text"  name="zip" id="zip" placeholder="pincode" >
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                <div class="col-sm-12">
                                  <!-- Single Form Start -->
                                  <div class="contact-btn" style="text-align: center">
                                      
                                      <input type="submit" id="btnRegistration" class="btn" value="Submit" />
                                      @csrf
                                      <div id="Thank_you_msg" class="field_error"></div>
                                  </div>
                                  <!-- Single Form End -->
                              </div>
                                
                                
                                
                               
                            </div>
                       
                    </div>
                </div>
                        </div>
                       
                        
                        
                    </div>

                </div>

                <!-- Courses Wrapper Start -->
                
                <!-- Courses Wrapper End -->
            </div>
        </div>
    </div>

   
    
       
     
@endsection