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
    /*$name=mysqli_fetch_array($sql1,MYSQLI_ASSOC);
    echo "hello ".$name["Name"];
    $myfile = fopen("user.txt","w") or die("Unable to open file");
    $uname=$_POST["uname"];
    fwrite($myfile,$uname);*/
    $sql1=mysqli_query($conn,"update temp set username='$uname',flag = '1' where id=1");
    echo "<h1>Some fun facts</h1>";
    $random = rand(1,10);
    $sql1=mysqli_query($conn,"select fact from facts where foodid = '$random' ");
    $funfact=mysqli_fetch_array($sql1,MYSQLI_ASSOC);
    echo "<h2>An Amazing fact : ".$funfact["fact"]."</h2>";
    echo "<a href=\"dbms1.php\">click to continue</a>";
}


?>