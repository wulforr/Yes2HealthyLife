<?php

$myfile = fopen("user.txt","w") or die("Unable to open file");
$uname=$_POST["uname"];
fwrite($myfile,$uname);
fclose($myfile);
?>