@extends('superadmin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Admin List</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                <a href="{{asset('')}}superadmin/admin_add" style="color: white"> <i class="zmdi zmdi-plus"></i> Add admin</a></button>
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
                        <th>Id</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Addres</th>
                    
                        <th>Status</th>
                    
                      
                        
                        

                    </tr>
                </thead>
                <tbody>
                    @foreach ($admin as $admin)
                    <tr>
                        <td>
                            {{$admin->id}}
                        </td>
                        <td><img src="{{asset('')}}assets/images/admin/{{$admin->image}}" style="width: 200px; height: 100px;">
                            
                        </td>
                        <td>
                            {{$admin->name}}
                        </td>
                        <td>
                            {{$admin->email}}
                        </td>
                        <td>
                            {{$admin->phone}}
                        </td>
                        <td>
                            {{$admin->address}}
                        </td>
                        <td><a href="admin_update/{{$admin->id}}"><button type="button" class="btn btn-primary"><i class="zmdi zmdi-edit"></i></button></a>
                            <a href="admin_delete/{{$admin->id}}"><button type="button" class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <span></span>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>

    
@endsection