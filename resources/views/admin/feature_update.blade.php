@extends('admin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Add Feature</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                <a href="{{asset('admin/feature_list')}}" style="color: white"> <i class="zmdi zmdi-plus"></i>Bake</a></button>
        </div>
    </div>
</div>
<div class="container-fluid" style="margin-top: 20px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">  
                <div class="card-header">Add Feature </div>
                <div class="card-body">
                    @foreach ($features as $fea)
                        
                    
                    <form action="{{asset('admin/feature_update')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="cc-exp" class="control-label mb-1"></label>
                                <input type="hidden" name="feature_id" value="{{$fea->feature_id}}">
                                <input id="cc-exp" name="row_order" type="text" class="form-control cc-exp" value="{{$fea->row_order}}" data-val="true" data-val-required="Please enter the card expiration"
                                    data-val-cc-exp="Please enter a valid month and year" placeholder="Enter Heading:"
                                    autocomplete="cc-exp" required>
                                <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                            </div>
                        </div>
                        
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Heading:</label>
                                    <input id="cc-exp" name="heading" type="text" class="form-control cc-exp" value="{{$fea->heading}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Enter Heading:"
                                        autocomplete="cc-exp" required>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Image Icon tag:</label>
                                    <input id="cc-exp" name="icon_tag" type="text" class="form-control cc-exp" value="{{$fea->icon_tag}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Enter Batch Name"
                                        autocomplete="cc-exp" required>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Description:</label>
                                    <textarea name="description" id="textarea-input" rows="9" placeholder="Content..." class="form-control" required>{{$fea->description}}</textarea>
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
                                                        
                                                        @foreach ($features as $key => $fea)
                                                        <input class="form-check-input" type="hidden" name="status" id="exampleRadios1" value="{{$fea->status}}" {{($fea->bk_evel_id == $fea->bk_evel_id)? 'checked' : '' }} checked>
                                                    </label>
                                                </div>
                                                        @if ($fea->status == 'A')
                                                        <div class="form-check form-check-radio m-2">
                                                            <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="A" checked> Active
                                                        </div>
                                                        <div class="form-check form-check-radio m-2">  
                                                            <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="I" > Inactive
                                                        </div> @else 
                                                        <div class="form-check form-check-radio m-2">
                                                            <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="A" > Active
                                                        </div>
                                                        <div class="form-check form-check-radio m-2">
                                                            <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="I" checked> Inactive
                                                        </div>
                                                        @endif
                                                        @endforeach
                                                               
                                                    
                                                
                                               
                                            </div>
                                           
                                </div>
                            </div>
                            
                            
                            
                        
                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" style="text-align: center;">
                                <i class="fa fa-plus"></i>&nbsp;
                                <span id="payment-button-amount" >Add Feature </span>
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
