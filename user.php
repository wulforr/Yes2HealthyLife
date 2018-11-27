<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="user.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Yes 2 healthy life</title>
</head>
<body>
    <nav class="navbar">
            <ul>
                    <li><a href="dbms1.html">Home</a></li>
                    <li><a href="dbms.php">BMI Calculator</a></li>
                    <li><a href="dbms4.php">Two Foods</a></li>
                    <div class="navright">
                    
                    <?php
                    $host="localhost";
                    $username="root";
                    $password="";
                    $conn=mysqli_connect($host,$username,$password,"y2hl");
                    if(!$conn)
                    echo "Connection Unsuccessful";
                    $sql=mysqli_query($conn,"select flag from temp where id = 1");
                    $name=mysqli_fetch_array($sql,MYSQLI_ASSOC);
                    if($name["flag"]==0)
                    {
                        echo "<li><a href=\"dbms2.html\"><i class=\"fas fa-user\"></i> Login</a></li>";
                    echo "<li><a href=\"dbms3.html\"><i class=\"fas fa-user-plus\"></i> Signup</a></li>";

                    }
                    else
                    {
                        $sql1=mysqli_query($conn,"select username from temp where id = 1");
                        $name1=mysqli_fetch_array($sql1,MYSQLI_ASSOC);
                        echo "<li> <a class=\"active\" href=\"user page\" >".$name1["username"]."</a></li>";
                        echo "<li> <a href = \"facts2.php\">logout</a></li>";
                    }
                    ?>
                    </div>
                </ul>
                  
    </nav>
    <div class="container">
<h1 class="center">Account Details</h1>

<?php

$name2=$name1["username"];

$sql2=mysqli_query($conn,"select * from users where Name='$name2'");

$name1=mysqli_fetch_array($sql2,MYSQLI_ASSOC);

$name2=$name1["userid"];
$name3=$name1["Name"];
$name4=$name1["Email"];
$name5=$name1["Gender"];
echo "Userid : ".$name2."<br>";
echo "Name : ".$name3."<br>";
echo "Email : ".$name4."<br>";
echo "Gender : ".$name5."<br>";
$sql2=mysqli_query($conn,"select * from userbmi where userid='$name2'");
$name1=mysqli_fetch_array($sql2,MYSQLI_ASSOC);
if($name1!=NULL)
{
    echo "Your most recent bmi are:<br>";
$sql2=mysqli_query($conn,"select * from userbmi where userid='$name2' order by date_time desc limit 3");
while($name1=mysqli_fetch_array($sql2,MYSQLI_ASSOC))
{
echo $name1["bmi"]."<br>";
}
}
?>
</div>
</body>
</html>