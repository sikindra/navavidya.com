@extends('superadmin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Add Address</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                
                <a href="{{asset('superadmin/book_level/')}}" style="color: white"> <i class="zmdi zmdi-plus"></i>Bake</a></button>
                
        </div>
    </div>
</div>
<div class="container-fluid" style="margin-top: 20px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Add Address</div>
                <div class="card-body">
                   
                      
                   
                       
                   
                    <form id="address" action="{{asset('')}}superadmin/adderss/insert" method="post" novalidate="novalidate" enctype="multipart/form-data">
                        @csrf
                         
                    <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    
                                    <label  class="control-label mb-1">Place_name</label>
                                    
                                    <input id="location" name="location" type="text" required class="form-control cc-exp"   placeholder="Enter Place_name"
                                         >
                                   
                                </div>
                            </div>
                            
                            
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="control-label mb-1">Full Name</label>
                                    <input id="name" name="name" type="text" class="form-control cc-exp"   placeholder="Enter enter Price"
                                         required>
                                   
                                </div>
                            </div>
                        
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Address 1
                                    </label>
                                    <input id="address1" name="address1" type="text" class="form-control cc-exp" placeholder="Address 1" 
                                     required/>
                                    
                                    
                                </div>
                            </div>
                            <div class="col-6" style="margin-top: 30px;">
                                <div class="form-group">
                                   
                                    <input id="address2" name="address2" type="text" class="form-control cc-exp" placeholder="Address 2"
                                     required/>
                                    
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                   
                                    <input id="city" name="city" type="text" class="form-control cc-exp" placeholder="City"
                                     required/>
                                    
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                   
                                    <input id="state" name="state" type="text" class="form-control cc-exp"  placeholder="State"
                                     required>
                                   
                                </div>
                            </div>
                            <div class="col-6" style="margin-top: 30px;">
                                <div class="form-group">
                                   
                                    <input id="pincode" name="pincode" type="text" class="form-control cc-exp"  placeholder="Pincode" 
                                     required>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Phone
                                    </label>
                                    <input id="phone" name="phone" type="text" class="form-control cc-exp"  placeholder="Enter Phone"
                                     required>
                                   
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="control-label mb-1">Alternate Phone (optional )
                                    </label>
                                    <input id="alt_phone" name="alt_phone" type="text" class="form-control cc-exp" placeholder="Enter Alternate Phone"
                                     required>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Email Id
                                    </label>
                                    <input id="email_id" name="email_id" type="email" class="form-control cc-exp"  placeholder="Enter you Email Id"
                                    required>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Alternate Email Id (optional )                                    </label>
                                    <input id="alt_email" name="alt_email" type="email" class="form-control cc-exp"  placeholder="Enter Alternate Email Id"
                                     required>
                                    
                                </div>
                            </div>
                            
                            
                        
                            <div class="col-6" >
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Status:</label>
                                    <br>
                                            <div style="display:flex">
                                                <div class="form-check form-check-radio m-2">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="1" checked>
                                                        <span class="form-check-sign"></span>
                                                        Active
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-radio m-2">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="0" >
                                                        <span class="form-check-sign"></span>
                                                        Inactive
                                                    </label>
                                                </div>
                                            </div>
                                </div>
                            </div>
                            
                            
                        
                        
                        <div>
                            
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <i class="fa fa-plus"></i>&nbsp;
                                <span id="payment-button-amount">Add Address</span>
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