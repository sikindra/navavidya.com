@extends('superadmin/layout')

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
                    
                    <form action="{{asset('superadmin/syllebus_insert')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                        @foreach ($addsyl as $list)
                            <div class="col-6">
                                <div class="form-group">
                                   
                        
                        
                                    
                                    <input type="hidden" value="{{$list->chapter_id}}" name="chapter_id">
                                    @endforeach
                                    <label for="cc-exp" class="control-label mb-1">Chapter Number:</label>
                                    <input id="cc-exp" name="topic_id" type="text" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Chapter Number"
                                        autocomplete="cc-exp" required>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Topic Name:</label>
                                    <textarea name="topic_name" id="textarea-input" rows="9" placeholder="Content..." class="form-control" required></textarea>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="x_card_code" class="control-label mb-1">PDF File</label>
                                <div class="input-group">
                                    <input id="image" name="pdf_file" type="file" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                        data-val-cc-cvc="Please enter a valid security code" autocomplete="off">
                                        @error('pdf_file')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                   
                        
                        
                                    
                                    
                                    <label for="cc-exp" class="control-label mb-1">Video Link</label>
                                    <input id="cc-exp" name="video_link" type="text" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="video links"
                                        autocomplete="cc-exp" required>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="col-6" >
                                <div class="form-group">
                                    
                                            <div style="display:flex">
                                                <div class="form-check form-check-radio m-2">
                                                    <label class="form-check-label">
                                                        <input type="hidden" id="doc" name= "sub_topic" value="0">
                                                        <input type="checkbox" id="doc" name= "sub_topic" value="1" >
                                                        
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
                                <span id="payment-button-amount">save topic</span>
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