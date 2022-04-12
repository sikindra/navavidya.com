@extends('admin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Add Category</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                @foreach ($sub as $sub)
                        
                <a href="{{asset('admin/subcategory_list')}}/{{$sub->type_id}}/{{$sub->cat_id}}" style="color: white"> <i class="zmdi zmdi-plus"></i>Bake</a></button>
        </div>
    </div>
</div>
<div class="container-fluid" style="margin-top: 20px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Add Category </div>
                <div class="card-body">
                    
                   
                    <form action="{{asset('admin/sub_update')}}/{{$sub->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="cc-exp" class="control-label mb-1">Sub Category names:</label>
                                
                                    @foreach ($mode as $key => $mode)
                                    @if ($mode->id == $sub->type_id)
                                    
                                        
                                        <input id="cc-exp" name="" type="text" class="form-control cc-exp" value="{{$mode->name}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Enter mode of education"
                                        autocomplete="cc-exp" readonly >
                                        <input type="hidden" name="type_id" value="{{$mode->id}}">
                                    
                                    @else 
                                    
                                    @endif
                                    @endforeach
                                
                                
                            </div>
                        </div>
                        
                       
                            
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Category :</label>
                                    <select name="cat_id" id="SelectLm" class="form-control-sm form-control">
                                        <option value="0">Please select</option>
                                        
                                        @foreach ($cat as $key => $cat)
                                            
                                        
                                        <option value="{{$cat->id}}" {{($cat->id == $sub->cat_id)? 'selected' : '' }} >{{$cat->names}}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Sub Category names:</label>
                                    <input id="cc-exp" name="sub_cat_name" type="text" class="form-control cc-exp" value="{{$sub->sub_cat_name}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Enter Sub Category"
                                        autocomplete="cc-exp" required>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6" >
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Status:</label>
                                    <br>
                                            <div style="display:flex">
                                                <div class="form-check form-check-radio m-2">
                                                    <label class="form-check-label">
                                                        
                                                       
                                                        <input class="form-check-input" type="hidden" name="status" id="exampleRadios1" value="{{$sub->status}}" {{($sub->id == $sub->id)? 'checked' : '' }} checked>
                                                    </label>
                                                </div>
                                                        @if ($sub->status == 'A')
                                                        <div class="form-check form-check-radio m-2">
                                                            <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="A" checked> Active
                                                        </div>
                                                        <div class="form-check form-check-radio m-2">  
                                                            <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="i" > Inactive
                                                        </div> @else 
                                                        <div class="form-check form-check-radio m-2">
                                                            <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="A" > Active
                                                        </div>
                                                        <div class="form-check form-check-radio m-2">
                                                            <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="i" checked> Inactive
                                                        </div>
                                                        @endif
                                                    </div>
                                           
                                </div>
                            </div>
                            
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Course Description:</label>
                                    <textarea name="course_des" id="textarea-input" rows="9" placeholder="Content..." class="form-control">{{$sub->course_des}}</textarea>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Subject Description::</label>
                                    <textarea name="class_desc" id="textarea-input" rows="9" placeholder="Content..." class="form-control">{!!$sub->class_desc!!}</textarea>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            </div>
                        
                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <i class="fa fa-plus"></i>&nbsp;
                                <span id="payment-button-amount">Update Category</span>
                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                            </button>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection