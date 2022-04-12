@extends('superadmin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Add Course </h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                <a href="course_list" style="color: white"> <i class="zmdi zmdi-plus"></i> Bake </a></button>
        </div>
    </div>
</div>
<div class="container-fluid" style="margin-top: 20px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Add Course </div>
                <div class="card-body">
                    
                    <form id="add_course" action="{{asset('superadmin/addcourse/insert')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Category type:</label>
                                    <select id="type_id" name="type_id" class="form-control-sm form-control" required>
                                        <option value="">select mode</option>
                                        @foreach ($mode as $key => $mode)
                                        <option value="{{$mode->id}}">{{$mode->name}}</option>
                                         @endforeach
                                    </select>
                                </div> 
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Category:</label>
                                    <select name="cat_id" id="cat_id" class="form-control-sm form-control" required>
                                        
                                            <option value="">select option</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Sub Category:</label>
                                    <select name="sub_cat_id" id="sub_cat_id" class="form-control-sm form-control">
                                        
                                            <option value="">select option</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col-6" >
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Course sub type:</label>
                                    <br>
                                            <div style="display:flex">
                                                <div class="form-check form-check-radio m-2">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="course_type" id="exampleRadios1" value="L" checked>
                                                        <span class="form-check-sign"></span>
                                                        Level
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-radio m-2">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="course_type" id="exampleRadios1" value="c" >
                                                        <span class="form-check-sign"></span>
                                                        class
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-radio m-2">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="course_type" id="exampleRadios1" value="" >
                                                        <span class="form-check-sign"></span>
                                                        none
                                                    </label>
                                                </div>
                                            </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">name:</label>
                                    <input id="course_name" name="course_name" type="text" class="form-control cc-exp" placeholder="Enter course name"
                                       required>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="x_card_code" class="control-label mb-1">Choose Course Image:</label>
                                <div class="input-group">
                                    <input id="image" name="image" type="file" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                        data-val-cc-cvc="Please enter a valid security code" autocomplete="off">
                                        <div class="ml-2 col-md-12">
                                            <img src="image.png" id="preview-image-before-upload" class="img-thumbnail" style="max-height:200px;">
                                        </div>

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="control-label mb-1">Total level / subject No.:</label>
                                    <input id="levels" name="levels" type="number" class="form-control cc-exp" placeholder="Enter mode of education"
                                        >
                                    
                                </div>
                            </div>
                            
                            
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="control-label mb-1">Sample video link:</label>
                                    <input id="sample_video" name="sample_video" type="text" class="form-control cc-exp"  placeholder="Enter mode of education"
                                       requird>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Description:</label>
                                    <textarea name="description" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                                    
                                </div>
                            </div>
                            
                            
                        </div>
                        <div class="row" >
                           
                            
                        </div>
                        
                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <i class="fa fa-plus"></i>&nbsp;
                                <span id="payment-button-amount">Add</span>
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

