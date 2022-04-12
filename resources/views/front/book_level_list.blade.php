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
                        <h2 class="title">Book</h2>
                        <ul class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Book</li>
                        </ul>
                    </div>
                    <!-- Page Banner Content End -->
                </div>
            </div>
        </div>
        <!-- Page Banner Wrapper End -->
    </div>
</div>
<div class="main_content">

<!-- START SECTION SHOP -->
<div class="section" style="padding: 77px;">
	<div class="container">
    	<div class="row">
            <div class="col-9">
                <div class="row align-items-center mb-4 pb-1">
                    <div class="col-12">
                        <div class="product_header">
                            <div class="product_header_left">
                                <div class="custom_select" >
                                    <select class="form-control form-control-sm" name="" onchange="sort_by()" id="sort_by_value">
                                        <option value="">Default sorting</option>
                                        <option value="name">Sort by Name</option>
                                        <option value="date">Sort by Date</option>
                                        <option value="price_asc">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                    
                                    
                                </div>
                                <p >{{$sort_text}}</p>
                               
                            </div>
                            <div class="product_header_right">
                            	<div class="products_view">
                                    <a href="javascript:Void(0);" class="page-link shorting_icon grid active"><i class="ti-view-grid"></i></a></span>
                                    <a href="javascript:Void(0);" class="shorting_icon list"><i class="ti-layout-list-thumb"></i></a>
                                 
                                   
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            	
                <div class="tab-content">
                	<div class="tab-pane fade show active" id="arrival" role="tabpanel" aria-labelledby="arrival-tab">
                        <div class="row shop_container">
                            @foreach($books as $book)
                            <div class="col-lg-4 col-md-4 col-6">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="{{asset('book_list')}}/{{$book->name = str_replace(' ', '_', $book->name);}}">
                                            <img src="{{asset('')}}assets/uploads/books/{{$book->image}}" alt="product_img1" style="height: 285px; width: 285px;">
                                        </a>
                                        <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li class="add-to-cart"><a href="{{asset('book_list')}}/{{$book->name = str_replace(' ', '_', $book->name);}}"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                
                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                            </ul>
                                           
                                            
                                        </div>
                                        
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="{{asset('book_list')}}/{{$book->name = str_replace(' ', '_', $book->name);}}">{{$book->name = str_replace('_', ' ', $book->name);}}</a></h6>
                                        <div class="product_price">
                                            <span class="price">{{$book->price}}</span>
                                            <del>{{$book->price}}</del>
                                            <div class="on_sale">
                                                <span>0% Off</span>
                                            </div>
                                        </div>
                                        
                                        <div class="pr_desc">
                                            <p>{!!$book->book_des!!}</p>
                                        </div>
                                       
                                        <div class="list_product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li class="add-to-cart"><a href="{{asset('book_list')}}/{{$book->name = str_replace(' ', '_', $book->name);}}"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                            
                        </div>
                    </div>
                </div>
            </div>
			
            <div class="col-lg-3 order-lg-first mt-4 pt-2 mt-lg-0 pt-lg-0">
            	<div class="sidebar">
                	<div class="widget">
                        <h5 class="widget_title" style="font-size: 24px;"> Books Categories</h5>
                        <ul class="widget_categories">
                            @foreach($books1 as $data)
                            
                            <li class="nav-item">
                                
                            </li>
                           
                            <li class="nav-item">
                               <a href="{{asset('')}}book/{{$data->title}}">{{$data->title}}</a>  
                            </li>
                           
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget">
                    	<h5 class="widget_title">Filter</h5>
                        <div class="filter_price">
                             <div id="price_filter" data-min="0" data-max="600" data-min-value="200" data-max-value="300" data-price-sign=""></div>
                             <div class="price_range">
                                 <span>Price: <span>Rs.</span><span id="flt_price"></span> - <span>Rs.</span><span id="flt_price1">Rs.</span></span>
                                
                                 <input type="hidden" id="price_first">
                                 <input type="hidden" id="price_second">
                                 
                                 <button type="button" class="btn" onclick="sort_price_filter()">Filter</button>
                             </div>
                         </div>
                    </div>
                   
                    
                  
                    <div class="widget">
                        <div class="shop_banner">
                            <div class="banner_img overlay_bg_20">
                                <img src="{{asset('')}}assets2/images/sidebar_banner_img.jpg" alt="sidebar_banner_img">
                            </div> 
                            <div class="shop_bn_content2 text_white">
                                <h5 class="text-uppercase shop_subtitle">New Collection</h5>
                                <h3 class="text-uppercase shop_title">Sale 30% Off</h3>
                                <a href="#" class="btn btn-white rounded-0 btn-sm text-uppercase">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<!-- END SECTION SHOP -->

<!-- START SECTION SUBSCRIBE NEWSLETTER -->
<div class="section bg_default small_pt small_pb">
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
<!-- START SECTION SUBSCRIBE NEWSLETTER -->

</div>
<!-- END MAIN CONTENT -->

<form id="categoryFilter" >
    <input type="hidden" required="" class="form-control rounded-0" id="sort" value="{{$sort}}" name="sort">
    <input type="hidden" required="" class="form-control rounded-0" id="filter_price_start" name="filter_price_start" value="{{$filter_price_start}}">
    <input type="hidden" required="" class="form-control rounded-0" id="filter_price_end" name="filter_price_end" value="{{$filter_price_end}}">
    
    
</form>


@endsection