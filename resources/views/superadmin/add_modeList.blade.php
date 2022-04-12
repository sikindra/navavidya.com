@extends('superadmin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Add Category</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                <a href="{{asset('superadmin/mode_list')}}" style="color: white"> <i class="zmdi zmdi-plus"></i>Bake</a></button>
        </div>
    </div>
</div>
<div class="container-fluid" style="margin-top: 20px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">  
                <div class="card-header">Add Category</div>
                <div class="card-body">
                    
                    <form id="mode" action="add/insert"  method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label  class="control-label mb-1">Mode of Education Name:</label>
                                    <input id="name" name="name" type="text" class="form-control cc-exp" placeholder="Enter mode of education" required>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="x_card_code" class="control-label mb-1">Choose Image</label>
                                <div class="input-group">
                                    <input id="image" name="image" type="file" class="form-control cc-exp""  required>
                                        <div class="ml-2 col-md-12">
                                            <img src="image.png" id="image" class="img-thumbnail" style="max-height:200px;">
                                        </div>

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="control-label mb-1">Description:</label>
                                    
                                    <textarea rows="4" name="description" cols="50" name="comment" id="description" class="form-control" required>
</textarea>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Select Content Format to display to Student::</label>
                                    <br>
                                    <div class="checkbox checkbox-success form-check-inline">
                                        <input type="hidden" id="doc" name= "doc" value="0">
                                        <input type="checkbox" id="doc" name= "doc" value="1" >
                                        <span for="doc1" class="ml-1">PDF / Doc file </span>
                                        </div>
                                        <div class="checkbox checkbox-success form-check-inline">
                                        <input type="hidden" id="doc" name= "video" value="0">
                                        <input type="checkbox" id="doc" name="video" value="1">
                                        <span for="video1" class="ml-1"> Video  </span>
                                    </div>
                                    <br>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Status:</label>
                                    <br>
                                            <div style="display:flex">
                                                <div class="form-check form-check-radio m-2">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="A" checked>
                                                        <span class="form-check-sign"></span>
                                                        Active
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-radio m-2">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="I" >
                                                        <span class="form-check-sign"></span>
                                                        Inactive
                                                    </label>
                                                </div>
                                            </div>
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