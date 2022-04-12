@extends('admin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Category</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                 @foreach ($categories as $list)
                <a href="{{asset('admin/add_subcategory')}}/{{$list->type_id}}/{{$list->id}}" style="color: white"> <i class="zmdi zmdi-plus"></i>add_subcategory</a></button>
                
        </div>
             
            <h4 class="title-1" style="font-size: 19px;">Category Name : {{$list->names}}</h4> 
            @endforeach
             @foreach ($modes as $list)
            <p style="text-align: center;"><span style="font-weight: bold;">Mode Name :</span> {{$list->name}}</p>
              @endforeach
                
       
        
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
                        
                        <th>Category</th>
                        <th>description</th>
                        <th>more</th>
                    
                        <th>status</th>
                        <th>Action</th>
                        

                    </tr>
                </thead>
                <tbody>
                    @foreach ($course as $list)
                        
                    
                    <tr>
                        <td>{{$list->id}}</td>
                        <td>{{$list->sub_cat_name}}</td>
                        <td>{{$list->class_desc}}</td>
                        <td><a href="{{asset('admin/subcategory_view')}}/{{$list->id}}"><button type="button" class="btn btn-primary">view</button></a></td>
                        <td>@if ($list->status == 'A')
                            <p>Active</p>@else 
                            <p>Inactive</p>@endif</td>
                        <td><a href="{{asset('admin/subcategory_update')}}/{{$list->id}}"><button type="button" class="btn btn-primary"><i class="zmdi zmdi-edit"></i></button></a>
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