@extends('front/layout')

@section('container')
<div class="section page-banner-section" style="background-image: url(assets1/images/bg/banner-img.jpg);">
    <div class="container">
        <!-- Page Banner Wrapper Start -->
        <div class="page-banner-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Banner Content Start -->
                    <div class="page-banner text-center">
                        <h2 class="title">Contact</h2>
                        <ul class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ul>
                    </div>
                    <!-- Page Banner Content End -->
                </div>
            </div>
        </div>
        <!-- Page Banner Wrapper End -->
    </div>
</div>
<div class="section contact-form-section section-padding-02">
    <div class="container">
        <!-- Contact Form Wrapper Start -->
        <div class="contact-form-wrapper">
            <div class="row">
                <div class="col-lg-7">
                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.9955626854307!2d77.67916791525492!3d12.972135390855529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1161fb0165cb%3A0x11aee3ae8517ebf4!2sNavaVision!5e0!3m2!1sen!2sin!4v1643284883368!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-lg-5">
                    <!-- Contact Form Start -->
                    <div class="contact-form">
                        <h4 class="title">Contact Us</h4>
                        @if($message = Session::get('success'))

          <div class="alert alert-success alert-block">
            <button type="button" class="btn join-btn" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
          </div>
          @endif
                  <form id="contact_form" method="post" action="{{ url('contact/submit') }}">
                   @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <input type="text" name="name" id="name" placeholder="Your Name">
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                <div class="col-sm-12">
                                    <!-- Single Form Start --> 
                                    <div class="single-form">
                                        
                                        <input type="text" name="email"  id="email" placeholder="Your Email">
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                <div class="col-sm-12">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <input type="text" name="phone"  id="phone" placeholder="Phone">
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                <div class="col-sm-12">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <textarea name="message" class="form-control" id="message"  placeholder="Message..."></textarea>
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                <div class="col-sm-12">
                                    <!-- Single Form Start -->
                                    <div class="contact-btn">
                                        
                                        <input type="submit" class="btn" value="Submit Message" />
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
<div class="section contact-info-section section-padding" style="padding-top: 120px; padding-bottom: 120px; background: #f0f4f5;">
    <div class="container">
        <!-- Contact Info Wrapper Start -->
        <div class="contact-info-wrapper">
            <!-- Section Title Start -->
            <div class="contact-info-title text-center">
                <h2 class="title">Stay In Touch</h2>
            </div>
            <!-- Section Title End -->
            <!-- Contact Info Item Wrapper Start -->
            <div class="contact-info-item-wrapper">
                <div class="row">
                    @foreach ($contact as $item)
                        
                    
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item contact-info-1 text-center">
                            <div class="contact-info-icon">
                                <i class="flaticon-location-pin"></i>
                            </div>
                            <div class="contact-info-text">
                                <h4 class="title">{{$item->location}}</h4>
                                <p>{{$item->address1}}{{$item->address2}}</p>
                                <p>{{$item->city}}</p>
                                <p>{{$item->state}}  {{$item->pincode }}</p>
                                <h4><i class="fas fa-user"></i> {{$item->name}}</h4>
                                <h4><i class="fas fa-phone-volume"></i> {{$item->phone}}</h4>
                                <h4> <i class="fas fa-phone-volume"></i> {{$item->alt_phone}}</h4>
                                <h5><i class="flaticon-email"></i> {{$item->email_id}}</h5>
                                <h5><i class="flaticon-email"></i> {{$item->alt_email}}</h5>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->
                    </div>
                    @endforeach
                    
                  
                </div>
            </div>
            <!-- Contact Info Item Wrapper End -->
        </div>
        <!-- Contact Info Wrapper End -->
    </div>
</div>

@endsection
