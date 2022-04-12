@extends('Student/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h4 class="title-1" > Payment Details 
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
                        <th>Order Id</th>
                        <th>Amount</th>
                        <th>Payment Mode </th>
                        <th>Invoice PDF</th>
                        <th>Invoice Date</th>
                        <th>Paid On</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($course as $list)
                    <tr>
                        <td style="background: #486c51; padding: 17px;"><a href="{{url('Student/order_payment_details')}}/{{$list->id}}" style="color: #fff;  padding-left: 62px;">{{$list->id}}</a></td>
                        <td>{{$list->total_amt}}</td>
                        <td>{{$list->payment_type}}</td>
                        <td style="background: #486c51; padding: 17px;"><a href="{{url('Student/pdf_genrate')}}/{{$list->name}}/{{$list->id}}" style="color: #fff;  padding-left: 62px;">PDF</a></td>
                        
                        
                        <td>{{$list->added_on}}</td>
                        <td>{{$list->payment_status}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
            
        </div>
        <!-- END DATA TABLE-->
    </div>
</div> 

@endsection