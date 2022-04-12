@extends('superadmin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Add School List</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                <a href="{{asset('superadmin/school_list')}}" style="color: white"> <i class="zmdi zmdi-plus"></i>Bake</a></button>
        </div>
    </div>
</div>
<div class="container-fluid" style="margin-top: 20px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">  
                <div class="card-header">Add School List </div>
                <div class="card-body">
                    
                    <form id="add_school" action="{{asset('superadmin/school_add')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">School Name:</label>
                                    <input id="school_name" name="school_name" type="text" class="form-control cc-exp"  placeholder="Enter School Name"
                                         required>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">City:</label>
                                    <input id="city" name="city" type="text" class="form-control cc-exp"  placeholder="Enter city"
                                         required>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Peincipal:</label>
                                    <input id="pri_name" name="pri_name" type="text" class="form-control cc-exp"  placeholder="Enter Peincipal"
                                        required>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Address:</label>
                                    <input id="address" name="address" type="text" class="form-control cc-exp"  placeholder="Enter Address"
                                         required>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Email</label>
                                    <input id="email" name="email" type="email" class="form-control cc-exp"  placeholder="Enter Email"
                                         required>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Pin Code:</label>
                                    <input id="pincode" name="pincode" type="text" class="form-control cc-exp"  placeholder="Enter  Pincode"
                                         required>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Phone</label>
                                    <input id="phone" name="phone" type="text" class="form-control cc-exp"  placeholder="Enter phone"
                                        required>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">No of Login </label>
                                    <input id="no_of_login" name="no_of_login" type="text" class="form-control cc-exp" placeholder="Enter no of login"  required>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Mode Of Education</label>
                                    <input id="moe" name="moe" type="text" class="form-control cc-exp"  placeholder="Enter Mode Of Education "
                                         required>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Description:</label>
                                    <textarea name="description" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Categories:</label>
                                    <input id="categories" name="categories" type="text" class="form-control cc-exp"  placeholder="Enter Categories"  required>
                                    
                                </div>
                            </div>
                            
                            
                            <div class="col-6">
                            </div>
                        
                        
                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" style="text-align: center;">
                                <i class="fa fa-plus"></i>&nbsp;
                                <span id="payment-button-amount" >Add School </span>
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
