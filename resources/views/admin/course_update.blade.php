@extends('admin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Course</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                @foreach ($course as $course) 
                        
                <a href="{{asset('admin/subcategory_view')}}/{{$course->sub_cat_id}}" style="color: white"> <i class="zmdi zmdi-plus"></i>Bake</a></button>
        </div>
    </div>
</div>
<div class="container-fluid" style="margin-top: 20px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Add Category </div>
                <div class="card-body">
                   
                    <form action="{{asset('admin/course_update')}}/" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <input type="hidden" value="{{$course->course_id}}" name="course_id">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Category Type:</label>
                                    
                                    <select name="type_id" id="SelectLm" class="form-control-sm form-control">
                                        <option value="0">Please select</option>
                                        
                                        @foreach ($mode as $key => $mode)
                                            
                                        
                                        <option value="{{$mode->id}}" {{($mode->id == $course->type_id )? 'selected' : '' }} >{{$mode->name}}</option>
                                        @endforeach
                                        
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Select Category:</label>
                                    
                                    <select name="cat_id" id="SelectLm" class="form-control-sm form-control">
                                        <option value="0">Please select</option>
                                        
                                        @foreach ($category as $key => $category)
                                            
                                        
                                        <option value="{{$category->id}}" {{($category->id == $course->cat_id )? 'selected' : '' }} >{{$category->names}}</option>
                                        @endforeach
                                        
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Sub Category:</label>
                                    
                                    <select name="sub_cat_id" id="SelectLm" class="form-control-sm form-control">
                                        <option value="0">Please select</option>
                                        
                                        @foreach ($sub as $key => $sub)
                                            
                                        
                                        <option value="{{$sub->id}}" {{($sub->id == $course->sub_cat_id )? 'selected' : '' }} >{{$sub->sub_cat_name}}</option>
                                        @endforeach
                                        
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="col-6" >
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Course Sub Type:</label>
                                 
                                            <div style="display:flex">
                                                
                                                @if ($course->course_type == 'L')
                                                        <div class="form-check form-check-radio m-2">
                                                            <input class="form-check-input" type="radio" name="course_type" id="exampleRadios1" value="A" checked> Level
                                                        </div>
                                                        <div class="form-check form-check-radio m-2">  
                                                            <input class="form-check-input" type="radio" name="course_type" id="exampleRadios1" value="C" > Class
                                                        </div>
                                                        <div class="form-check form-check-radio m-2">
                                                            <input class="form-check-input" type="radio" name="course_type" id="exampleRadios1" value="n" > None
                                                        </div> @elseif($course->course_type == 'C') 
                                                        <div class="form-check form-check-radio m-2">
                                                        <input class="form-check-input" type="radio" name="course_type" id="exampleRadios1" value="A" > Level
                                                        </div>
                                                        <div class="form-check form-check-radio m-2">  
                                                            <input class="form-check-input" type="radio" name="course_type" id="exampleRadios1" value="C" checked> Class
                                                        </div>
                                                        <div class="form-check form-check-radio m-2">
                                                            <input class="form-check-input" type="radio" name="course_type" id="exampleRadios1" value="n" > None
                                                        </div>@else
                                                        <div class="form-check form-check-radio m-2">
                                                        <input class="form-check-input" type="radio" name="course_type" id="exampleRadios1" value="A" > Level
                                                        </div>
                                                        <div class="form-check form-check-radio m-2">  
                                                            <input class="form-check-input" type="radio" name="course_type" id="exampleRadios1" value="C" > Class
                                                        </div>
                                                        <div class="form-check form-check-radio m-2">
                                                            <input class="form-check-input" type="radio" name="course_type" id="exampleRadios1" value="n" checked> None
                                                        </div>
                                                        @endif
                                                        
                                             </div>
                                           
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Name.</label>
                                    <input id="cc-exp" name="course_name" type="text" class="form-control cc-exp" value="{{$course->course_name}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Enter mode of education"
                                        autocomplete="cc-exp">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Total Level / subjects No.</label>
                                    <input id="cc-exp" name="levels" type="number" class="form-control cc-exp" value="{{$course->levels}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Enter mode of education"
                                        autocomplete="cc-exp">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="x_card_code" class="control-label mb-1">Choose Image</label>
                                <div class="input-group">
                                    <input id="image" name="image" type="file" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                        data-val-cc-cvc="Please enter a valid security code" autocomplete="off">
                                        <div class="ml-2 col-md-12">
                                            <img src="{{asset('assets/uploads/courses_img')}}/{{$course->image}}" id="preview-image-before-upload" class="img-thumbnail" style="max-height:100px;">
                                        </div>

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Sample Video Link.</label>
                                    <input id="cc-exp" name="sample_video" type="text" class="form-control cc-exp" value="{{$course->sample_video}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Enter mode of education"
                                        autocomplete="cc-exp">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <br>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Course Description:</label>
                                    <textarea name="description" id="textarea-input" rows="9" placeholder="Content..." class="form-control">{{$course->description}}</textarea>
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
@endsection