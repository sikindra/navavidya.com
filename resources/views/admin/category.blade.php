@extends('admin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Category</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                <a href="add_category" style="color: white"> <i class="zmdi zmdi-plus"></i> Add Category </a></button>
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
                        <th>Category</th>
                        
                        <th>description</th>
                        <th>Mode of Eduction</th>
                        <th>Status</th>
                        <th>Subcategory</th>
                        <th>Action</th>
                        

                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $list)
                        
                    
                    <tr>
                        <td><a href="subcategory_view/{{$list->id}}">{{$list->names}}</a></td>
                        <td>{!!$list->description!!}</td>
                        <td>{{$list->name}}</td>
                        <td>
                        @if ($list->status == 'A')
                            <p>Active</p>@else 
                            <p>Inactive</p>@endif
                      
                            
    
                    
                    
                    </td>
                        <td><a href="subcategory_list/{{$list->type_id}}/{{$list->id}}">Sub-category</a></td>
                        <td><a href="category_update/{{$list->id}}"><button type="button" class="btn btn-primary"><i class="zmdi zmdi-edit"></i></button></a>
                            <a href="category_delete/{{$list->id}}"><button type="button" class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>
    
@endsection