@extends('admin/layout')

@section('container')


<div class="main-content" style="padding-top:50px;">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" style="margin-bottom: 50px;">
                    <div class="overview-wrap">
                        <h2 class="title-1">Manage Profile</h2>
                        
                            
                    </div>
                </div>
              
             
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-header" style="background: #dfdfdf; color: black;">
                            <strong><i class="fas  fa-gear (alias)"></i></strong>  EDIT DETAILS
                            
                        </div>
                        <div class="card-body card-block">
                            <form action="{{asset('admin/update_profile')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                            <div class="has-success form-group">
                                <label for="inputSuccess2i" class=" form-control-label">Name</label>
                                <input type="text" id="inputSuccess2i" name="name" value="{{session()->get('ADMIN_NAME')}}" class="form-control-success form-control">
                                <input type="hidden" id="inputSuccess2i" name="id" value="{{session()->get('ADMIN_ID')}}" class="form-control-success form-control">
                            </div>
                            <div class="has-warning form-group">
                                <label for="inputWarning2i" class=" form-control-label">Email</label>
                                <input type="text" id="inputWarning2i" name="email" value="{{session()->get('ADMIN_EMAIL')}}" class="form-control-warning form-control">
                            </div>
                            <div class="has-warning form-group">
                                <label for="inputWarning2i" class=" form-control-label">Choose Image</label>
                                <div class="input-group">
                                    <input id="image" name="image" type="file" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                        data-val-cc-cvc="Please enter a valid security code" autocomplete="off">
                                        <div class="ml-2 col-md-12">
                                            <img src="{{asset('assets/images/admin/')}}/{{session()->get('ADMIN_IMAGE')}}" id="preview-image-before-upload" class="img-thumbnail" style="max-height:250px; width:250px;">
                                        </div>
                                </div>
                            </div>
                           
                            
                            <div>
                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                    <i class="fas fa-save (alias)"></i>&nbsp;
                                    <span id="payment-button-amount">Save</span>
                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                </button>
                            </div>
                            </form>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-header" style="background: #dfdfdf; color: black;">
                            <strong><i class="fas fa-list-ul"></i></strong> CHANGE PASSWORD
                        </div>
                        <div class="card-body card-block">
                            <form  id="profile" action="admin_profile" method="post" >
                                @csrf
                               
                            <div class="has-success form-group">
                                <label for="inputIsValid" class=" form-control-label">Password</label>
                                <input type="password" id="password" name="password"  class="form-control" required>
                                <input type="hidden" id="inputSuccess2i" name="id" value="{{session()->get('ADMIN_ID')}}" class="form-control-success form-control">
                            </div>
                            <div class="has-warning form-group">
                                <label for="inputIsInvalid" class=" form-control-label">Confirm Password</label>
                                <input type="password" id="confirm_password" name="confirm_password"  class="form-control" required>
                            </div>
                            <div>
                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                    <i class="fas fa-save (alias)"></i>&nbsp;
                                    <span id="btmprofile">Change Password</span>
                                   
                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                </button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>



@endsection