@extends('admin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Subcategory List</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                <a href="{{asset('admin/add_subcategory')}}" style="color: white"> <i class="zmdi zmdi-plus"></i>Add Subcategory</a></button>
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
                        
                        <th>Category</th>
                        <th>Description</th>
                        <th>More</th>
                    
                        <th>Status</th>
                        
                        <th>Action</th>
                        

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $list)
                        
                    
                    <tr>
                        <td>{{$list->id}}</td>
                        <td>{{$list->sub_cat_name}}</td>
                        <td>{{$list->class_desc}}</td>
                        <td><a href="subcategory_view/{{$list->id}}"><button type="button" class="btn btn-primary">view</button></a></td>
                        <td>@if ($list->status == 'A')
                            <p>Active</p>@else 
                            <p>Inactive</p>@endif</td>
                        <td><a href="subcategory_update/{{$list->id}}"><button type="button" class="btn btn-primary"><i class="zmdi zmdi-edit"></i></button></a>
                            <a href="subcategory_delete/{{$list->type_id}}"><button type="button" class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button></a></td>
                        
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>
@endsection