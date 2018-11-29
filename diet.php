<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="diet.css">
    <script src="js/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="animate.css">
    <title>Yes 2 healthy life</title>
</head>
<body>
    <nav class="navbar">
            <ul>
                    <li><a class="active" href="dbms1.php">Home</a></li>
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
                        echo "<li> <a href=\"user.php\" >".$name1["username"]."</a></li>";
                        echo "<li> <a href = \"facts2.php\">logout</a></li>";
                    }
                    ?>
                    </div>
                </ul>
                  
    </nav>

<div class="container">
<?php
$sql=mysqli_query($conn,"select flag from temp where id = 1");
$name=mysqli_fetch_array($sql,MYSQLI_ASSOC);
if($name["flag"]==0)
{
    echo "You need to login first to view a diet plan";
}
else
{
$sql1=mysqli_query($conn,"select username from temp where id = 1");
$name1=mysqli_fetch_array($sql1,MYSQLI_ASSOC);
$name2=$name1["username"];
$sql2=mysqli_query($conn,"select * from users where Name='$name2'");
$name1=mysqli_fetch_array($sql2,MYSQLI_ASSOC);
$var=$name1["userid"];
$sql2=mysqli_query($conn,"select * from userbmi where userid='$var'");
$name1=mysqli_fetch_array($sql2,MYSQLI_ASSOC);
if($name1==NULL)
{
    echo "You need to save your bmi first.";
}
else{
echo "Your most recent bmi is:";
$sql2=mysqli_query($conn,"select * from userbmi where userid='$var' order by date_time desc limit 1");
$name1=mysqli_fetch_array($sql2,MYSQLI_ASSOC);
echo $name1["bmi"]."<br>";
$var1=$name1["bmi"];
echo "Food items to include in your diet are:<br>";
if($var1<18.5)
{
    $temp1=67;
    $temp2=100;
    $veg1=40;
    $veg2=150;
    $oth1=150;
    $oth2=750;
}
elseif($var1>18.5 && $var1<25)
{
$temp1=50;
$temp2=67;
$veg1=21;
$veg2=40;
$oth1=112;
$oth2=150;
}
else
{
$temp1=25;
$temp2=50;
$veg1=15;
$veg2=21;
$oth1=50;
$oth2=112;
}
$i=0;
echo "<div class=\"container\">";
echo "<div class=\"grid-3\">";
$sql2=mysqli_query($conn,"select * from fruit where calories>$temp1 and calories<$temp2");
while($name1=mysqli_fetch_array($sql2,MYSQLI_ASSOC))
{
    echo "<div class=\"center\">";
echo "<img src=\"".$name1["image"]."\">";
echo "<p>".$name1["foodname"]."</p>";
echo "</div>";
}
echo "</div>";
echo "<div class=\"grid-3\">";
$sql2=mysqli_query($conn,"select * from vegetables where calories>$veg1 and calories<$veg2");
while($name1=mysqli_fetch_array($sql2,MYSQLI_ASSOC))
{
echo "<div class=\"center\">";
echo "<img src=\"".$name1["image"]."\">";
echo "<p>".$name1["foodname"]."</p>";
echo "</div>";
}
echo "</div>";
echo "<div class=\"grid-3\">";
$sql2=mysqli_query($conn,"select * from other where calories>$oth1 and calories<$oth2");
while($name1=mysqli_fetch_array($sql2,MYSQLI_ASSOC))
{
    echo "<div class=\"center\">";
echo "<img src=\"".$name1["image"]."\">";
echo "<p>".$name1["foodname"]."</p>";
echo "</div>";

}
echo"</div>";
echo"</div>";
}

}
?>

</div>
