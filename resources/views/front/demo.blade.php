<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .filterDiv {
      float: left;
      background-color: #2196F3;
      color: #ffffff;
      width: 100px;
      line-height: 100px;
      text-align: center;
      margin: 2px;
      display: none;
    }
    
    .show {
      display: block;
    }
    
    .container {
      margin-top: 20px;
      overflow: hidden;
    }
    
    /* Style the buttons */
    .btn {
      border: none;
      outline: none;
      padding: 12px 16px;
      background-color: #f1f1f1;
      cursor: pointer;
    }
    
    .btn:hover {
      background-color: #ddd;
    }
    
    .btn.active {
      background-color: #666;
      color: white;
    }
    </style>
<body>
 <div>
    @foreach ($index as $item)
    <button class="btn " onclick="filterSelection('{{$item->course_id}}')">mode</button>
    @endforeach
     <button class="btn " onclick="filterSelection('1')">1</button>
    <button class="btn" onclick="filterSelection('2')">2</button>      
    <button class="btn" onclick="filterSelection('3')">3</button>   
    <button class="btn" onclick="filterSelection('4')">4</button>   
    <button class="btn" onclick="filterSelection('5')">5</button>   
    <button class="btn" onclick="filterSelection('6')">6</button>   
    <button class="btn" onclick="filterSelection('7')">7</button>   
    <button class="btn" onclick="filterSelection('8')">8</button> </div>  
  <div class="container">
    @foreach ($index as $item)
    <div class="filterDiv {{$item->course_id}}">
        <ul>
           <li>{{$item->course_name}}</li>
           <li>Bus</li>
           <li>Bike</li>
           <li>Schooter</li>
        </ul>
    </div>  
    @endforeach
     

 </div>   
   
 <script>
 @foreach ($index1 as $item)    
filterSelection(" {{$item->course_id}}")
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
    
    
</body>
</html>