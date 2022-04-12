@extends('superadmin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Add Category</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                
                @foreach ($categories as $list )       
                <a href="{{asset('admin/subcategory_list')}}/{{$list->type_id}}/{{$list->id}}" style="color: white"> <i class="zmdi zmdi-plus"></i>Bake</a></button>
                @endforeach
        </div>
    </div>
</div>
<div class="container-fluid" style="margin-top: 20px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Add Category </div>
                <div class="card-body">
                    
                   
                    <form id="add_subcategory" action="{{asset('superadmin/sub_insert')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                        @foreach ($categories as $list )
                        <div class="col-6">
                            <div class="form-group">
                                <label for="cc-exp" class="control-label mb-1">Sub Category names:</label>
                                @foreach ($modes as $list1)
                                   @if ($list1->id == $list->type_id)
                                    
                                        
                                        <input id="cc-exp" name="" type="text" class="form-control cc-exp" value="{{$list1->name}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Enter mode of education"
                                        autocomplete="cc-exp" readonly >
                                        <input type="hidden" name="type_id" value="{{$list1->id}}">
                                    
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
                                            
                                        
                                        <option value="{{$cat->id}}" {{($cat->id == $list->id)? 'selected' : '' }} >{{$cat->names}}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Sub Category names:</label>
                                    <input id="sub_cat_name" name="sub_cat_name" type="text" class="form-control cc-exp" placeholder="Enter Sub Category"
                                        a required>
                                  
                                </div>
                            </div>
                            
                            
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Course Description:</label>
                                    <textarea name="course_des" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Subject Description::</label>
                                    <textarea name="class_desc" id="description" rows="9" placeholder="Content..." class="form-control"></textarea>
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
                                                        
                                                       
                                                       
                                                    </label>
                                                </div>
                                                       
                                                        <div class="form-check form-check-radio m-2">
                                                            <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="A" checked> Active
                                                        </div>
                                                        <div class="form-check form-check-radio m-2">  
                                                            <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="i" > Inactive
                                                        </div> 
                                                    </div>
                                           
                                </div>
                            </div>
                            @endforeach
                            </div>
                            
                        
                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <i class="fa fa-plus"></i>&nbsp;
                                <span id="payment-button-amount">Add Category</span>
                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                            </button>
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection