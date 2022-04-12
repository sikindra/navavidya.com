@extends('superadmin/layout')

@section('container')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Student Report</h2>
            <button class="au-btn au-btn-icon au-btn--blue">
                <a href="{{asset('superadmin/payment_data')}}" style="color: white"> <i class="zmdi zmdi-plus"></i> Bake </a></button>
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
                            <button class="btn btn-lg btn-info btn-block" type="button"  onclick="check_payment_details('')"><i class="fa fa-plus"></i>&nbsp;
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
<div class="row m-t-30">
    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>Name</th>
                        
                        
                        <th>Course </th>
                        <th>Orders Id</th>
                        <th>Amount</th>
                        <th>Discount</th>
                    
                       
                        
                        <th>Bank Details</th>
                        <th>Orders status</th>
                       

                    </tr>
                </thead>
                <tbody>
                    @foreach($course_details as $data)
                     <tr>
                         
                        
                        
                        <td>{{$data->name}}</td>
                        
                        <td>{{$data->course_name}} ({{$data->level}})</td>
                        
                        <td>{{$data->orders_id}}</td>
                        <td>{{$data->price}}</td>
                        <td>{{$data->address1}}</td>
                        <td>{{$data->price-$data->coupon_value}}</td>
                        <td>{{$data->payment_status}}</td>
                        
                        
                          
                        
                        

                    </tr>
                    @endforeach
                   
                   
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>




    @endsection

