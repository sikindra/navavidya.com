@extends('admin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Add Index Pages</h2>
            
        </div>
    </div>
</div>

<div class="container-fluid" style="margin-top: 20px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Add Index Pages</div>
                <div class="card-body">
                    <div class="row">
                        
                            
                            
                           
                            <div class="col-6">
                                @foreach ($logo as $list)
                                <form name="add_index_img " id="add_index_img" method="post" action="{{asset('admin/banner_update')}}" enctype="multipart/form-data" class="blockquote blockquote-primary ">
                                    @csrf
                                    <div class="row col-md-12 ">
                                        <div class="form-group col-md-8 ">
                                            <label for="x_card_code" class="control-label mb-1">Logo</label>
                                           <div class="input-group">
                                            <input type="hidden" name="type" value="L">
                                            <input type="hidden" name="id" value="{{$list->id}}">
                                        <input id="image" name="img_name" type="file" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                        data-val-cc-cvc="Please enter a valid security code" autocomplete="off">
                                        <div class="ml-2 col-md-12">
                                            <img src="{{asset('assets/img/index_img')}}/{{$list->img_name}}" id="preview-image-before-upload" class="img-thumbnail" style="max-height:200px;">
                                        </div>

                                       </div>
                                         </div>
                                        <div class="col-md-4 text-right pt-4" style="margin-top: 19px;">
        
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
        
                                </form> 
                                @endforeach
                            </div>
                            <div class="col-6">
                                @foreach ($banner1 as $banner)
                                <form name="add_index_img " id="add_index_img" method="post" action="{{asset('admin/banner_update')}}" enctype="multipart/form-data" class="blockquote blockquote-primary ">
                                    @csrf 
                                    <div class="row col-md-12 ">
                                        <div class="form-group col-md-8 ">
                                            <label for="x_card_code" class="control-label mb-1">Slider 1</label>
                                           <div class="input-group">
                                            <input type="hidden" name="type" value="s1">
                                            <input type="hidden" name="id" value="{{$banner->id}}">
                                        <input id="image" name="img_name" type="file" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                        data-val-cc-cvc="Please enter a valid security code" autocomplete="off">
                                        <div class="ml-2 col-md-12">
                                            <img src="{{asset('assets/img/index_img')}}/{{$banner->img_name}}" id="preview-image-before-upload" class="img-thumbnail" style="max-height:200px;">
                                        </div>

                                       </div>
                                         </div>
                                                                                       
                                        <div class="col-md-4 text-right pt-4" style="margin-top: 19px;">
        
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
        
                                </form> 
                                @endforeach
                            </div>

                            <div class="col-6" >
                                @foreach ($banner2 as $banner2)
                                <form name="add_index_img " id="add_index_img" method="post" action="{{asset('admin/banner_update')}}" enctype="multipart/form-data" class="blockquote blockquote-primary ">
                                    @csrf
                                    <div class="row col-md-12 ">
                                        <div class="form-group col-md-8 ">
                                            <label for="x_card_code" class="control-label mb-1">Slider 2</label>
                                           <div class="input-group">
                                            <input type="hidden" name="type" value="s2">
                                            <input type="hidden" name="id" value="{{$banner2->id}}">
                                        <input id="image" name="img_name" type="file" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                        data-val-cc-cvc="Please enter a valid security code" autocomplete="off">
                                        <div class="ml-2 col-md-12">
                                            <img src="{{asset('assets/img/index_img')}}/{{$banner2->img_name}}" id="preview-image-before-upload" class="img-thumbnail" style="max-height:200px;">
                                        </div>

                                       </div>
                                         </div>
                                        <div class="col-md-4 text-right pt-4" style="margin-top: 19px;">
        
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
        
                                </form> 
                                @endforeach
                            </div>
                            <div class="col-6" >
                                @foreach ($banner3 as $banner3)
                                <form  method="post" action="{{asset('admin/banner_update')}}" enctype="multipart/form-data" >
                                    @csrf 
                                    <div class="row col-md-12 ">
                                        <div class="form-group col-md-8 ">
                                            <label for="x_card_code" class="control-label mb-1">Slider 3</label>
                                           <div class="input-group">
                                            <input type="hidden" name="type" value="s3">
                                            <input type="hidden" name="id" value="{{$banner3->id}}">
                                        <input id="image" name="img_name" type="file" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                        data-val-cc-cvc="Please enter a valid security code" autocomplete="off">
                                        <div class="ml-2 col-md-12">
                                            <img src="{{asset('assets/img/index_img')}}/{{$banner3->img_name}}" id="preview-image-before-upload" class="img-thumbnail" style="max-height:200px;">
                                        </div>

                                       </div>
                                         </div>
                                        <div class="col-md-4 text-right pt-4" style="margin-top: 19px;">
        
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
        
                                </form>
                                @endforeach 
                            </div>
                        
                        
                   
                   
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
 

@endsection