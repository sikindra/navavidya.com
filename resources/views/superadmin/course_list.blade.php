@extends('superadmin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Course List</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                <a href="add_course" style="color: white"> <i class="zmdi zmdi-plus"></i> Add Course </a></button>
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
                        <th>Subject</th>
                        
                        <th>Total Level class</th>
                        <th>type</th>
                        <th>level</th>
                    
                        <th>Action</th>
                        

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $list)
                        
                    
                    <tr>
                        <td>{{$list->course_name}}</td>
                        <td>{{$list->levels}}</td>
                        <td>{{$list->cat_id}}</td>
                        <td><a href="view_level/{{$list->course_id}}/{{$list->course_name}}">View Level</a></td>
                        
                        <td><a href="course_update/{{$list->course_id}}"><button type="button" class="btn btn-primary"><i class="zmdi zmdi-edit"></i></button></a>
                            <a href="course_delete/{{$list->course_id}}"><button type="button" class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>
    
@endsection