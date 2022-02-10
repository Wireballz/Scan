<?php
$filepath =  '/scan'; // The place the files will be uploaded to.
$path = $_SERVER['DOCUMENT_ROOT'] . $filepath;
if(empty($_GET['file']))
  exit();
$file = str_replace(array('/', '..'), '', $_GET['file']);
$filePath = realpath($path.$file);
if($filePath !== FALSE)
  unlink($filePath);
?>
