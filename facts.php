<html>
    <head>
        <title>
factpage</title>
<link rel="stylesheet" href="fact.css">
</head>
<body>
    



<?php


$host="localhost";
$username="root";
$password="";
$conn=mysqli_connect($host,$username,$password,"y2hl");
if(!$conn)
echo "Connection Unsuccessful";
$uname=$_POST["uname"];
$pass=$_POST["pass"];
$sql1=mysqli_query($conn,"select * from users where Name='$uname' and Password='$pass'");
$name=mysqli_fetch_array($sql1,MYSQLI_ASSOC);
if($name["Name"]==NULL)
{
    echo "<div class=\"center\">";
echo "Username or password incorrect<br>";
echo "<a href=\"dbms2.html\">Login again</a><br>";
echo "<a href=\"dbms3.html\">Please Sign up First</a>";
echo "</div>";
}
else {
    $sql1=mysqli_query($conn,"update temp set username='$uname',flag = '1' where id=1");
    /*echo "<h1 class=\"center\">Some fun facts</h1>";
    $random = rand(1,10);
    $sql1=mysqli_query($conn,"select fact from facts where foodid = '$random' ");
    $funfact=mysqli_fetch_array($sql1,MYSQLI_ASSOC);
    echo "<h2>An Amazing fact : ".$funfact["fact"]."</h2>";
    echo "<a href=\"dbms1.php\" class=\"center\">click to continue</a>";*/
}


?>
<script>
    window.location.href="dbms1.php";
    </script>


</body>
</html>