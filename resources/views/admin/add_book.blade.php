@extends('admin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Add Book </h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                
                <a href="{{asset('admin/book_level/')}}" style="color: white"> <i class="zmdi zmdi-plus"></i>Bake</a></button>
                
        </div>
    </div>
</div>
<div class="container-fluid" style="margin-top: 20px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Add Book </div>
                <div class="card-body">
                   
                      
                   
                       
                   
                    <form id="add_book" action="{{asset('')}}admin/add_book/insert" method="post" novalidate="novalidate" enctype="multipart/form-data">
                        @csrf
                         
                    <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    
                                    <label  class="control-label mb-1">Book Title</label>
                                    
                                    <input id="title" name="title" type="text" class="form-control"   placeholder="Enter Book Title"
                                        required>
                                    
                                </div>
                            </div>
                            
                            
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Total Level / subjects No.</label>
                                    <input id="level" name="level" type="number" class="form-control cc-exp"  placeholder="1">
                                    
                                </div>
                            </div>
                        
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="control-label mb-1">Publisher Name</label>
                                    <input id="publisher" name="publisher" type="text" class="form-control cc-exp" >
                                    
                                </div>
                            </div>
                            
                        
                            
                            <div class="col-6">
                                <label for="x_card_code" class="control-label mb-1">Choose Image</label>
                                <div class="input-group">
                                    <input id="image" name="image" type="file" class="form-control cc-cvc" >
                                        <div class="ml-2 col-md-12">
                                            <img src="{{asset('assets/uploads/books')}}" id="preview-image-before-upload" class="img-thumbnail" style="max-height:100px;">
                                        </div>

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