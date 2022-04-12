</div>
        <div class="modal" id="myModal1{{$item->course_id}}">
            <div class="modal-dialog modal-xl">
            <div class="modal-content">
        
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Select Mode of education of Your Choice</h4>
                <button  class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                
                <!-- Modal body -->

                
                <div class="modal-body">
                    <div class="row">
                        
                        <h1></h1>   
                        @foreach ($mode as $row)
                            
                        
                        <div class="col-lg-6 col-md-6 certificate-col" >
                            <a href="{{asset('')}}{{str_replace(" ","_",$row->name);}}/{{$item->course_id}}/{{$row->id}}"><img src="{{asset('')}}assets/uploads/courses_img/{{$row->image}}" alt="" style=" height: 300px;
                        width: 500px; border: 2px solid #ff6d34; border-radius:8px; " ></a>
                            <div class="certificate-item text-center" style="position: absolute;top: 47%;transform:translate(-50%,-50%);border: 2px solid #fff;border-radius:10px;width: 33%;background:rgba(0,0,0);background:rgb(0 0 0 / 61%);height: 174px;margin-left: 250px;" >
                                <a href="{{asset('')}}{{str_replace(" ","_",$row->name);}}/{{$item->course_id}}/{{$row->id}}">
                                <div class="certificate-content" >
                                
                                    <h3 class="title" style="color: #fff; margin-top:0px; ">{{$row->name}}</h3>
                                    <p style="color: #fff">{{$row->description}}</p>
                                    
                                </div>
                            </a>
                                
                                
                            </div>
                            <!-- Certificate Item End -->
                        </div>
                        @endforeach
                    </div>
                </div>
        
                <!-- Modal footer -->
                <div class="modal-footer">
                <button  class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
        
            </div>
            </div>
        </div>

        <div class="modal" id="myModal{{$item->course_id}}">
            <div class="modal-dialog modal-xl">
            <div class="modal-content">
          
                <!-- Modal Header -->
                <div class="modal-header">
                <h3 class="modal-title">Non-Academics : Non-Technical</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
          
                <!-- Modal body -->
                
                <div class="modal-body">
                    <h2 class="title" style="text-align:center">{{$item->course_id}} </h2>
                    <h4 class="text-danger">{{$item->course_name}}</h4>
                    
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="top-courses-filter" style="text-align: left;">
                                <ul>
                                <li data-filter=".7"><button style="border-radius: 8px; height: 44px; width: 97px; font-size: 17px;
                                ">Level : 1</button></li>
                                <li data-filter=".6"><button style="border-radius: 8px; height: 44px; width: 97px; font-size: 17px;
                                    ">Level : 1</button></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row ">
                            
                                <h4 class="text-danger" style="text-align: center">{{$item->course_name}}</h4>
                                <p>
                                    In Abacus Level-1 of 8 series, the basics concepts of counting numbers and being discussed and then proceeds to Abacus introduction, using Magical fingers and performing basic arithmetic calculations like addition and subtraction, representing multiples of numbers on abacus, performing addition and subtraction using Abacus methodology.
                                </p>
                                <div class="col-lg-6 col-md-6">
                                    <h2>Syllabus</h2>
                                    <h4 >  Chapter 1: INTRODUCTION </h4>
                                    <h4>  Chapter 2: REPRESENTING 1 TO 30 ON ABACUS</h4>
                                    <h4>   Chapter 3: ADDITION AND SUBTRACTION USING MAGICAL FINGERS</h4>
                                    <h4>  Chapter 4: ADDITION AND SUBTRACTION ON ABACUS</h4>
                                    <h4>  Chapter 5: ADDITION AND SUBTRACTION USING BOTH SMALL AND BIG FRIENDS</h4>
                                    <h4> Chapter 6: REPRESENTATION</h4>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <h4 >Chapter 1: INTRODUCTION </h4>
                                    <h4>   Chapter 2: REPRESENTING 1 TO 30 ON ABACUS</h4>
                                    <h4>   Chapter 3: ADDITION AND SUBTRACTION USING MAGICAL FINGERS</h4>
                                    <h4>  Chapter 4: ADDITION AND SUBTRACTION ON ABACUS</h4>
                                    <h4>  Chapter 5: ADDITION AND SUBTRACTION USING BOTH SMALL AND BIG FRIENDS</h4>
                                    <h4> Chapter 6: REPRESENTATION</h4>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                <button style="border-radius: 8px; height: 44px; width: 137px; font-size: 17px; margin-left: 20px; 
                                        ">Price:  2500 </button>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                        <button style="border-radius: 8px; height: 44px; width: 237px; font-size: 13px; margin-left: 20px; float:right;">EMI Based Payment Available</button>
                                
                            </div>
                        </div>
                    </div>
                    <div>
          
                
          
                        
                        
                    
                        
                    
                    
                </div>
          
                <!-- Modal footer -->
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            
            </div>
            </div>
          </div>