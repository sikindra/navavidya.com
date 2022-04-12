@extends('Student/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h4 class="title-1" > MY Order 
</h4>
            
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
                        <th>Order Status</th>
                        <th>Payment Status</th>
                        
                        <th>Total Amount</th>
                        <th>Invoice PDF</th>
                        <th>Payment ID</th> 
                        <th>Placed At</th>
                        
                    </tr>
                    
                    
                    
                    
                </thead>
                <tbody>
                    @foreach($orders as $list)
                    <tr>
                        <td style="background: #486c51; padding: 17px;"><a href="{{url('Student/order_details')}}/{{$list->id}}" style="color: #fff;  padding-left: 62px;">{{$list->id}}</a></td>
                        <td>{{$list->orders_status}}</td>
                        <td>{{$list->payment_status}}</td>
                        <td>{{$list->total_amt}}</td>
                        <td style="background: #486c51; padding: 17px;"><a href="{{url('Student/pdf')}}/{{$list->name}}/{{$list->id}}" style="color: #fff;  padding-left: 62px;">PDF</a></td>
                        <td>{{$list->payment_id}}</td>
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