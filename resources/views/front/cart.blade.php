@extends('front/layout')

@section('container')
<div class="section blog-2-section section-padding" style="background: #fff">
    <div class="container">
        <div class="blog-2-wrapper">
            <!-- Section Title Start -->
        
            <!-- Section Title End -->
            <!-- Blog Wrapper Start -->
            <div class="blog-content-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="cart-view-area">
                          <div class="cart-view-table">
                            <form action="">
                                @if(isset($list[0]))
                            
                              <div class="table-responsive">
                                 <table class="table table-bordered">
                                   <thead>
                                     <tr>
                                       <th></th>
                                       <th>Image</th>
                                       <th>Book</th>
                                       <th>Price</th>
                                       <th>Quantity</th>
                                       <th>Total</th>
                                     </tr>
                                   </thead>
                                   <tbody>
                                    @foreach($list as $data)
                                      <tr id="cart_box{{$data->attr_id}}">
                                        <td class="product-remove" style="padding-left: 40px; padding-top: 40px;" data-title="Remove"><a class="remove" href="javascript:void(0)" onclick="deleteCartProduct('{{$data->attr_id}}','{{$data->pid}}')"><i class="ti-close" ></i></a></td>
                                          
                                          <td><a href="{{asset('book')}}/{{$data->name = str_replace(' ', '_', $data->name);}}"><img src="{{asset('assets/uploads/books')}}/{{$data->image}}" alt="" style="width:100px; height:100px;"></a> </td>
                                          <td>
                                            @if($data->title!='')
                                          Name: {{$data->title}}
                                          @endif
                                          @if($data->name!='')
                                          <br>|| {{$data->name = str_replace('_', ' ', $data->name);}}
                                          @endif
                                         
                                          </td>
                                          <td>{{$data->price}}</td>
                                          <td> <input type="number" id="qty{{$data->pid}}" value="{{$data->qty}}" onchange="updataQty('{{$data->attr_id}}','{{$data->pid}}','{{$data->price}}')"></td>
                                          <td id="total_price_{{$data->attr_id}}">Rs {{$data->price*$data->qty}}</td>
                                        </tr>
                                        @endforeach
                                       <td colspan="6" >
                                          
                                          <a href="{{asset('')}}checkout" class="btn" style="float: right">Checkout</a>
                                       </td>
                                     </tr>
                                     </tbody>
                                 </table>
                               </div>
                             @else
                             <h3>Data Not Found</h3>
                             @endif
                            </form>
                            <!-- Cart Total view -->
                          
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>

</div> 
<input type="hidden" id="qty" value="1"/>
<form id="frmAddToCart">
            
  <input type="hidden" id="pqty" name="pqty"/>

  
  <input type="hidden" id="cbook_id" name="pbook_id"/>   
  <input type="hidden" id="bk_evel_id" name="bk_evel_id"/>           
  @csrf
</form>




  
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
  


@endsection
