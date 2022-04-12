@extends('superadmin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Add Franchise List </h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                
                <a href="{{asset('superadmin/franchise_list/')}}" style="color: white"> <i class="zmdi zmdi-plus"></i>Bake</a></button>
                
        </div>
    </div>
</div>
<div class="container-fluid" style="margin-top: 20px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Add List </div>
                <div class="card-body">
                   
                      
                   
                      @foreach ($data as $fre)
                          
                      
                   
                    <form action="{{asset('')}}superadmin/franchise_update" method="post" novalidate="novalidate" enctype="multipart/form-data">
                        @csrf
                         
                    <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="hidden" name="id" value="{{$fre->id}}">
                                    <label for="cc-exp" class="control-label mb-1">First name:</label>
                                    
                                    <input id="cc-exp" name="f_name" type="text" class="form-control cc-exp" value="{{$fre->f_name}}"  placeholder="Enter first Name"
                                    />
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            
                            
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Last name:</label>
                                    <input id="cc-exp" name="l_name" type="text" class="form-control cc-exp" value="{{$fre->l_name}}"  data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Enter  last name"
                                        autocomplete="cc-exp">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                        
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Email:</label>
                                    <input id="cc-exp" name="email" type="email" class="form-control cc-exp" value="{{$fre->email}}" placeholder="Enter Email"  data-val="true" data-val-required="Please enter the card expiration"
                                    data-val-cc-exp="Please enter a valid month and year" 
                                    autocomplete="cc-exp">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Phone:</label>
                                    <input id="cc-exp" name="phone" type="text" class="form-control cc-exp" value="{{$fre->phone}}" placeholder="Enter Phone Number" data-val="true" data-val-required="Please enter the card expiration"
                                    data-val-cc-exp="Please enter a valid month and year" 
                                    autocomplete="cc-exp">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Alternate Phone:</label>
                                    <input id="cc-exp" name="alternate_phone" type="text" class="form-control cc-exp" placeholder="Enter Alternate number" value="{{$fre->alternate_phone}}"  data-val="true" data-val-required="Please enter the card expiration"
                                    data-val-cc-exp="Please enter a valid month and year" 
                                    autocomplete="cc-exp">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Assembly Constiency:</label>
                                    <input id="cc-exp" name="assembly_cons" type="text" class="form-control cc-exp" value="{{$fre->assembly_cons}}" placeholder="Enter Assembly Constiency " data-val="true" data-val-required="Please enter the card expiration"
                                    data-val-cc-exp="Please enter a valid month and year" 
                                    autocomplete="cc-exp">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            
                        
                            
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">State:</label>
                                    <input id="cc-exp" name="state" type="text" class="form-control cc-exp" placeholder="Enter State" value="{{$fre->state}}" data-val="true" data-val-required="Please enter the card expiration"
                                    data-val-cc-exp="Please enter a valid month and year" 
                                    autocomplete="cc-exp">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">District:</label>
                                    <input id="cc-exp" name="district" type="text" class="form-control cc-exp" placeholder="Enter District" value="{{$fre->district}}" data-val="true" data-val-required="Please enter the card expiration"
                                    data-val-cc-exp="Please enter a valid month and year" 
                                    autocomplete="cc-exp">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Pin Code:</label>
                                    <input id="cc-exp" name="pincode" type="text" class="form-control cc-exp" placeholder="Enter Pincode" value="{{$fre->pincode}}" data-val="true" data-val-required="Please enter the card expiration"
                                    data-val-cc-exp="Please enter a valid month and year" 
                                    autocomplete="cc-exp">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">City:</label>
                                    <input id="cc-exp" name="city" type="text" class="form-control cc-exp" placeholder="Enter city" value="{{$fre->city}}" data-val="true" data-val-required="Please enter the card expiration"
                                    data-val-cc-exp="Please enter a valid month and year" 
                                    autocomplete="cc-exp">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            
                            <div class="col-6" >
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Model:</label>
                                    @foreach ($data as $key => $fre)
                                                        <input class="form-check-input" type="hidden" name="model" id="exampleRadios1" value="{{$fre->model}}" {{($fre->id == $fre->id)? 'checked' : '' }} checked>
                                                    </label>
                                                
                                                        @if ($fre->model == 'fofo')
                                                        <div style="display:flex">
                                                            <div class="form-check form-check-radio m-2">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio" name="model" id="exampleRadios1" value="fofo" checked>
                                                                    <span class="form-check-sign"></span>
                                                                    fofo
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-radio m-2">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio" name="model" id="exampleRadios1" value="foco" >
                                                                    <span class="form-check-sign"></span>
                                                                    foco
                                                                </label>
                                                            </div>
                                                        </div> @else 
                                                        <div style="display:flex">
                                                            <div class="form-check form-check-radio m-2">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio" name="model" id="exampleRadios1" value="fofo" >
                                                                    <span class="form-check-sign"></span>
                                                                    fofo
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-radio m-2">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio" name="model" id="exampleRadios1" value="foco" checked >
                                                                    <span class="form-check-sign"></span>
                                                                    foco
                                                                </label>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @endforeach
                                </div>
                            </div>
                            

                            
                        
                        
                        <div>
                            
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <i class="fa fa-plus"></i>&nbsp;
                                <span id="payment-button-amount">Update</span>
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