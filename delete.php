<?php
    $toHide = array('.', '..', 'index.php', 'test2.php', '.index.php.swp', '.list.php.swp', 'list.php', '.scan.sh.swp', 'scan.sh', 'delete.php', 'test.php','test.php.swp','.delete.php.swp');
    // Define the full path to your folder from root
    $filepath =  '/scan'; // The place the files will be uploaded to.
    $path = $_SERVER['DOCUMENT_ROOT'] . $filepath;

    // Open the folder
    $dir_handle = @opendir($path) or die("Unable to open $path");

    // Loop through the files
    while ($file = readdir($dir_handle)) {

    if($file == "." || $file == ".." || $file =="remove.php" || $file == "delete.php" || $file == "read.php" || $file == "delete_file.php" || $file == "test.php" || $file == "index.php" || $file == "scan.sh" || $file == "upload.php" || $file == "list.php")

    continue;
    echo "<br><br><br><br>";
    echo "<a href=\"$file\">$file</a>	&nbsp; &nbsp;";
    echo "<button><a href=\"remove.php?file={$file}\">Delete</a></button>";
    echo "<br><br>";
    }
    // Close
    closedir($dir_handle);
?>

<body style="background-color:powderblue;">


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



<button onclick="document.location='/scan'">Home</button>


