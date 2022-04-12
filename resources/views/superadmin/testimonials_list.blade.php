@extends('superadmin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Testimonials List</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                <a href="{{asset('superadmin/add_testimonials')}}" style="color: white"> <i class="zmdi zmdi-plus"></i> Add Testimonials    </a></button>
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
                        <th>NO</th>
                        
                        <th>Heding</th>
                        <th>Image Tag</th>
                        <th>Description</th>
                    
                        <th>Name</th>
                        <th>Status</th>
                        <th>Action</th>
                        

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $list)
                        
                    
                    <tr>
                        <td>{{$list->id}}</td>
                        <td>{{$list->name}}</td>
                        <td>{{$list->icon_tag}}</td>
                        <td>{!!$list->description!!}</td>
                        <td>{{$list->person_name}}</td>
                        <td>{{$list->status}}</td>
                        
                        <td><a href="{{asset('superadmin')}}/testimonials_update/{{$list->id}}"><button type="button" class="btn btn-primary"><i class="zmdi zmdi-edit"></i></button></a>
                            <a href="{{asset('superadmin')}}/testimonials_delete/{{$list->id}}"><button type="button" class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>
    
@endsection