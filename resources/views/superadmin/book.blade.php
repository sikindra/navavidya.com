@extends('superadmin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Book List</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                <a href="{{asset('')}}superadmin/add_book" style="color: white"> <i class="zmdi zmdi-plus"></i> Add Books   </a></button>
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
                        
                        <th>Title</th>
                        <th>Publisher</th>
                        <th>Level</th>
                    
                        <th>image</th>
                        <th>More</th>
                        

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $list)
                        
                    
                    <tr>
                        <td>{{$list->book_id }}</td>
                        <td>{{$list->title}}</td>
                        <td>{{$list->publisher}}</td>
                        <td>{{$list->level}}</td>
                        <td><img src="{{asset('')}}assets/uploads/books/{{$list->image}}" alt="" style="width: 150px; height: 150px;"></td>
                        <td><a href="{{asset('')}}superadmin/book_level/{{$list->book_id}}">more</a></td>
                        
                        
                        
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