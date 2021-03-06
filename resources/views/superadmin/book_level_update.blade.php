@extends('superadmin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Add Book Level</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                @foreach ($book_level as $book)
                <a href="{{asset('superadmin/book_level/')}}/{{$book->book_id}}" style="color: white"> <i class="zmdi zmdi-plus"></i>Bake</a></button>
                
        </div>
    </div>
</div>
<div class="container-fluid" style="margin-top: 20px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Add Book Level</div>
                <div class="card-body">
                   
                      
                   
                       
                   
                    <form action="{{asset('')}}superadmin/book_level/update/" method="post" novalidate="novalidate" enctype="multipart/form-data">
                        @csrf
                         
                    <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    
                                    <label for="cc-exp" class="control-label mb-1">Book Title</label>
                                    <input type="hidden" name="bk_evel_id" value="{{$book->bk_evel_id}}">
                                    <input id="cc-exp" name="name" type="text" class="form-control cc-exp" value="{{$book->name}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Enter mode of education"
                                        autocomplete="cc-exp">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Price</label>
                                    <input id="cc-exp" name="price" type="text" class="form-control cc-exp" value="{{$book->price}}" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Enter enter Price"
                                        autocomplete="cc-exp">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="x_card_code" class="control-label mb-1">Choose Image</label>
                                <div class="input-group">
                                    <input id="image" name="image" type="file" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                        data-val-cc-cvc="Please enter a valid security code" autocomplete="off">
                                        <div class="ml-2 col-md-12">
                                            <img src="{{asset('assets/uploads/books')}}/{{$book->image}}" id="preview-image-before-upload" class="img-thumbnail" style="max-height:100px;">
                                        </div>

                                </div>
                            </div>
                            
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Book Description:</label>
                                    <textarea name="book_des" id="textarea-input" rows="9" placeholder="Content..." class="form-control">{{$book->book_des}}</textarea>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            
                        
                           
                            <div class="col-6" >
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Status:</label>
                                    <br>
                                            <div style="display:flex">
                                                <div class="form-check form-check-radio m-2">
                                                    <label class="form-check-label">
                                                        
                                                        @foreach ($book_level as $key => $book)
                                                        <input class="form-check-input" type="hidden" name="status" id="exampleRadios1" value="{{$book->status}}" {{($book->bk_evel_id == $book->bk_evel_id)? 'checked' : '' }} checked>
                                                    </label>
                                                </div>
                                                        @if ($book->status == '1')
                                                        <div class="form-check form-check-radio m-2">
                                                            <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="1" checked> Active
                                                        </div>
                                                        <div class="form-check form-check-radio m-2">  
                                                            <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="0" > Inactive
                                                        </div> @else 
                                                        <div class="form-check form-check-radio m-2">
                                                            <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="1" > Active
                                                        </div>
                                                        <div class="form-check form-check-radio m-2">
                                                            <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="0" checked> Inactive
                                                        </div>
                                                        @endif
                                                        @endforeach
                                                               
                                                    
                                                
                                               
                                            </div>
                                           
                                </div>
                            </div>
                        
                        
                        <div>
                            
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <i class="fa fa-plus"></i>&nbsp;
                                <span id="payment-button-amount">Update</span>
                                <span id="payment-button-sending" style="display:none;">Sending???</span>
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
