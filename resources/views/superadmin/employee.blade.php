@extends('superadmin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Workshop Payment List</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                <a href="{{asset('')}}superadmin/add_employee" style="color: white"> <i class="zmdi zmdi-plus"></i> Add Workshop     </a></button>
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
                        <th>No</th>
                        
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>address</th>
                        <th>City</th>
                        <th>Country</th>
                        <th>Action</th>
                    
                        
                        

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $list)
                        
                    
                    <tr>
                        <td>{{$list->id}}</td>
                        <td>{{$list->first_name}}</td>
                        <td>{{$list->last_name}}</td>
                        <td>{{$list->phone}}</td>
                        <td>{{$list->email}}</td>
                        <td>{{$list->address1}}</td>
                        <td>{{$list->city}}</td>
                        <td>{{$list->country}}</td>
                        <td><a href="employee_edit/{{$list->id}}"><button type="button" class="btn btn-primary"><i class="zmdi zmdi-edit"></i></button></a></td>
                        
                       
                        
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>
    
@endsection