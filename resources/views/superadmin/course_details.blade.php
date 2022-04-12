@extends('superadmin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1"> Course Orders List</h2>
            
        </div>
    </div>
</div>
<div class="row m-t-25" style="margin-top: 83px;">
    @foreach ($course_orders as $list)
     <div class="col-sm-6 col-lg-4">
                    <div class="overview-item overview-item" style="background: white;">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                   <div class="image img-cir img-120" style="width: 81px; height: 84px; border-radius: 43px; background: #fff; margin-top: -92px; margin-left: 119px;">
                                            <img src="{{asset('assets/images/admin/')}}/avatar7.png" alt="John Doe" style="height: 75px;" />
                                            </div>
                                </div>
                               
                                    <p style="padding-top: 8px;">Name : <span style="font-weight: bold;">{{$list->name}}</span> </p>
                                    <p style="padding-top: 8px;">Email : <span >{{$list->email}}</span></p>
                                    <p style="padding-top: 8px;">Phone : {{$list->mobile}}</p>
                                    <a href="{{asset('superadmin/course_order_details')}}/{{$list->id}}"><buttion class="btn btn-primary" style="margin-left: 119px; margin-bottom: 25px; margin-top: 28px; width: 85px;">view</buttion></a>
                                
                            </div>
                           
                        </div>
                    </div>
                </div>
                @endforeach
                </div>
               


@endsection