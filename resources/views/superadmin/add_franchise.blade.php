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
                   
                      
                   
                       
                   
                    <form id="add_franchise" action="{{asset('')}}superadmin/add_franchise/insert" method="post" novalidate="novalidate" enctype="multipart/form-data">
                        @csrf
                         
                    <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    
                                    <label  class="control-label mb-1">First name:</label>
                                    
                                    <input id="f_name" name="f_name" type="text" class="form-control cc-exp"   placeholder="Enter first Name"
                                    required>
                                    
                                </div>
                            </div>
                            
                            
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Last name:</label>
                                    <input id="l_name" name="l_name" type="text" class="form-control cc-exp"  placeholder="Enter  last name"
                                       required>
                                    
                                </div>
                            </div>
                        
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Email:</label>
                                    <input id="email" name="email" type="email" class="form-control cc-exp" placeholder="Enter Email" requird>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="control-label mb-1">Phone:</label>
                                    <input id="phone" name="phone" type="text" class="form-control cc-exp" value="" placeholder="Enter Phone Number">
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Alternate Phone:</label>
                                    <input id="alternate_phone" name="alternate_phone" type="text" class="form-control cc-exp" placeholder="Enter Alternate number" value="" required>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Assembly Constiency:</label>
                                    <input id="assembly_cons" name="assembly_cons" type="text" class="form-control cc-exp" required>
                                    
                                </div>
                            </div>
                            
                        
                            
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">State:</label>
                                    <input id="cc-exp" name="state" type="text" class="form-control cc-exp" placeholder="Enter State" required>
                                    
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label  class="control-label mb-1">District:</label>
                                    <input id="district" name="district" type="text" class="form-control cc-exp" placeholder="Enter District" required>
                                    
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Pin Code:</label>
                                    <input id="pincode" name="pincode" type="text" class="form-control cc-exp" placeholder="Enter Pincode" required>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">City:</label>
                                    <input id="city" name="city" type="text" class="form-control cc-exp" placeholder="Enter city" >
                                    
                                </div>
                            </div>
                            
                            <div class="col-6" >
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Model:</label>
                                    <br>
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