@extends('superadmin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Update Employee</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                <a href="{{asset('superadmin/employee')}}" style="color: white"> <i class="zmdi zmdi-plus"></i>Bake</a></button>
        </div>
    </div>
</div>
<div class="container-fluid" style="margin-top: 20px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">  
                <div class="card-header">Update Employee </div>
                <div class="card-body">
                    @foreach ($data as $emp)
                        
                    
                    <form action="{{asset('superadmin')}}/employee/update/{{$emp->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">First Name</label>
                                    <input id="cc-exp" name="first_name" type="text" class="form-control cc-exp" value="{{$emp->first_name}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="First Name"
                                        autocomplete="cc-exp" required>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Last Name</label>
                                    <input id="cc-exp" name="last_name" type="text" class="form-control cc-exp" value="{{$emp->last_name}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Last Name"
                                        autocomplete="cc-exp" required>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Email</label>
                                    <input id="cc-exp" name="email" type="text" class="form-control cc-exp" value="{{$emp->email}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Email"
                                        autocomplete="cc-exp" required>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Phone</label>
                                    <input id="cc-exp" name="phone" type="text" class="form-control cc-exp" value="{{$emp->phone}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="phone no"
                                        autocomplete="cc-exp" required>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Address</label>
                                    <input id="cc-exp" name="address1" type="text" class="form-control cc-exp" value="{{$emp->address1}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="1234 main st"
                                        autocomplete="cc-exp" required>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Address 2</label>
                                    <input id="cc-exp" name="address2" type="text" class="form-control cc-exp" value="{{$emp->address2}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year"                                         autocomplete="cc-exp" required>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">City</label>
                                    <input id="cc-exp" name="city" type="text" class="form-control cc-exp" value="{{$emp->city}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Apartment,Studio, or floor"
                                        autocomplete="cc-exp" required>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">State</label>
                                    <select id="cc-exp" class="form-control cc-exp" name="state">
                                        
                                            @foreach ($data as $key => $emps)
                                            <option value="{{$emps->state}}" {{($emps->id == $emps->id)? 'selected' : '' }} >
                                                @if ($emps->state == 'KA')
                                                <p>Karanataka</p></option>@else 
                                                <p>Choose...</p>
                                                <option value="KA">Karanataka</option>@endif
                                                @endforeach
                                        
                                    </select>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Country</label>
                                    <select id="cc-exp" class="form-control cc-exp" name="country">
                                       
                                            @foreach ($data as $key => $data)
                                            
                                        
                                        <option value="{{$data->country}}" {{($data->id == $data->id)? 'selected' : '' }} >
                                            @if ($data->country == 'IN')
                                            <p>India</p>@else 
                                            <p>Choose...</p>
                                                <option value="IN">India</option>@endif</option>
                                        @endforeach
                                        
                                    </select>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Zip</label>
                                    <input id="cc-exp" name="pincode" type="text" class="form-control cc-exp" data-fv-field="pincode" maxlength="6" value="{{$emp->pincode}}" required>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            
                            
                            
                        
                        
                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" style="text-align: center;">
                                <i class="fa fa-plus"></i>&nbsp;
                                <span id="payment-button-amount" >Update Employee </span>
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
