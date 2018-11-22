<?php
$host="localhost";
$username="root";
$password="";
$conn=mysqli_connect($host,$username,$password,"y2hl");
if(!$conn)
echo "Connection Unsuccessful";
$uname=$_POST["uname"];
$pass=$_POST["pass"];
$sql1=mysqli_query($conn,"select Name from users where Name='$uname' and Password='$pass'");
if(!$sql1)
echo "Username not found";
else {
    $name=mysqli_fetch_array($sql1,MYSQLI_ASSOC);
echo "hello ".$name["Name"];
}
?>