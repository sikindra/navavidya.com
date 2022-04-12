@extends('superadmin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Add Employee</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                <a href="{{asset('superadmin/employee')}}" style="color: white"> <i class="zmdi zmdi-plus"></i>Bake</a></button>
        </div>
    </div>
</div>
<div class="container-fluid" style="margin-top: 20px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">  
                <div class="card-header">Add Employee </div>
                <div class="card-body">
                    
                    <form id="add_employee" action="employee/insert" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">First Name</label>
                                    <input id="first_name" name="first_name" type="text" class="form-control cc-exp"  placeholder="First Name"
                                        required>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Last Name</label>
                                    <input id="last_name" name="last_name" type="text" class="form-control cc-exp"  placeholder="Last Name"
                                         required>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Email</label>
                                    <input id="email" name="email" type="text" class="form-control cc-exp"  required>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Phone</label>
                                    <input id="phone" name="phone" type="text" class="form-control cc-exp"  placeholder="phone no"
                                         required>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Password</label>
                                    <input id="password" name="password" type="text" class="form-control cc-exp"  placeholder="Password"
                                         required>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Confirm Password</label>
                                    <input id="confirm_password" name="confirm_password" type="text" class="form-control cc-exp" placeholder="Password"
                                         required>
                                   
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Address</label>
                                    <input id="address1" name="address1" type="text" class="form-control cc-exp"  required>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Address 2</label>
                                    <input id="address2" name="address2" type="text" class="form-control cc-exp" required>
                                    
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label  class="control-label mb-1">City</label>
                                    <input id="city" name="city" type="text" class="form-control cc-exp" placeholder="Apartment,Studio, or floor"
                                         required>
                                    
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label  class="control-label mb-1">State</label>
                                    <select id="state" class="form-control cc-exp" name="state" required>
                                        <option value="">
                                            Choose...</option>
                                        <option value="KA">Karanataka</option>
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Country</label>
                                    <select id="country" class="form-control cc-exp" name="country" required>
                                        <option value="">
                                            Choose...</option>
                                        <option value="IN">India</option>
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Zip</label>
                                    <input id="pincode" name="pincode" type="text" class="form-control cc-exp" data-fv-field="pincode" maxlength="6" required>
                                   
                                </div>
                            </div>
                            
                            
                            
                        
                        
                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" style="text-align: center;">
                                <i class="fa fa-plus"></i>&nbsp;
                                <span id="payment-button-amount" >Add Employee </span>
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
