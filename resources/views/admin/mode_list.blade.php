@extends('admin/layout')

@section('container')

<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h4 class="title-1" >Mode Of Education</h4>
            <button class="au-btn au-btn-icon au-btn--blue">
                <a href="add_modeList" style="color: white"> <i class="zmdi zmdi-plus"></i> Add Mode List</a></button>
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
                        <th>Mode</th>
                        <th>description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mode as $list)
                        
                    
                    <tr>
                        <td>{{$list->name}}</td>
                        <td>{!!$list->description!!}</td>
                        
                        <td >{{$list->status}}</td>
                        <td><a href="mode_update/{{$list->id}}"><button type="button" class="btn btn-primary"><i class="zmdi zmdi-edit"></i></button></a>
                            <a href="mode_delete/{{$list->id}}"><button type="button" class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
            
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>

    
@endsection
