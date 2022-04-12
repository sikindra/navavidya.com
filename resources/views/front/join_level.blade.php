@extends('front/layout')

@section('container')


<div class="section top-courses-section section-padding" style="background: #fff;">
        <div class="container">
            <div class="contact-form" style="margin-top: 0px;">
                <h4 class="title" style="text-align: center;">Join Course</h4>
                
                    @foreach($course as $course)
                        <div class="row" style="background: #fff">
                            
                            <div class="col-sm-6">
                                <div class="single-form">
                                    <label >Category Type</label>
                                    <input type="text" name="courseType"  id="address1"  value="{{$course->names}}" readonly>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                
                                <div class="single-form">
                                    <label >Course Name</label>
                                   
                                    <input type="text" name="address1"  id="address1"  value="{{$course->course_name}}" readonly>
                                    
                                    
                                </div>
                                
                            </div>
                            <div class="col-sm-12">
                                
                                <div class="single-form">
                                    <label for="">Subjects/Levels</label>
                                    
                                   
                                                <input  class="form-check-input" type="checkbox" id="pdf_books_otp" name="content_opt" value="option1" checked=""  onclick="return false;" value="{{$course->level_id}}" style="margin-left:30px;" checked> {{$course->level}}<span class="form-check-sign" >
                                            
                                            <span class="check"></span> </span>  </label>
                                    
                                </div>
                                
                            </div>
                            <div class="col-sm-12">
                                <div class="single-form">
                                    <label for="">This course includes : </label>
                                    <div class="form-group">
                                        <div class="col-md-12 row">
                                            <div class="form-group col-md-3">
                                                <div class="form-check ">
                                                <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" id="pdf_books_otp" name="content_opt" value="option1" checked=""  onclick="return false;" style="margin-top: -2px;"> Pdf Book 
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                                </label>
                                            </div>
                                            <input type="hidden"  class="form-control-plaintex col-md-6 "   name="pdf_books_otp_val" id="pdf_books_otp_val" value="400">
                                                            </div>
                                                <div class="form-group col-md-3">
                        
                                                    <div class="form-check ">
                                                    <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" id="video_otp" name="content_opt" value="option1" checked onclick="return false; " style="margin-top: -2px;"> Video 
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                    </label>
                                                </div> 
                                                <input type="hidden" class="form-control-plaintex col-md-6"    name="video_otp_val" id="video_otp_val" value="700">
                                                </div>
                                                <div class="form-group col-md-3">
                        
                                                <div class="form-check ">
                                                    <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" id="Worksheet_otp" name="content_opt" value="option1" checked onclick="return false;" style="margin-top: -2px;"> Worksheet
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                    </label>
                                                </div>
                                                <input type="hidden" class="form-control-plaintex col-md-6"  readonly  name="Worksheet_otp_val" id="Worksheet_otp_val" value="500">
                                                </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            
                            
                            
                            
                        </div>
                        <div class="row" style="background: #fff">
                            <div class="col-sm-6">
                                <div class="single-form">
                                    <label >IGST(0)</label>
                                    <input type="text" name="courseType"  id="address1"  value="0.00" readonly>
                                </div>
                            </div>
                           
                            <div class="col-sm-6">
                                <div class="single-form">
                                    <label >Final Amount</label>
                                    <input type="text" name="courseType"  id="address1"  value="{{$course->price}}" readonly>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-form">
                                    <label >Our Executive Name</label>
                                    <input type="text" name="executive" required/>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-form">
                                   
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <!-- Single Form Start -->
                                <div class="contact-btn" style="text-align: center">
                                    
                                    
                                    <a href="javascrippt:void(0)" onclick="join_level('{{$course->course_id}}','{{$course->level_id}}')" ><input type="submit" id="btnRegistration" class="btn" value="Submit" /></a>
                                    
                                     <p id="order_place_msg"></p>
                                </div>
                                <!-- Single Form End -->
                            </div>
                        </div>
                        @endforeach
                   
            </div>
        </div>
</div>

                        
                        
                                           
                                        
<form id="frmjoin_level">
            
    <input type="hidden" id="pexecutive_id" name="pexecutive_id"/>

    
    <input type="hidden" id="blevel_id" name="blevel_id"/>
    <input type="hidden" id="pcourse_id" name="pcourse_id"/>           
    @csrf
  </form>                                 
                                    
    
       
     
@endsection