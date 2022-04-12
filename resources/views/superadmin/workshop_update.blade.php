@extends('superadmin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Add Workshop</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                <a href="{{asset('superadmin/employee')}}" style="color: white"> <i class="zmdi zmdi-plus"></i>Bake</a></button>
        </div>
    </div>
</div>
<div class="container-fluid" style="margin-top: 20px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">  
                <div class="card-header">Add Workshop </div>
                <div class="card-body">
                    @foreach ($data as $work)
                        
                    
                    <form action="{{asset('superadmin/wrokshop_update')}}/{{$work->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                        <div class="col-6">
                            <label for="x_card_code" class="control-label mb-1">Choose Image</label>
                            <div class="input-group">
                                <input id="image" name="image" type="file" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                    data-val-cc-cvc="Please enter a valid security code" autocomplete="off" >
                                    <div class="ml-2 col-md-12">
                                        <img src="{{asset('assets/uploads/workshops')}}/{{$work->image}}" id="preview-image-before-upload" class="img-thumbnail" style="max-height:100px;">
                                    </div>

                            </div>
                        </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Subject Name:</label>
                                    <input id="cc-exp" name="subject" type="text" class="form-control cc-exp" value="{{$work->subject}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Enter Subject Name"
                                        autocomplete="cc-exp" required>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Batch Name:</label>
                                    <input id="cc-exp" name="batch" type="text" class="form-control cc-exp" value="{{$work->batch}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Enter Batch Name"
                                        autocomplete="cc-exp" required>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Batch Starts From:</label>
                                    <input id="cc-exp" name="batch_from" type="date" class="form-control cc-exp" value="{{$work->batch_from}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Enter Batch Starts From"
                                        autocomplete="cc-exp" required>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Batch Starts To</label>
                                    <input id="cc-exp" name="batch_to" type="date" class="form-control cc-exp" value="{{$work->batch_to}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Enter Batch Starts To"
                                        autocomplete="cc-exp" required>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Course Days:</label>
                                    <input id="cc-exp" name="course_days" type="text" class="form-control cc-exp" value="{{$work->course_days}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Enter  Course Days"
                                        autocomplete="cc-exp" required>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Amount</label>
                                    <input id="cc-exp" name="amount" type="text" class="form-control cc-exp" value="{{$work->amount}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Enter Amount"
                                        autocomplete="cc-exp" required>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Course Timings</label>
                                    <input id="cc-exp" name="course_time" type="text" class="form-control cc-exp" value="{{$work->course_time}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Enter Course Timings" autocomplete="cc-exp" required>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Total Classes</label>
                                    <input id="cc-exp" name="total_classes" type="text" class="form-control cc-exp" value="{{$work->total_classes}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Enter Total Classes"
                                        autocomplete="cc-exp" required>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            
                            
                            
                            <div class="col-6">
                            </div>
                        
                        
                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" style="text-align: center;">
                                <i class="fa fa-plus"></i>&nbsp;
                                <span id="payment-button-amount" >Update Wrokshop </span>
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
