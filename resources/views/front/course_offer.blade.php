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
                        <h2 class="title">Course Offers</h2>
                        <ul class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Course Offers</li>
                        </ul>
                    </div>
                    <!-- Page Banner Content End -->
                </div>
            </div>
        </div>
        <!-- Page Banner Wrapper End -->
    </div>
</div>
<div class="section features-5-section section-padding-02" style="padding-bottom: 100px;">
    <div class="container">
        <!-- Features Wrapper Start -->
        <div class="section-title section-devider text-center" style="padding-bottom: 50px;">
            <h2 class="title">Combo Offers</h2>
        </div>
        <div class="features-5-wrapper">
            
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    
                    <div class="features-5-content features-1" data-aos="fade-up" data-aos-delay="200" style="background: #fff;  border: 1px solid #ff6d34; height: 364px; border-radius: 8px; " style="background-image: url(assets1/images/features-bg.jpg);">
                        <div class="section-title section-devider text-center" >
                            <h2 class="title">VEDIC MATHS DISCOUNT</h2>
                        </div>
                        
                        <h4 class="section-title  text-center"><strike>400</strike></h4>
                        <h2 class="section-title  text-center" style="color: #ff1f59">800</h2>
                        
                        <h2 class="section-title  text-center" style="color: #ff1f59"><i class="fa fa-check"></i> Abacus( Level : 1 )</h2>
                        <h2 class="section-title  text-center" style="color: #ff1f59"><i class="fa fa-check"></i> Abacus( Level : 2 )</h2>
                        <a class="btn text-center" href="#" style="float: right; "> <i class="fa fa-handshake"></i> Join course</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="features-5-content features-2" data-aos="fade-up" data-aos-delay="200" style="background: #fff;  border: 1px solid #ff6d34; height: 364px; border-radius: 8px; " style="background-image: url(assets1/images/features-bg2.jpg);">
                        <div class="section-title section-devider text-center">
                            <h2 class="title">VEDIC MATHS DISCOUNT</h2>
                        </div>
                        <h4 class="section-title  text-center"><strike>400</strike></h4>
                        <h2 class="section-title  text-center" style="color: #ff1f59">800</h2>
                        
                        <h2 class="section-title  text-center" style="color: #ff1f59"><i class="fa fa-check"></i> Abacus( Level : 1 )</h2>
                        <h2 class="section-title  text-center" style="color: #ff1f59;"><i class="fa fa-check"></i> Abacus( Level : 2 )</h2>
                        <a class="btn" href="#" style="float: right; "> <i class="fa fa-handshake"></i> Join course</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features Wrapper End -->
    </div>
</div>
<div class="clearfix"></div>
@endsection