@extends('superadmin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Orders LIst</h2>
           
        </div>
    </div>
</div>
<div class="row m-t-30">
    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Student Details</th>
                        <th>Total Amount</th>

                        <th>Order Status</th>
                        <th>Payment Status</th>
                        <th>Payment TYpe</th>
                        <th>Order Date</th>
                        
                        

                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $list)
                        
                    
                    <tr>
                        <td style="background: #486c51; padding: 17px;"><a href="{{asset('superadmin/order_details')}}/{{$list->id}}" style="color: #fff;  padding-left: 45px;
                            padding-top: 30px;">{{$list->id}}</a></td>
                        <td>{{$list->name}}<br>
                            {{$list->email}}<br>
                            {{$list->mobile}}<br>
                            {{$list->address1}}
                            {{$list->city}},
                            {{$list->state}},{{$list->pincode}}<br>
                        
                        
                        
                        
                        </td>
                        <td>{{$list->total_amt}}</td>
                        <td>{{$list->orders_status}}</td>
                        <td>{{$list->payment_status}}</td>
                        <td>{{$list->payment_type}}</td>
                        <td>{{$list->added_on}}</td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>
    
@endsection