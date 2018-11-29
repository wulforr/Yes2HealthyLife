<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="dbms4.css">
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
                    <li><a href="dbms1.php">Home</a></li>
                    <li><a href="dbms.php">BMI Calculator</a></li>
                    <li><a class="active" href="dbms4.php">Two Foods</a></li>
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
    <div class="container">    
    <h1 class="center">Twofoods</h1>
    <form method="POST" action="twofoods.php" class="center">
        <select name="type" id="type">
            <option value="fruit">Fruit</option>
            <option value="vegetables">Vegetable</option>
            <option value="other">Other</option>
            </select>&nbsp;&nbsp;
            <select name="type1" id="type1">
            <option value="fruit">Fruit</option>
            <option value="vegetables">Vegetable</option>
            <option value="other">Other</option>
            </select>            <br>
        <input type="text" name="food1" placeholder="Enter food item">&nbsp;&nbsp;<input type="text" name="food2" placeholder="Enter another food item"><br><br>
        <input type="submit" value="Compare!">
    </form>
</div>

</body>
</html>