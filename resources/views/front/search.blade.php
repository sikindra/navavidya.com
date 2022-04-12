@extends('front/layout')

@section('container')

<div class="main_content">

<!-- START SECTION SHOP -->
<div class="section" style="padding: 77px;">
	<div class="container">
    	<div class="row">
            <div class="col-12">
                <div class="row align-items-center mb-4 pb-1">
                    <div class="col-12">
                        <div class="product_header">
                           
                           
                        </div>
                    </div>
                </div>
            	
                <div class="tab-content">
                	<div class="tab-pane fade show active" id="arrival" role="tabpanel" aria-labelledby="arrival-tab">
                        <div class="row shop_container">
                            @if(isset($book_levels[0]))
                            @foreach($book_levels as $book)
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
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
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
                            @else
                            <div class="col-lg-4 col-md-4 col-6">
                              <figure>
                                No data found
                              <figure>
                              </div>
                            @endif
                            
                            
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



@endsection