@extends('admin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Edit Testimonials</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                <a href="{{asset('admin/testimonials_list')}}" style="color: white"> <i class="zmdi zmdi-plus"></i>Bake</a></button>
        </div>
    </div>
</div>
<div class="container-fluid" style="margin-top: 20px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">  
                <div class="card-header">Edit Testimonials</div>
                <div class="card-body">
                    @foreach ($data as $testimonials)
                        
                    
                    <form action="{{asset('admin/testi_update')}}/{{$testimonials->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                        
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Heading:</label>
                                    <input id="cc-exp" name="name" type="text" class="form-control cc-exp" value="{{$testimonials->name}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Enter Testimonials Heading:"
                                        autocomplete="cc-exp" required>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="x_card_code" class="control-label mb-1">Choose Image</label>
                                <div class="input-group">
                                    <input id="image" name="image" type="file" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                        data-val-cc-cvc="Please enter a valid security code" autocomplete="off" >
                                        <div class="ml-2 col-md-12">
                                            <img src="{{asset('assets/img')}}/{{$testimonials->image}}" id="preview-image-before-upload" class="img-thumbnail" style="max-height:100px;">
                                        </div>
    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Person Name:</label>
                                    <input id="cc-exp" name="person_name" type="text" class="form-control cc-exp" value="{{$testimonials->person_name}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Enter Person Name"
                                        autocomplete="cc-exp" required>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Description:</label>
                                    <textarea name="description" id="textarea-input" rows="9" placeholder="Content..." class="form-control" required>{{$testimonials->description}}</textarea>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-6" >
                            <div class="form-group">
                                <label for="cc-exp" class="control-label mb-1">Status:</label>
                                <br>
                                        <div style="display:flex">
                                            <div class="form-check form-check-radio m-2">
                                                <label class="form-check-label">
                                                    
                                                    @foreach ($data as $key => $test)
                                                    <input class="form-check-input" type="hidden" name="status" id="exampleRadios1" value="{{$test->status}}" {{($test->id == $test->id)? 'checked' : '' }} checked>
                                                </label>
                                            </div>
                                                    @if ($test->status == 'A')
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
                                                    @endforeach
                                                           
                                                
                                            
                                           
                                        </div>
                                       
                            </div>
                        </div>
                            
                            
                            
                        
                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" style="text-align: center;">
                                <i class="fa fa-plus"></i>&nbsp;
                                <span id="payment-button-amount" >Update Testimonials </span>
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
