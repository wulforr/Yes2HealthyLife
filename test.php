


<?php

if($_POST["hidden"]==1234)
{
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
    echo "<h1 class=\"center\">Some fun facts</h1>";
    $random = rand(1,10);
    $sql1=mysqli_query($conn,"select fact from facts where foodid = '$random' ");
    $funfact=mysqli_fetch_array($sql1,MYSQLI_ASSOC);
   /* echo "<h2>An Amazing fact : ".$funfact["fact"]."</h2>";
    echo "<a href=\"dbms1.php\" class=\"center\">click to continue</a>";
*/}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="dbms21.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Yes 2 Healthy Life</title>
</head>
<body>
        <nav class="navbar">
                <ul>
                        <li><a href="dbms1.php">Home</a></li>
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
                    <!--<li><a href="dbms2.html"><i class="fas fa-user"></i> Login</a></li>
                    <li><a href="dbms3.html"><i class="fas fa-user-plus"></i> Signup</a></li>
                    -->
                </div>
                </ul>
        </nav>
        <div class="pgsrt">
        <h1>Login</h1>
    <form action="test.php" method="POST" class="clsform"><br>
            <label for="uname"><strong>Username :</strong></label><br>
            <input type="text" name="uname" class="myform" ><br><br>
            <label for="pass"><strong>Password :</strong></label><br>
            <input type="password" name="pass" class="myform" ><br>
            <input type="hidden" name="hidden" value="1234">
            <input type="submit" id="loginbtn" value="Login">
    </form>
</div>
</body>
</html>