
@extends('front/layout')

@section('container')



<div class="main_content">

            <!-- START SECTION SHOP -->
            <div class="section" style="padding: 77px;">
                <div class="container">
                    
                    <div class="row">
                        @foreach($book_level as $book)
                        <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                          <div class="product-image">
                                <div class="product_img_box" >
                                    <img id="product_img"  style="width:524px; height: 430px;" src='{{asset('')}}assets/uploads/books/{{$book->image}}' data-zoom-image="{{asset('')}}assets/uploads/books/{{$book->image}}" alt="product_img1" />
                                </div>
                                <div id="pr_item_gallery" class="product_gallery_item slick_slider" data-slides-to-show="4" data-slides-to-scroll="1" data-infinite="false">
                                    <div class="item">
                                        <a href="#"  class="product_gallery_item active" data-image="{{asset('')}}assets/uploads/books/{{$book->image}}" data-zoom-image="{{asset('')}}assets/uploads/books/{{$book->image}}">
                                            <img  src="{{asset('')}}assets/uploads/books/{{$book->image}}" alt="product_small_img1" />
                                        </a>
                                    </div>
                                    
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="pr_detail">
                                <div class="product_description">
                                    <h4 class="product_title" style="font-size: 20px;"><a href="#">{{$book->name = str_replace('_', ' ', $book->name);}}</a></h4>
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
                                    <div class="product_sort_info">
                                        <ul>
                                            <li><i class="linearicons-shield-check"></i> 1 Year AL Jazeera Brand Warranty</li>
                                            <li><i class="linearicons-sync"></i> 30 Day Return Policy</li>
                                            <li><i class="linearicons-bag-dollar"></i> Cash on Delivery available</li>
                                        </ul>
                                    </div>
                                   
                                    
                                </div>
                                <hr />
                                <div class="cart_extra">
                                    <div class="cart-product-quantity">
                                        <div class="quantity" >
                                            <form action="">
                                                <select id="qty" name="qty">
                                                    @for($i=1;$i<11;$i++)
                                                      <option value="{{$i}}">{{$i}}</option>
                                                    @endfor
                                                  </select>
                                                </form>
                                        </div>
                                        <form action="">
                                            <select id="book_id" name="book_id" style='display:none'>
                                               
                                                  <option value="{{$book->book_id}}">{{$book->book_id}}</option>
                                               
                                              </select>
                                            </form>
                                    </div>
                                    <div class="cart_btn">
                                        <button class="btn btn-fill-out btn-addtocart" type="button"><i class="icon-basket-loaded"></i><a href="javascrippt:void(0)" onclick="add_to_cart({{$book->bk_evel_id}})"> ADD TO CART</a></button>
                                        <a class="add_compare" href="#"><i class="icon-shuffle"></i></a>
                                        <a class="add_wishlist" href="#"><i class="icon-heart"></i></a>
                                    </div>
                                </div>
                                <hr />
                                <ul class="product-meta">
                                    <li>SKU: <a href="#">BE45VGRT</a></li>
                                    <li>Category: <a href="#">Clothing</a></li>
                                    <li>Tags: <a href="#" rel="tag">Cloth</a>, <a href="#" rel="tag">printed</a> </li>
                                </ul>
                                
                                <div class="product_share">
                                    <span>Share:</span>
                                    <ul class="social_icons">
                                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                        <li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
                                        <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            
          </div>
          <div class="section" style="padding: 77px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row align-items-center mb-4 pb-1">
                            <div class="col-12">
                                <div class="product_header">
                                    <div class="product_header_left">
                                        <div class="custom_select">
                                            <div class="section-title section-devider text-center">
                                                <h2 class="title">Related Books</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product_header_right">
                                        <div class="products_view">
                                            <a href="javascript:Void(0);" class="page-link shorting_icon grid active"><i class="ti-view-grid"></i></a></span>
                                            <a href="javascript:Void(0);" class="shorting_icon list "><i class="ti-layout-list-thumb"></i></a>
                                         
                                           
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="row>
                            
                        
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="arrival" role="tabpanel" aria-labelledby="arrival-tab">
                                    <div class="row shop_container">
                                        @foreach($related_book as $book)
                                        <div class="col-lg-4 col-md-4 col-6">
                                            <div class="product">
                                                <div class="product_img">
                                                    <a href="{{asset('book_list')}}/{{$book->name = str_replace(' ', '_', $book->name);}}">
                                                        <img src="{{asset('')}}assets/uploads/books/{{$book->image}}" alt="product_img1" style="height: 285px; width: 385px;">
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
                                                             <p id="order_place_msg" style="float: right; margin-right: -141px; margin-top: 52px;"></p>
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
                        <div class="row">
                            <div class="col-12">
                                <ul class="pagination mt-3 justify-content-center pagination_style1">
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    
                                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-arrow-circle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <form id="frmAddToCart">
            
            <input type="hidden" id="pqty" name="pqty"/>
        
            
            <input type="hidden" id="pbook_id" name="pbook_id"/>
            <input type="hidden" id="bk_evel_id" name="bk_evel_id"/>           
            @csrf
          </form>

          @endsection