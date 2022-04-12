<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nava vidya</title>
    <style>
        body{
            background-color: #F6F6F6; 
            margin: 0;
            padding: 0;
        }
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }
        .brand-section{
           background-color: #0d1033;
           padding: 10px 40px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .col-6{
            width: 50%;
            flex: 0 0 auto;
        }
        .text-white{
            color: #fff;
        }
        .company-details{
            float: right;
            text-align: right;
        }
        .body-section{
            padding: 16px;
            border: 1px solid gray;
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: center;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
    </style>
</head>
<body>

    <div class="container" style="padding-top: 150px;">
        <div class="brand-section">
            <div class="row">
                <div class="col-6">
                    <h1 class="text-white">Nava vidya</h1>
                </div>
                
            </div>
        </div>

        <div class="body-section">
            <div class="row">
                <div class="col-4">
                    <img src="{{asset('')}}assets1/images/logo1 (2).png" alt="" style="width: 200px;  background: white;">
                    
                </div>
                 @php
                        $totalAmt=0;
                        @endphp
                @foreach ($orders as $orders)
                <div class="col-4" style="margin-left: 156px;">
                    <h1>Students Details</h1>
                    <h3 class="sub-heading">Full Name :  {{$orders->name}}</h3>
                    <h3 class="sub-heading">Address :  {{$orders->address1}}</h3>
                    <h3 class="sub-heading">Email Address : {{$orders->email}} </h3>  
                    <h3 class="sub-heading">Phone Number :  {{$orders->mobile}}</h3>
                    <h3 class="sub-heading">City,State,Pincode :  {{$orders->city}}, {{$orders->state}}, {{$orders->pincode}}</h3>
                </div>
                <div class="col-4" style="margin-left: 156px;">
                    <h1>Payment Details</h1>
                    <h3 class="heading">Invoice No. : {{$orders->id}} </h3>
                    <h3 class="sub-heading">Payment ID : {{$orders->txn_id}} </h3>
                    <h3 class="sub-heading">Translation ID : {{$orders->payment_id}} </h3>
                    <h3 class="sub-heading">Order Date : {{$orders->added_on}} </h3>
                    
                </div>
                @endforeach
            </div>
        </div>

         <div class="body-section">
            <h3 class="heading">Ordered Items</h3>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>Course Name</th>
                        <th class="w-20">Course Level</th>
                        <th class="w-20">Amount</th>
                        
                        
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @php
                        $id = $orders->id;
                        $result['course1']=DB::table('course_details')
                             ->where(['orders_id'=>$id])
                             ->leftJoin('course_levels','course_levels.level_id','=','course_details.products_attr_id')
                             ->leftJoin('courses','courses.course_id','=','course_details.product_id')
                             ->select('course_levels.level','course_levels.level_img_file_name','course_levels.level_syllabus_file_name','course_levels.sample_video_file_name','course_levels.price','courses.course_name','course_levels.level_id as attr_id','courses.course_id as pid')
                          ->get();
                          
                          @endphp
                          @foreach($result['course1'] as $course1)
                          @php
                          
                        $totalAmt=$totalAmt+($course1->price);
                        @endphp
                        <td>{{$course1->course_name}}</td>
                        <td>{{$course1->level}}</td>
                        <td>{{$course1->price}}.00</td>
                        
                       
                        
                    </tr>
                    
                    @endforeach
                    <tr>
                        
                            <?php
                            if($orders){
                                 echo '<td colspan="2" class="text-right">Discount:</td>';
                                 $totalAmt1=$orders->coupon_value;
                                 echo'<td>'.$totalAmt1.'.00</td>';
                             }
                            ?>
                            
                             
                    </tr>
                    <tr>
                        <td  colspan="2" class="text-right">IGST: (0%)</td>
                        <td>0.00</td>
                    </tr>
                    <tr>
                    <?php
                            if($orders){
                                 echo '<td colspan="2" class="text-right">Total:</td>';
                                 $totalAmt=$totalAmt-$orders->coupon_value;
                                 echo'<td>'.$totalAmt.'.00</td>';
                             }
                            ?>
                    </tr>
                   
                    
                </tbody>
            </table>
            <br>
             <h3 class="heading">Payment Status: {{$orders->payment_status}}</h3>
            <h3 class="heading">Payment Mode: {{$orders->payment_type}} </h3>
            </div>
        <div class="body-section">
            <p>&copy; Copyright 2022 - Nava vision. All rights reserved. 
                <a href="https://navavidya.com/" class="float-right">www.navavidya.com</a>
            </p>
        </div>      
    </div>      

</body>
</html>