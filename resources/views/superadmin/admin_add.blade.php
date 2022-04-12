@extends('superadmin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Add Admin</h2>
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
                    
                      
                   
                    <form id="admin_add" action="{{asset('')}}superadmin/insert_admin/" method="post" enctype="multipart/form-data">
                        @csrf
                         
                    <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                   
                                    <label  class="control-label mb-1">Name:</label>
                                    <input id="name" name="name" type="text"placeholder="Enter you name" class="form-control" required>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    
                                    <label  class="control-label mb-1">Email ID:</label>
                                    <input id="email" name="email" type="email"  placeholder="Enter you email" class="form-control" required>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                   
                                    <label   class="control-label mb-1">Phone:</label>
                                    <input id="phone" name="phone" placeholder="Enter you phone" type="text"class="form-control" required>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                   
                                    <label  class="control-label mb-1">Password:</label>
                                    <input id="password" name="password" type="password" placeholder="Enter you password" class="form-control" required>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                   
                                    <label class="control-label mb-1">Confirm Password:</label>
                                    <input id="confirm_password" name="confirm_password" placeholder="Enter you confirm password" type="password" class="form-control" required>
                                   
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    
                                    <label  class="control-label mb-1">Address:</label>
                                    <input id="address" name="address" type="text" placeholder="Enter you address" class="form-control" required>
                                    
                                </div>
                            </div>
                           <div class="col-6">
                                <div class="form-group">
                                    
                                    <label  class="control-label mb-1">City:</label>
                                    <input id="city" name="city" type="text" placeholder="Enter you city" class="form-control" required>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    
                                    <label for="cc-exp" class="control-label mb-1">state:</label>
                                   <select name="state" id="state" class="form-control-sm form-control" required>
                                           
                                           <option value="">Please select State</option>
                                               <option value="AD">Andhra Pradesh</option>
                                                                          <option value="AN">Andaman and Nicobar Islands</option>
                                                                          <option value="AR">Arunachal Pradesh</option>
                                                                          <option value="AS">Assam</option>
                                                                          <option value="BR">Bihar</option>
                                                                          <option value="CH">Chandigarh</option>
                                                                          <option value="CG">Chhattisgarh</option>
                                                                          
                                                                          <option value="Delhi">Delhi</option>
                                                                          <option value="Lakshadweep">Lakshadweep</option>
                                                                          <option value="Puducherry">Puducherry</option>
                                                                          <option value="Goa">Goa</option>
                                                                          <option value="Gujarat">Gujarat</option>
                                                                          <option value="Haryana">Haryana</option>
                                                                          <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                                          <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                                          <option value="Jharkhand">Jharkhand</option>
                                                                          <option value="Karnataka">Karnataka</option>
                                                                          <option value="Kerala">Kerala</option>
                                                                          <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                                          <option value="Maharashtra">Maharashtra</option>
                                                                          <option value="Manipur">Manipur</option>
                                                                          <option value="Meghalaya">Meghalaya</option>
                                                                          <option value="Mizoram">Mizoram</option>
                                                                          <option value="Nagaland">Nagaland</option>
                                                                          <option value="Odisha">Odisha</option>
                                                                          <option value="Punjab">Punjab</option>
                                                                          <option value="Rajasthan">Rajasthan</option>
                                                                          <option value="Sikkim">Sikkim</option>
                                                                          <option value="Tamil Nadu">Tamil Nadu</option>
                                                                          <option value="Telangana">Telangana</option>
                                                                          <option value="Tripura">Tripura</option>
                                                                          <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                                          <option value="Uttarakhand">Uttarakhand</option>
                                                                          <option value="West Bengal">West Bengal</option>
                      
                                          </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    
                                    <label  class="control-label mb-1">Country:</label>
                                    <select name="country" id="country" class="form-control-sm form-control" required>
                                            <option value="">
                                                Choose...
                                            </option>
                                            <option value="India">
                                                India
                                            </option>

                                        </select>
                                </div>
                            </div>
                             
                             
                             
                           
                            <div class="col-6">
                                <div class="form-group">
                                    
                                    <label  class="control-label mb-1">Pin code:</label>
                                    <input  name="pin" id="pin" placeholder="Enter you pin" type="text"class="form-control" required>
                                    
                                </div>
                            </div>
                           
                            
                           
                            
                            <div class="col-6">
                                <label  class="control-label mb-1">Choose Image</label>
                                <div class="input-group">
                                    <input id="image" name="image" type="file" class="form-control" required>
                                        <div class="ml-2 col-md-12">
                                            <img src="{{asset('assets/images/admin')}}/" id="preview-image-before-upload" class="img-thumbnail" style="max-height:200px;">
                                        </div>

                                </div>
                            </div>
                            <div class="col-6" >
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Status:</label>
                                    <br>
                                            <div style="display:flex">
                                                <div class="form-check form-check-radio m-2">
                                                   
                                                </div>
                                                
                                                <div class="form-check form-check-radio m-2">
                                                    <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="A" checked> Active
                                                </div>
                                                <div class="form-check form-check-radio m-2">  
                                                    <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="i" > Inactive
                                                </div>   
                                                    
                                                
                                               
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
                       
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
