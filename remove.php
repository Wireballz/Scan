<?php

$file = ($_GET["file"]);
if (!unlink($file))
  {
  echo ("Error deleting $file");
  }
else
  {
  echo ("Deleted $file");
  }
?>

<meta http-equiv="refresh" content="0;url=delete.php">


