@extends('admin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Course level</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                @foreach ($course1 as $list)
                <a href="{{asset('admin')}}/add_level/{{$list->course_id}}" style="color: white"> <i class="zmdi zmdi-plus"></i> Add Course level </a></button>
                @endforeach
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
                        <th>Level</th>
                        
                        <th>Price</th>
                        <th>Book Link</th>
                        <th>PDF</th>
                        
                        <th>Add</th>
                        <th>More</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($course as $list)
                        
                    
                    <tr>
                        <td>{{$list->level}}</td>
                        <td>{{$list->price}}</td>
                        <td>{{$list->text_link}}</td>
                        <td>{{$list->work_book_link}}</td>
                       
                        <td><a href="{{asset('admin')}}/syllebus/{{$list->level_id}}">syllebus</a></td>
                        
                        <td><a href="{{asset('admin')}}/edit_view/{{$list->level_id}}"><button type="button" class="btn btn-primary"><i class="zmdi zmdi-edit"></i></button></a>
                           </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>
    
@endsection