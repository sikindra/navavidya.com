@extends('admin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            
            <h2 class="title-1">Class 1</h2>
            @foreach ($course as $list)
            <button class="au-btn au-btn-icon au-btn--blue">
                <a href="{{asset('admin')}}/add_chapter/{{$list->level_id}}" style="color: white"> <i class="zmdi zmdi-plus"></i> Add Chapter</a></button>
        </div>
    </div>
</div>
<div class="row m-t-30">
    
    <div class="col-md-12">
        
        
        <h2 class="title-1">Class 1 {{$list->level}}</h2>
        @endforeach
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>No.</th>
                        
                        <th>Name</th>
                        <th>Action</th>
                        <th>PDF</th>
                        <th>syllebus_list</th>
                        <th>Video Link</th>
                        

                    </tr>
                </thead>
                <tbody>
                    @foreach ($chapter as $list)
                        
                    
                    <tr>
                        <td>{{$list->chapter_id}}</td>
                        <td>{{$list->chapter_name}}</td>
                        <td><a href="{{asset('admin')}}/addsyl_chapter/{{$list->chapter_id}}"><button type="button" class="btn btn-primary"><i class="zmdi zmdi-plus"></i></button></a>
                            <a href="{{asset('admin')}}/edit_chapter/{{$list->chapter_id}}"><button type="button" class="btn btn-primary"><i class="zmdi zmdi-edit"></i></button></a>
                            <a href="{{asset('admin')}}/chapter_delete/{{$list->chapter_id}}"><button type="button" class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button></a></td>
                        <td>{{$list->pdf_file}}</td>
                        <td><a href="{{asset('admin/syllebus_list')}}/{{$list->chapter_id}}">syllebus</a></td>
                        <td>{{$list->video_link}}</td>
                       
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>
    
@endsection