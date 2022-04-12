@extends('superadmin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Add Book Level</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                
                <a href="{{asset('superadmin/book_level/')}}" style="color: white"> <i class="zmdi zmdi-plus"></i>Bake</a></button>
                
        </div>
    </div>
</div>
<div class="container-fluid" style="margin-top: 20px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Add Book Level</div>
                <div class="card-body">
                   
                      
                   
                       
                   
                    <form id="add_book_level" action="{{asset('')}}superadmin/add_book_level/insert" method="post" novalidate="novalidate" enctype="multipart/form-data">
                        @csrf
                         
                    <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    
                                    <label  class="control-label mb-1">Book Title</label>
                                    
                                    <input id="name" name="name" type="text" required class="form-control cc-exp"   placeholder="Enter mode of education"
                                        >
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Book _level:</label>
                                    <select name="book_id" id="book_id" class="form-control-sm form-control" required>
                                        <option value="">Please select</option>
                                        @foreach($book as $row)
			                            <option value="{{$row->book_id }}"> {{$row->title}}</option>
			                            @endforeach
                                        
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Price</label>
                                    <input id="price" name="price" type="text" class="form-control cc-exp"  placeholder="Enter enter Price"
                                     required>
                                    
                                </div>
                            </div>
                        
                            
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Book Description:</label>
                                    <textarea name="book_des" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                                    
                                </div>
                            </div>
                            
                        
                            <div class="col-6" >
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Status:</label>
                                    <br>
                                            <div style="display:flex">
                                                <div class="form-check form-check-radio m-2">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="1" checked>
                                                        <span class="form-check-sign"></span>
                                                        Active
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-radio m-2">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="0" >
                                                        <span class="form-check-sign"></span>
                                                        Inactive
                                                    </label>
                                                </div>
                                            </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="x_card_code" class="control-label mb-1">Choose Image</label>
                                <div class="input-group">
                                    <input id="image" name="image" type="file" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                        data-val-cc-cvc="Please enter a valid security code" autocomplete="off" required>
                                        <div class="ml-2 col-md-12">
                                            <img src="{{asset('assets/uploads/books')}}" id="preview-image-before-upload" class="img-thumbnail" style="max-height:100px;">
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