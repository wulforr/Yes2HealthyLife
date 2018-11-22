<?php
$unameerr = $emailerr = $gendererr = $passerr = "";
$uname = $email = $gender = $pass = "";
$host="localhost";
$username="root";
$password="";
$conn=mysqli_connect($host,$username,$password,"y2hl");
if(!$conn)
echo "Connection Unsuccessful";
$uname=$_POST["uname"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$gender=$_POST["gender"];
$sql1=mysqli_query($conn,"insert into users values ('$uname','$email','$pass','$gender')");
if(!$sql1)
echo "Data updatation failed";
?>