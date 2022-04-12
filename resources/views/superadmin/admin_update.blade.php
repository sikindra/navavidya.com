@extends('superadmin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Update Admin</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                <a href="{{asset('superadmin/admin_list')}}" style="color: white"> <i class="zmdi zmdi-plus"></i>Bake</a></button>
        </div>
    </div>
</div>
<div class="container-fluid" style="margin-top: 20px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Update Admin </div>
                <div class="card-body">
                    @foreach ($admin as $admin)
                      
                   
                    <form action="{{asset('')}}superadmin/admin_user_update/" method="post" novalidate="novalidate" enctype="multipart/form-data">
                        @csrf
                         @method('PUT')
                    <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="hidden" name="id" value="{{$admin->id }}">
                                    <label for="cc-exp" class="control-label mb-1">Name:</label>
                                    <input id="cc-exp" name="name" type="text" class="form-control cc-exp" value="{{$admin->name}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" 
                                        autocomplete="cc-exp">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    
                                    <label for="cc-exp" class="control-label mb-1">Email ID:</label>
                                    <input id="cc-exp" name="email" type="email" class="form-control cc-exp" value="{{$admin->email}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year"
                                        autocomplete="cc-exp">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                   
                                    <label for="cc-exp" class="control-label mb-1">Phone:</label>
                                    <input id="cc-exp" name="phone" type="text" class="form-control cc-exp" value="{{$admin->phone}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" 
                                        autocomplete="cc-exp">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    
                                    <label for="cc-exp" class="control-label mb-1">Address:</label>
                                    <input id="cc-exp" name="address" type="text" class="form-control cc-exp" value="{{$admin->address}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" 
                                        autocomplete="cc-exp">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                           <div class="col-6">
                                <div class="form-group">
                                    
                                    <label for="cc-exp" class="control-label mb-1">City:</label>
                                    <input id="cc-exp" name="city" type="text" class="form-control cc-exp" value="{{$admin->city}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" 
                                        autocomplete="cc-exp">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    
                                    <label for="cc-exp" class="control-label mb-1">state:</label>
                                    <input id="cc-exp" name="state" type="text" class="form-control cc-exp" value="{{$admin->state}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" 
                                        autocomplete="cc-exp">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    
                                    <label for="cc-exp" class="control-label mb-1">country:</label>
                                    <input id="cc-exp" name="country" type="text" class="form-control cc-exp" value="{{$admin->country}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" 
                                        autocomplete="cc-exp">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                             
                             
                             
                           
                            <div class="col-6">
                                <div class="form-group">
                                    
                                    <label for="cc-exp" class="control-label mb-1">Pin code:</label>
                                    <input id="cc-exp" name="pin" type="text" class="form-control cc-exp" value="{{$admin->pin}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" 
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
                                            <img src="{{asset('assets/images/admin')}}/{{$admin->image}}" id="preview-image-before-upload" class="img-thumbnail" style="max-height:200px;">
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
                                                        
                                                        
                                                        <input class="form-check-input" type="hidden" name="status" id="exampleRadios1" value="{{$admin->status}}" {{($admin->id == $admin->id)? 'checked' : '' }} checked>
                                                    </label>
                                                </div>
                                                @if ($admin->status == 'A')
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
