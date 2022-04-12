@extends('superadmin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">School List</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                <a href="{{asset('superadmin/add_school')}}" style="color: white"> <i class="zmdi zmdi-plus"></i> Add School    </a></button>
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
                        <th>School Name</th>
                        
                        <th>Principal Name</th>
                        <th>Email</th>
                        <th>Address</th>
                    
                        <th>Phone</th>
                        <th>city</th>
                        <th>Pin Code</th>
                        <th>No of Login</th>
                        <th>Mode of Eduction</th>
                        <th>Categories</th>
                        <th>Description</th>
                        

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $list)
                        
                    
                    <tr>
                        <td>{{$list->school_name}}</td>
                        <td>{{$list->pri_name}}</td>
                        <td>{{$list->email}}</td>
                        <td>{{$list->address}}</td>
                        <td>{{$list->phone}}</td>
                        <td>{{$list->city}}</td>
                        <td>{{$list->pincode}}</td>
                        <td>{{$list->no_of_login}}</td>
                        <td>{{$list->moe}}</td>
                        <td>{{$list->categories}}</td>
                        <td>{!!$list->description!!}</td>
                        
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>
    
@endsection