@extends('superadmin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            
            <h2 class="title-1">Class 1</h2>
            @foreach ($chapter as $list)
            <button class="au-btn au-btn-icon au-btn--blue">
                <a href="{{asset('superadmin')}}/addsyl_chapter/{{$list->chapter_id}}" style="color: white"> <i class="zmdi zmdi-plus"></i> Add Chapter</a></button>
        </div>
    </div>
</div>
<div class="row m-t-30">
    
    <div class="col-md-12">
        
        
        <h2 class="title-1">Class 1 {{$list->chapter_name}}</h2>
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
                        
                        <th>Video Link</th>
                        

                    </tr>
                </thead>
                <tbody>
                    @foreach ($syl as $list)
                        
                    
                    <tr>
                        <td>{{$list->syllbus_id }}</td>
                        <td>{{$list->topic_id}}<br>
                        <br>{!!$list->topic_name!!}</td>
                        <td>
                            <a href="{{asset('superadmin')}}/edit_syllebus_list/{{$list->syllbus_id }}"><button type="button" class="btn btn-primary"><i class="zmdi zmdi-edit"></i></button></a>
                            <a href="{{asset('superadmin')}}/syllebus_list_delete/{{$list->syllbus_id }}"><button type="button" class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button></a></td>
                        <td>{{$list->pdf_file}}</td>
                        
                        <td><button class="btn btn-primary btn-sm video-btn" ><i class="fa fa-play-circle fa-lg"></i> Watch Video
                        </button></td>
                       
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>
    
@endsection