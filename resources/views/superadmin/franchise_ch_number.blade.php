@extends('superadmin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Change Phone Number</h2>
            
                
        </div>
    </div>
</div>
<div class="container-fluid" style="margin-top: 20px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Change Phone Number</div>
                <div class="card-body">
                   
                      
                   
                       
                   
                    <form id="franchise_ch_number" action="{{asset('')}}superadmin/franchise_ch_number/insert" method="post" novalidate="novalidate" enctype="multipart/form-data">
                        @csrf
                         
                    <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    
                                    <label for="cc-exp" class="control-label mb-1">Current Phone Number:</label>
                                    
                                    <input id="cc-exp" name="current_phone" class="form-control cc-exp" value="321654987"  data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Enter mode of education"
                                        autocomplete="cc-exp">
                                    
                                </div>
                            </div>
                            
                            
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label mb-1">New Phone Number:</label>
                                    <input id="new_phone" name="new_phone" type="number" class="form-control cc-exp"   placeholder="Enter enter Price"
                                        required>
                                    
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