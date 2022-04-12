@extends('admin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Add Chapter</h2>
            
        </div>
    </div>
</div>
<div class="container-fluid" style="margin-top: 20px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Add Chapter</div>
                <div class="card-body">
                    
                    <form action="{{asset('admin/chapter_insert')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                        
                            <div class="col-6">
                                <div class="form-group">
                                    @foreach ($course as $list)
                        
                        
                                    <input type="hidden" name="level_id" value="{{$list->level_id}}">
                                    @endforeach
                                    <label for="cc-exp" class="control-label mb-1">Chapter Number:</label>
                                    <input id="cc-exp" name="chapter_num" type="number" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Chapter Number"
                                        autocomplete="cc-exp" required>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Chapter Name:</label>
                                    <input id="cc-exp" name="chapter_name" type="text" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Chapter Name"
                                        autocomplete="cc-exp" required>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6" >
                                <div class="form-group">
                                    
                                            <div style="display:flex">
                                                <div class="form-check form-check-radio m-2">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="sub_topic" id="exampleRadios1" value="1" checked>
                                                        <span class="form-check-sign"></span>
                                                        Is this have sub topic
                                                    </label>
                                                </div>
                                                
                                            </div>
                                </div>
                            </div>
                            <div class="col-6" >
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