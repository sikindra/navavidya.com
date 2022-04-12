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
                                       
                                       <th>Image</th>
                                       <th>Courses</th>
                                       
                                       <th>Total</th>
                                       <th></th>
                                     </tr>
                                   </thead>
                                   <tbody>
                                    @foreach($list as $data)
                                      <tr id="cart_box{{$data->attr_id}}">
                                         
                                          <td><a href="#"><img src="{{asset('assets/uploads/books')}}/{{$data->level_img_file_name}}" alt="" style="width:100px; height:100px;"></a> </td>
                                          <td>
                                            @if($data->course_name!='')
                                          Name: {{$data->course_name}}
                                          @endif
                                          @if($data->level!='')
                                          <br>|| {{$data->level}}
                                          @endif
                                         
                                          </td>
                                          
                                          
                                          <td id="total_price_{{$data->attr_id}}">Rs {{$data->price}}</td>
                                          <td><a class="remove" href="javascript:void(0)" onclick="deleteCartProduct1('{{$data->attr_id}}','{{$data->pid}}')"><button class="btn" style="float: right">remove</a></button></td>
                                        </tr>
                                        @endforeach
                                       <td colspan="6">
                                          
                                         <a href="{{asset('')}}show_cart" class="btn" style="float: right">Checkout</a>
                                          </a>
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
<form id="frmAddToCart1">
            
  

  
  <input type="hidden" id="ccourse_id" name="pcourse_id"/>   
  <input type="hidden" id="blevel_id" name="blevel_id"/>           
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
