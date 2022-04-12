@extends('superadmin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Workshop List</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                <a href="{{asset('superadmin/add_workshop')}}" style="color: white"> <i class="zmdi zmdi-plus"></i> Add Workshop     </a></button>
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
                        
                        <th>Batch</th>
                        <th>Batch Starts Form</th>
                        <th>Batch Starts To</th>
                    
                        <th>Course Days</th>
                        <th>Amount</th>
                        
                        <th>Action</th>
                        

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $list)
                        
                    
                    <tr>
                        <td>{{$list->subject}}</td>
                        <td>{{$list->batch}}</td>
                        <td>{{$list->batch_from}}</td>
                        <td>{{$list->batch_to}}</td>
                        <td>{{$list->course_days}}</td>
                        <td>{{$list->amount}}</td>
                        <td><a href="{{asset('')}}superadmin/workshop_update/{{$list->id}}"><button type="button" class="btn btn-primary"><i class="zmdi zmdi-edit"></i></button></a>
                            <a href="{{asset('')}}superadmin/workshop_delete/{{$list->id}}"><button type="button" class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button></a></td>
                       
                        
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>
    
@endsection