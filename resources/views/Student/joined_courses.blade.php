@extends('Student/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h4 class="title-1" > Course 
</h4>
            
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
                        <th>Course name</th>
                        <th>Level /Class</th>
                        <th>Course Type</th>
                        <th>Mode of Education</th>
                        <th>Price(Rs.)</th>
                        <th>Date of Join</th>
                    </tr>
                </thead>
                @foreach($course as $list)
                    <tr>
                        <td >{{$list->course_name}}</a></td>
                        <td>{{$list->level}}</td>
                        <td>{{$list->course_type}}</td>
                        
                        <td>{{$list->name}}</td>
                        <td>{{$list->total_amt}}</td>
                        <td>{{$list->added_on}}</td>
                        
                    </tr>
                    @endforeach
            </table>
            
            
        </div>
        <!-- END DATA TABLE--> 
    </div>
</div>

@endsection