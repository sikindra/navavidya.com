
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
                        <h2 class="title">Order Completed</h2>
                        <ul class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Order Completed</li>
                        </ul>
                    </div>
                    <!-- Page Banner Content End -->
                </div>
            </div>
        </div>
        <!-- Page Banner Wrapper End -->
    </div>
</div>

<div class="section" style="margin-top: 100px;">
	<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center order_complete">
                	<i class="fas fa-check-circle"></i>
                    <div class="heading_s1">
                  	<h3>Your order is completed! {{session()->get('ORDER_ID')}}</h3>
                    </div>
                  	<p>Thank you for your order! Your order is being processed and will be completed within 3-6 hours. You will receive an email confirmation when your order is completed.</p>
                    <a href="{{asset('')}}" class="btn btn-fill-out">Continue Shopping</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section bg_default small_pt small_pb" style="margin-top: 100px;">
	<div class="container">	
    	<div class="row align-items-center">	
            <div class="col-md-6">
                <div class="heading_s1 mb-md-0 heading_light">
                    <h3>Subscribe Our Newsletter</h3>
                </div>
            </div>
            <div class="col-md-6">
                <div class="newsletter_form">
                    <form>
                        <input type="text" required="" class="form-control rounded-0" placeholder="Enter Email Address">
                        <button type="submit" class="btn btn-dark rounded-0" name="submit" value="Submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection