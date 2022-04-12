@extends('admin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Update Category</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                <a href="{{asset('admin/category')}}" style="color: white"> <i class="zmdi zmdi-plus"></i>Bake</a></button>
        </div>
    </div>
</div>
<div class="container-fluid" style="margin-top: 20px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Update Category </div>
                <div class="card-body">
                    @foreach ($category as $category)
                      
                   
                    <form action="{{asset('')}}admin/cat/update/{{$category->id }}" method="post" novalidate="novalidate" enctype="multipart/form-data">
                        @csrf
                         @method('PUT')
                    <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="hidden" name="id" value="{{$category->id }}">
                                    <label for="cc-exp" class="control-label mb-1">Category:</label>
                                    <input id="cc-exp" name="names" type="text" class="form-control cc-exp" value="{{$category->names}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Enter mode of education"
                                        autocomplete="cc-exp">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Mode Of Education:</label>
                                    <select name="type_id" id="SelectLm" class="form-control-sm form-control">
                                        <option value="0">Please select</option>
                                        @foreach ($mode as $key => $mode)
                                            
                                        
                                        <option value="{{$mode->id}}" {{($mode->id == $category->type_id)? 'selected' : '' }} >{{$mode->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Course Student level:</label>
                                    <input id="cc-exp" name="stud_level" type="text" class="form-control cc-exp" value="{{$category->stud_level}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Enter mode of education"
                                        autocomplete="cc-exp">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Subject names:</label>
                                    <input id="cc-exp" name="sub_names" type="text" class="form-control cc-exp" value="{{$category->sub_names}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Enter mode of education"
                                        autocomplete="cc-exp">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Description:</label>
                                    <textarea name="description" id="textarea-input" rows="9" placeholder="Content..." class="form-control">{{$category->description}}</textarea>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Subject Description::</label>
                                    <textarea name="subject_desc" id="textarea-input" rows="9" placeholder="Content..." class="form-control">{{$category->subject_desc}}</textarea>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Subject names:</label>
                                    <input id="cc-exp" name="subject_names" type="text" class="form-control cc-exp" value="{{$category->subject_names}}" data-val="true" data-val-required="Please enter the card expiration"
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
                                            <img src="{{asset('assets/uploads/courses_img')}}/{{$category->image}}" id="preview-image-before-upload" class="img-thumbnail" style="max-height:200px;">
                                        </div>

                                </div>
                            </div>
                            
                        </div>
                        
                           
                            
                            <div class="col-6" >
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Status:</label>
                                    <br>
                                            <div style="display:flex">
                                                <div class="form-check form-check-radio m-2">
                                                    <label class="form-check-label">
                                                        
                                                        
                                                        <input class="form-check-input" type="hidden" name="status" id="exampleRadios1" value="{{$category->status}}" {{($category->id == $category->id)? 'checked' : '' }} checked>
                                                    </label>
                                                </div>
                                                @if ($category->status == 'A')
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
                        
                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <i class="fa fa-plus"></i>&nbsp;
                                <span id="payment-button-amount">Update</span>
                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                            </button>
                        </div>
                        @endforeach
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
