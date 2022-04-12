@extends('superadmin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Feature List</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                <a href="{{asset('superadmin/add_feature')}}" style="color: white"> <i class="zmdi zmdi-plus"></i> Add Feature   </a></button>
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
                        
                        <th>Heading</th>
                        <th>Image Tag</th>
                        <th>Description</th>
                    
                        <th>Action</th>
                        

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $list)
                        
                    
                    <tr>
                        <td>{{$list->feature_id}}</td>
                        <td>{{$list->heading}}</td>
                        <td>{{$list->icon_tag}}</td>
                        <td>{!!$list->description!!}</td>
                        
                        <td><a href="{{asset('')}}superadmin/feature_update/{{$list->feature_id}}"><button type="button" class="btn btn-primary"><i class="zmdi zmdi-edit"></i></button></a>
                            <a href="{{asset('')}}superadmin/feature_delete/{{$list->feature_id}}"><button type="button" class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>
    
@endsection