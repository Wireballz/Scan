
<html>
<body>

<br>
<br>
<head>


<style>

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button1 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}


body {background-color: #ff9933;}

#myProgress {
  position: relative;
  width: 100%;
  height: 30px;
  background-color: #ddd;
}

#myBar {
  position: absolute;
  width: 10%;
  height: 100%;
  background-color: #4CAF50;
}

#label {
  text-align: center;
  line-height: 30px;
  color: white;
}

.container {
  height: 200px;
  position: relative;
  border: 0px solid yellow;
}

.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
</style>


<?php
if ($_GET['run']) {
  # This code will run if ?run=true is set.
  exec("/var/www/scan/scan.sh");
}
?>


<script>
         var txt = "Please Wait Now Scanning!";
         function Display1() {
            document.body.style.backgroundColor = "blue";
            document.write ("<center><p><br><br><br><br><br><br><br><br>" + txt.fontsize(30) + "</p><center>");
            document.body.style.backgroundColor = "lightblue";
            document.write ('<br>');
            window.location = '?run=true';
            setInterval(function() {window.location.reload();}, 90000);
            move();
         }

</script>


<script>
function move() {
  var elem = document.getElementById("myBar");
  var width = 10;
  var id = setInterval(frame, 100);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
    } else {
      width++;
      elem.style.width = width + '%';
      document.getElementById("label").innerHTML = width * 1  + '%';
    }
  }
}
</script>


   </head>
   <body>
      <form>
         <div class="container">
           <div class="center">
         <br>
           <h1><p>Click button to Start Scan</p></h1>
         <br>
         <input class="button button2"  type = "button" onclick = "Display1()" value = "Click To Scan">
         <br>
         <br>
         </div>

         </div>
      </form>
      </div>


<button onclick="document.location='/scan'">Home</button>


</body>


</html>
