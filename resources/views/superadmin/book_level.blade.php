@extends('superadmin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Book List</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                <a href="{{asset('')}}superadmin/add_book_level" style="color: white"> <i class="zmdi zmdi-plus"></i> Add Books_Levels   </a></button>
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
                        <th>Book Id</th>
                        
                        <th>Book</th>
                        <th>Book Series</th>
                        <th>Price</th>
                    
                        <th>Status</th>
                        <th>Action</th>
                        

                    </tr>
                </thead>
                <tbody>
                    @foreach ($book_level as $list)
                        
                    
                    <tr>
                        <td>{{$list->bk_evel_id}}</td>
                        <td><img src="{{asset('')}}assets/uploads/books/{{$list->image}}" alt="" style="width: 150px; height: 150px;"></td>
                        <td>{{$list->name}}</td>
                        <td>{{$list->price}}</td>
                        <td>@if ($list->status == '1')
                            <p>Active</p>@else 
                            <p>Inactive</p>@endif
                      </td>
                        <td>
                            <a href="{{asset('')}}superadmin/book_level_update/{{$list->bk_evel_id}}"><button type="button" class="btn btn-primary"><i class="zmdi zmdi-edit"></i></button></a></td>
                        
                        
                        
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