<?php
$allItems = scandir(".");
$toHide = array('.', '..', 'index.php', 'test2.php', '.index.php.swp', 'remove.php', '.list.php.swp', 'list.php', '.scan.sh.swp', 'scan.sh', 'scan2.sh', 'test.php','test.php.swp','.test.php.swp','upload.php','delete.php','delete_file.php','read.php');
$toShow = array_diff($allItems, $toHide);
$unlink = unlink(); //delete file
$hi = filemtime($oneItem);

foreach ($toShow as $oneItem) {
    echo  "<center><a href='$oneItem'>$oneItem     $hi  </a><center><br>";
    echo $hi;
}

?>


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
.button2 {
  background-color: #ff0000; /* Red */
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
.button3  {
  background-color: #ffcc00; /* yellow */
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


.button1:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}

.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.button3:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

</style>


<html>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<center><h1>Main Scanning page<h1><center><br>


<body style="background-color:#d2e0e0;">
<a href="test.php" target="_self">

 <center><center>

<button class="button button1">Click For Scan Page</button>

<br>
<div>
<a href="delete.php" target="_self">
<button class="button button2">Click to Delete a File</button>
</div>

<div>
<a href="upload.php" target="_self">
<button class="button button3">Click to upload a File</button>
</div>




</body>

</html>
