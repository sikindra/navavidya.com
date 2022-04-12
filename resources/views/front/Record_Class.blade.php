@extends('front/layout')

@section('container')
<style>
    .filterDiv {
      float: left;
      width: 100%;
      display: none;
      background: #47a6b9;
      
    }
    
    .show {
      display: block;
      
    }
    
    .container {
      margin-top: 20px;
      overflow: hidden;
    }
    
    /* Style the buttons */
  
    
   

.btn1 {
    display: inline-block;
    position: relative;
    overflow: hidden;
    background-color: #fffefe;
    border-color: transparent;
    color: #000000;
    border-radius: 4px;
    font-size: 15px;
    font-weight: 700;
    height: 45px;
    line-height: 45px;
    padding: 0px 20px;
    border-width: 0;
    border-style: solid;
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    cursor: pointer;
    border: 1px solid #47a6b9;
}
    
    .btn1:hover {
      background-color: #47a6b9;
    }
    
    .btn1.active {
      background-color: #47a6b9;
      color: white;
    }
    
    
    </style>

<div class="section top-courses-section section-padding" style="background: #fff;">
        <div class="container">
            <h3 class="modal-title">Non-Academics : Non-Technical</h3>
            <div class="top-courses-wrapper">
               
                <div class="row">
                  
                    <div class="col-lg-12 col-md-12">
                        <div class="top-courses-filter" style="text-align: left;">
                            
                                @foreach ($lavel as $item)
                                <button class="btn1" onclick="filterSelection('{{$item->level_id}}')" >Level {{$item->level}}</button>
                                
                                @endforeach
                               
                                
                           
                        </div>
                    </div>  
                </div>
                <div class="top-courses-content-wrapper">
                    <div class="row grid">
                       
                        <div class="col-lg-12 col-sm-12 course-technology">
                            <!-- Single Courses Start -->
                            @foreach ($lavel as $item)
                            <div class="filterDiv {{$item->level_id}}" >
                            <div class="single-course" style="border-radius: 41px;">
                                <!-- Courses Image Start -->
                                <div class="section-title section-devider text-center" style="margin-top: 4px;">
                                    <h2 class="title">level {{$item->level}}</h2>
                                   
                                   
                                    
                                </div>
                                {!!$item->description!!}
                                <div class="row">
                                    <div class="col-lg-8 col-sm-12">
                                        <h3 class="title"></h3>
                                        {!!$item->Syllabus!!}
                                    </div>
                                    <div class="col-lg-4 col-sm-12">
                                        <img src="{{asset('')}}assets/uploads/courses_img/{{$item->level_img_file_name}}" alt="" style="width: 340px;  height: 200px;">
                                    </div>
                                </div>
                                <div class="courses-content" style="margin-bottom: 100px;">
                                    <div class="courses-author">
                                        
                                       <button class="btn btn-dark text-center" >Price:  {{$item->price}} </button>
                                       <br>
                                       
                                    </div>
                                    <button class="btn btn-light" style="float: right">EMI Based Payment Available</button>
                                    <br>
                                    <br>
                                    <form action="">
                                      <select id="course_id" name="course_id" style='display:none'>
                                         
                                            <option value="{{$item->course_id}}">{{$item->course_id}}</option>
                                         
                                        </select>
                                      </form>
                                     
                                   
                                   
                                    <a href="javascrippt:void(0)" onclick="add_to_cart1('{{$item->level_id}}','{{$item->level}}')" style="float: right"><input type="submit" id="btnPlaceOrder"  class="btn btn-warning float-right "  value="Join Now" /></a>
                                      
                                      <p id="order_place_msg" style="float: right; margin-right: -141px; margin-top: 52px;"></p>
                                     
                                  </form>
                                   
                                    
                                    
                                </div>
                               
                                

                            </div>
                            </div>
                            @endforeach
                            <!-- Single Courses End -->
                        </div>
                       
                        
                        
                    </div>

                </div>

                <!-- Courses Wrapper Start -->
                
                <!-- Courses Wrapper End -->
            </div>
        </div>
    </div>

    <form id="frmAddToCart1">
            
      <input type="hidden" id="plevel" name="plevel"/>
  
      
      <input type="hidden" id="blevel_id" name="blevel_id"/>
      <input type="hidden" id="pcourse_id" name="pcourse_id"/>           
      @csrf
    </form>
    
       
     <script>
     @foreach ($lavel1 as $item)    
    filterSelection("{{$item->level_id}}")
    @endforeach
        function filterSelection(c) {
          var x, i;
          x = document.getElementsByClassName("filterDiv");
          if (c == "all") c = "";
          for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
          }
        }
        
        function w3AddClass(element, name) {
          var i, arr1, arr2;
          arr1 = element.className.split(" ");
          arr2 = name.split(" ");
          for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
          }
        }
        
        function w3RemoveClass(element, name) {
          var i, arr1, arr2;
          arr1 = element.className.split(" ");
          arr2 = name.split(" ");
          for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
              arr1.splice(arr1.indexOf(arr2[i]), 1);     
            }
          }
          element.className = arr1.join(" ");
        }
        
        // Add active class to the current button (highlight it)
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
          btns[i].addEventListener("click", function(){
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
          });
        }
        </script>
@endsection