@extends('superadmin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Franchise List</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                <a href="{{asset('')}}superadmin/add_franchise" style="color: white"> <i class="zmdi zmdi-plus"></i> Add Franchise   </a></button>
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
                        <th>First Name</th>
                        
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                    
                        <th>City</th>
                        <th>Pin Code</th>
                        <th>State</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $list)
                        
                    
                    <tr>
                        <td>{{$list->f_name }}</td>
                        <td>{{$list->l_name}}</td>
                        <td>{{$list->email}}</td>
                        <td>{{$list->phone}}</td>
                        <td>{{$list->city}}</td>
                        <td>{{$list->pincode}}</td>
                        <td>{{$list->state}}</td>
                        <td><a href="{{asset('')}}superadmin/franchise_update/{{$list->id}}"><button type="button" class="btn btn-primary"><i class="zmdi zmdi-edit"></i></button></a></td>
                        
                        
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>
    
@endsection