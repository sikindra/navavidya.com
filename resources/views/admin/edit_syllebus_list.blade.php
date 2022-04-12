@extends('admin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">update syllebus</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                @foreach ($syl as $list)
                <a href="{{asset('admin')}}/syllebus_list/{{$list->chapter_id}}" style="color: white"> <i class="zmdi zmdi-plus"></i> Bake</a></button>
        </div>
    </div>
</div>
<div class="container-fluid" style="margin-top: 20px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">update syllebus</div>
                <div class="card-body">
                    
                    <form action="{{asset('admin/update_syllebus')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                        
                            <div class="col-6">
                                <div class="form-group">
                                   
                        
                        
                                    
                                    <input type="hidden" value="{{$list->syllbus_id}}" name="syllbus_id">
                                   
                                    <label for="cc-exp" class="control-label mb-1">Chapter Number:</label>
                                    <input id="cc-exp" name="topic_id" type="text" class="form-control cc-exp" value="{{$list->topic_id}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Chapter Number"
                                        autocomplete="cc-exp" required>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Topic Name:</label>
                                    <textarea name="topic_name" id="textarea-input" rows="9" placeholder="Content..." class="form-control" required>{{$list->topic_name}}</textarea>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="x_card_code" class="control-label mb-1">PDF File</label>
                                <p>{{$list->pdf_file}}</p>
                                <div class="input-group">
                                    
                                    <input id="{{$list->pdf_file}}" name="pdf_file" type="file" accept="pdf/*" class="form-control cc-cvc" value="{{$list->pdf_file}}" data-val="true" data-val-required="Please enter the security code"
                                        data-val-cc-cvc="Please enter a valid security code" autocomplete="off">
                                       
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                   
                        
                        
                                    
                                    
                                    <label for="cc-exp" class="control-label mb-1">Video Link</label>
                                    <input id="cc-exp" name="video_link" type="text" class="form-control cc-exp" value="{{$list->video_link}}" data-val="true" data-val-required="Please enter the card expiration"
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
                                                        @if ($list->sub_topic == '1')
                                                        <input type="hidden" id="doc" name="sub_topic" value="0">
                                                        <input type="checkbox" id="doc" name="sub_topic" value="1" checked>   
                                                        @else
                                                        <input type="hidden" id="doc" name="sub_topic" value="0">
                                                        <input type="checkbox" id="doc" name="sub_topic" value="1" >    
                                                        @endif
                                                        
                                                        
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
                                <span id="payment-button-amount">update topic</span>
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