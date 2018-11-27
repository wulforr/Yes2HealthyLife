<?php

$host="localhost";
$username="root";
$password="";
$conn=mysqli_connect($host,$username,$password,"y2hl");
if(!$conn)
echo "Connection Unsuccessful";

$var=$_POST["uname"];

$var1=$_POST["height"];
$var2=$_POST["weight"];
$var3=($var2)/($var1*$var1)*10000;
$sql1=mysqli_query($conn,"select username from temp where id = 1");
$name1=mysqli_fetch_array($sql1,MYSQLI_ASSOC);
$name2=$name1["username"];

$sql2=mysqli_query($conn,"select * from users where Name='$name2'");

$name1=mysqli_fetch_array($sql2,MYSQLI_ASSOC);

$name2=$name1["userid"];
$name3="current_timestamp";
$sql1=mysqli_query($conn,"insert into userbmi values($name2,$var3,$name3)");




?>
<html>
    <head>
        <title>
            Yes 2 Healthy Life
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" href="dbms.css">
    </head>
    <body>
            <nav class="navbar">
                    <ul>
                           <li><a href="dbms1.php">Home</a></li>
                           <li><a class="active" href="dbms.php">BMI Calculator</a></li>
                            <li><a href="dbms4.php">Two Foods</a></li>
                            <div class="navright">
                                <!--<li><a href="dbms2.html"><i class="fas fa-user"></i> Login</a></li>
                                <li><a href="dbms3.html"><i class="fas fa-user-plus"></i> Signup</a></li>
                                -->
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
              <div id="fpage" class="jumbotron">
                  <h1 class="bmi">BMI Calculator</h1>
                  <br>
                  <form method="POST" action="bmi.php" id="form2">
                      <label for="uname"><strong>Username :</strong></label>
                      <input type="text" id="uname" name="uname" class="myform" style="width:500px"><br>
                      <label for="height"><strong>Height :&emsp;&ensp;</strong></label>
                      <input type="text" id="height" name="height"  class="myform" style="width:500px"> Cm<br>
                      <label for="weight"><strong>Weight :&emsp;&ensp;</strong></label>
                      <input type="text" id="weight" name="weight" class="myform" style="width:500px" id="weight1"> Kg<br>
                      <input type="button" id="btn" value="calculate" onclick="calcbmi()">  
                      <input type="submit" id="btn1" value="Save">
                      
                  </form>
                  <span id="p1"></span>
                  <p>Your BMI has been saved.</p>
              </div>
              <div class="grid-2">
              <div>
              <h4>Check your BMI here:</h4>
              <img src="images/bmi1.jpg" id="image">
              </div>
              <div>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt corporis assumenda dolorum explicabo facilis earum labore laboriosam facere voluptate, enim maxime est ullam necessitatibus itaque iusto? Voluptatem, modi. Perferendis, deserunt?
              </div>
              </div>
        <script src="dbms.js"></script>
            </body>

</html>