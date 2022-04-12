@extends('superadmin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Student Report</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                <a href="course_list" style="color: white"> <i class="zmdi zmdi-plus"></i> Bake </a></button>
        </div>
    </div>
</div>
<div class="container-fluid" style="margin-top: 20px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Student Report </div>
                <div class="card-body">
                    
                     <form id="frmRegistration" action="#">
                      
                    <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Course Category :</label>
                                    <select id="cat" name="cat" class="form-control-sm form-control">
                                        <option value="" >select Category</option>
                                        @foreach ($category as $key => $cat)
                                        <option value="{{$cat->id}}" >{{$cat->names}}</option>
                                         @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Subject:</label>
                                    <select name="sub" id="sub" class="form-control-sm form-control">
                                        
                                            <option value="" >select Subject</option>
                                        
                                    </select>
                                </div>
                            </div>
                            
                       
                        <div>
                            <button class="btn btn-lg btn-info btn-block" type="button"  onclick="check_student_details('')"><i class="fa fa-plus"></i>&nbsp;
                                <span >filter</span></button>
                             <p id="order_place_msg" style="color: red;">
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
</div>





    @endsection

