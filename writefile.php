<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Btech CSE"; fwrite($myfile, $txt);
$txt = "Btech CSE"; fwrite($myfile, $txt); fclose($myfile);
?>

