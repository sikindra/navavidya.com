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
                        <h2 class="title">Features</h2>
                        <ul class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Features</li>
                        </ul>
                    </div>
                    <!-- Page Banner Content End -->
                </div>
            </div>
        </div>
        <!-- Page Banner Wrapper End -->
    </div>
</div>
<div class="section certificate-section section-padding">
    <div class="container">
        <!-- Certificate Wrapper Start -->
        <div class="certificate-wrapper">
            <!-- Section Title Start -->
            <div class="section-title section-devider text-center">
                <h2 class="title">Features</h2>
            </div>
            <!-- Section Title End -->
            <!-- Certificate Content Wrapper Start -->
            <div class="certificate-content-wrapper">
                <div class="row">
                    @foreach ($features as $item)
                        
                    
                    <div class="col-lg-4 col-md-4 certificate-col">
                        <!-- Certificate Item Start -->
                        <div class="certificate-item text-center">
                            <div class="certificate-img">
                                
                                <i class="{{$item->icon_tag}}" aria-hidden="true" style="font-size:80px; margin-top: 20px; "></i>
                            </div>
                            <div class="certificate-content">
                                <h3 class="title">{{$item->heading}}</h3>
                                <p>{{$item->description}}</p>
                            </div>
                        </div>
                        <!-- Certificate Item End -->
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- Certificate Content Wrapper End -->
        </div>
        <!-- Certificate Wrapper End -->
    </div>
</div>
<!-- Certificate End -->


@endsection