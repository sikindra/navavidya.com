@extends('superadmin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Course</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                
                        
                <a href="{{asset('superadmin/category')}}" style="color: white"> <i class="zmdi zmdi-plus"></i>Bake</a></button>
        </div>
    </div>
</div>
<div class="container-fluid" style="margin-top: 20px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Add Category </div>
                <div class="card-body">
                   
                    <form id="add_level" action="{{asset('superadmin/insert_level')}}/" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Category Type:</label>
                                    
                                    <select name="add_level" id="add_level" class="form-control-sm form-control" required>
                                        <option value="">Please select</option>
                                        
                                        @foreach ($mode as $mode)
                                            
                                        
                                        <option value="{{$mode->id}}">{{$mode->name}}</option>
                                        @endforeach
                                        
                                    </select>
                                    
                                </div>
                            </div>
                           
                            <div class="col-6">
                                @foreach ($course as $course) 
                                <input type="hidden" name="course_id" value="{{$course->course_id}}">
                                @endforeach
                                <div class="form-group">
                                    <label  class="control-label mb-1">Level.</label>
                                    <input id="level" name="level" type="text" class="form-control cc-exp"   placeholder=""
                                        required>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <label  class="control-label mb-1">Choose Image</label>
                                <div class="input-group">
                                    <input id="image" name="level_img_file_name" type="file" class="form-control cc-cvc" >
                                        <div class="ml-2 col-md-12">
                                            <img src="{{asset('assets/uploads/courses_img')}}" id="preview-image-before-upload" class="img-thumbnail" style="max-height:100px;">
                                        </div>

                                </div>
                            </div>
                           
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Price.</label>
                                    <input id="price" name="price" type="text" class="form-control cc-exp"  placeholder="price"
                                       >
                                   
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label " class="control-label mb-1">Text book Link.</label>
                                    <input id="text_link" name="text_link" type="text" class="form-control cc-exp"   placeholder="Enter Work book Link"
                                       >
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Work book Link</label>
                                    <input id="work_book_link" name="work_book_link" type="text" class="form-control cc-exp"   placeholder="Enter Work book Link"
                                        >
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">what will learn ?</label>
                                    <textarea name="description" id="description" rows="9" placeholder="Content..." class="form-control"></textarea>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Syllabus:</label>
                                    <textarea name="Syllabus" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            
                            
                            
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="control-label mb-1">Sample Video Link.</label>
                                    <input id="sample_video_file_name" name="sample_video_file_name" type="text" class="form-control cc-exp"  placeholder="Enter you sample video fill name"
                                        autocomplete="cc-exp" requird>
                                   
                                </div>
                            </div>
                            <br>
                            
                        </div>
                        
                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <i class="fa fa-plus"></i>&nbsp;
                                <span id="payment-button-amount">Add Level</span>
                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                            </button>
                        </div>
                    </form>
                            
                            
                            
                       
@endsection