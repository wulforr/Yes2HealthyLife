<?php

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
$pass1=$_POST["confpass"];
$gender=$_POST["gender"];
if($pass!=$pass1)
{
    echo "passwords donot match";
    echo "<a href=\"dbms3.html\">Go back</a>";
}
else
{
$sql1=mysqli_query($conn,"insert into users(Name,Email,Password,Gender) values ('$uname','$email','$pass','$gender')");
if(!$sql1)
echo "Data updatation failed";
else
{
    $sql1=mysqli_query($conn,"update temp set username='$uname',flag = '1' where id=1");
    echo "<h1>Some fun facts</h1>";
    $random = rand(1,10);
    $sql2=mysqli_query($conn,"select fact from facts where foodid = '$random' ");
    $funfact=mysqli_fetch_array($sql2,MYSQLI_ASSOC);
    echo "<h2>An Amazing fact : ".$funfact["fact"]."</h2>";
    echo "<a href=\"dbms1.php\">click to continue</a>";
}
}
?>