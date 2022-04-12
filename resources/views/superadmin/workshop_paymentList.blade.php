@extends('superadmin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Workshop Payment List</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                <a href="#" style="color: white"> <i class="zmdi zmdi-plus"></i> Add Workshop     </a></button>
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
                        <th>Name</th>
                        
                        <th>Order Id</th>
                        <th>Amount</th>
                        <th>Email</th>
                    
                        
                        

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $list)
                        
                    
                    <tr>
                        <td>{{$list->user_name}}</td>
                        <td>{{$list->order_id}}</td>
                        <td>{{$list->amount}}</td>
                        <td>{{$list->user_email}}</td>
                        
                       
                        
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>
    
@endsection