@extends('admin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Edit ModeList</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                <a href="{{asset('admin/mode_list')}}" style="color: white"> <i class="zmdi zmdi-plus"></i>Bake</a></button>
        </div>
    </div>
</div>
<div class="container-fluid" style="margin-top: 20px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Add ModeList </div>
                <div class="card-body">
                    @foreach ($mode as $item)
                    <form action="{{asset('')}}admin/edit/{{$item->id}}" method="post" novalidate="novalidate" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                      
                            
                        
                    <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Mode of Education Name:</label>
                                    <input name="id" type="hidden" value="{{$item->id}}">
                                    <input id="cc-exp" name="name" type="text" value="{{$item->name}}" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year" placeholder="Enter mode of education"
                                        autocomplete="cc-exp">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="x_card_code" class="control-label mb-1">Choose Image</label>
                                <div class="input-group">
                                    
                                    <input id="x_card_code" name="image" type="file" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                        data-val-cc-cvc="Please enter a valid security code" autocomplete="off">
                                        <div class="ml-2 col-md-12">
                                            <img src="{{asset('assets/uploads/courses_img')}}/{{$item->image}}" name="image" id="preview-image-before-upload" class="img-thumbnail" style="max-height:100px;">
                                        </div>

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Description:</label>
                                    <textarea name="description" id="textarea-input" rows="9" placeholder="Content..." class="form-control">{{$item->description}}</textarea>
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Select Content Format to display to Student::</label>
                                    <br>
                                    <div class="checkbox checkbox-success form-check-inline">
                                        
                                        @foreach ($mode as $key => $mode)
                                                        <input class="form-check-input" type="hidden" name="doc" id="exampleRadios1" value="{{$mode->doc}}" {{($mode->id == $mode->id)? 'checked' : '' }} checked>
                                                    
                                                        @if ($mode->doc == '1')
                                                        <div class="form-check form-check-radio m-2">
                                                            <input class="form-check-input" type="checkbox" name="doc" id="exampleRadios1" value="1" checked> PDF / Doc file
                                                        </div>
                                                         @else 
                                                        
                                                        <div class="form-check form-check-radio m-2">
                                                            <input class="form-check-input" type="checkbox" name="doc" id="exampleRadios1" value="1" > PDF / Doc file
                                                        </div>
                                                        @endif
                                    </div>
                                    <div class="checkbox checkbox-success form-check-inline">

                                        
                                        
                                      
                                                        <input class="form-check-input" type="hidden" name="video" id="exampleRadios1" value="{{$mode->video}}" {{($mode->id == $mode->id)? 'checked' : '' }} checked>
                                                    
                                                        @if ($mode->video == '1')
                                                        <div class="form-check form-check-radio m-2">
                                                            <input class="form-check-input" type="checkbox" name="video" id="exampleRadios1" value="1" checked> Video
                                                        </div>
                                                         @else 
                                                        
                                                        <div class="form-check form-check-radio m-2">
                                                            <input class="form-check-input" type="checkbox" name="video" id="exampleRadios1" value="1" > Video
                                                        </div>
                                                        @endif
                                      


                                    </div>
                                    <br>
                                </div>
                            </div>
                            <div class="col-6" >
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Status:</label>
                                    <br>
                                            <div style="display:flex">
                                                <div class="form-check form-check-radio m-2">
                                                    <label class="form-check-label">
                                                       
                                                        <input class="form-check-input" type="hidden" name="status" id="exampleRadios1" value="{{$mode->status}}" {{($mode->id == $mode->id)? 'checked' : '' }} checked>
                                                    </label>
                                                </div>
                                                        @if ($mode->status == 'A')
                                                        <div class="form-check form-check-radio m-2">
                                                            <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="A" checked> Active
                                                        </div>
                                                        <div class="form-check form-check-radio m-2">  
                                                            <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="i" > Inactive
                                                        </div> @else 
                                                        <div class="form-check form-check-radio m-2">
                                                            <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="A" > Active
                                                        </div>
                                                        <div class="form-check form-check-radio m-2">
                                                            <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="i" checked> Inactive
                                                        </div>
                                                        @endif
                                                        @endforeach     
                                                        
                                                               
                                                    
                                                
                                               
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
                        @endforeach
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<p id="demo"></p>
<p id="demo1"></p>
@endsection
 
<script>
    function myFunction() {
      var x = document.getElementById("doc").required;
      document.getElementById("demo").innerHTML = x;
    }
    function myFunction() {
      var x = document.getElementById("video").required;
      document.getElementById("demo1").innerHTML = x;
    }
    </script>