@extends('admin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Add Category</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                <a href="{{asset('admin/category')}}" style="color: white"> <i class="zmdi zmdi-plus"></i>Bake</a></button>
        </div>
    </div>
</div>
<div class="container-fluid" style="margin-top: 20px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Add Category </div>
                <div class="card-body">
                    
                    <form id="Category" action="{{asset('admin/category_insert')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Category:</label>
                                    <input id="names" name="names" type="text" class="form-control cc-exp" value=""  placeholder="Enter mode of education"
                                        autocomplete="cc-exp" required>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Mode Of Education:</label>
                                    <select class="form-control" name="type_id" id="type_id" required>
                                    <option value="">select option</option>
                                     @foreach($data as $row)
                                     <option value="{{$row->id}}">{{$row->name}}</option>
                                     @endforeach
                                    
                                  </select>
                                   
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Course Student level:</label>
                                    <input id="stud_level" name="stud_level" type="text" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Category name"
                                        autocomplete="cc-exp" required>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Subject names:</label>
                                    
                                    <input id="sub_names" name="sub_names" type="text" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Category name"
                                        autocomplete="cc-exp">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Description:</label>
                                    <textarea name="description" id="textarea-input" rows="9" placeholder="Content..." class="form-control" required></textarea>
                                    
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Subject Description::</label>
                                    <textarea name="subject_desc" id="your_summernote" rows="9" placeholder="Content..." class="form-control" required></textarea>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Subject names:</label>
                                    <input id="subject_names" name="subject_names" type="text" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Subject name"
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
                                            <img src="image.png" id="preview-image-before-upload" class="img-thumbnail" style="max-height:200px;">
                                        </div>

                                </div>
                            </div>
                            
                        </div>
                        <div class="row" >
                           
                            <div class="col-6" >
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Status:</label>
                                    <br>
                                            <div style="display:flex">
                                                <div class="form-check form-check-radio m-2">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="A" checked>
                                                        <span class="form-check-sign"></span>
                                                        Active
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-radio m-2">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="I" >
                                                        <span class="form-check-sign"></span>
                                                        Inactive
                                                    </label>
                                                </div>
                                            </div>
                                </div>
                            </div>
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