<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="dbms1.css">
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


    <header class="showcase">
    <div class="content">
        <img src="images/logo.jpeg" class="logo" alt="food">
        <div class="title">
            Yes 2 Healthy Life
        </div>
        <div class="text">
            <!--Hi everyone!! lets talk about the most important aspect of our life that is our health.-->
            {Some quotes here which change every 2 sec using javascript}
        </div>
    </div>
    </header>



    <section class="services pad0">
    <div class="container grid-2 center pad0">
    <a href ="dbms.php" class="pad1 link">    
    <div class="pad0">
            <input type="hidden" id="hid1">
            <p class="pad1">If you wanna check your bmi click here.</p>
        </div>
                </a>
        <a href="diet.php" class="pad1 link">
        <div  class="pad0">
            <p class="pad1">If you want a diet plan which is curated specifically for you then no need to search more you have come to the right place. </p>
        </div>
                </a>
    </div>
    </section>


    <section class="about bg-light">
        <div class="container">
            <div class="grid-2">
                <div class="center">
                    <i class="fas fa-laptop-code fa-10x">
                    </i>
                </div>
                <div class="about1">
                    <h2>About Us</h2>
                    <p>We are a non profit organisation which works to create awareness among people about health and healthy food habits.</p>

                </div>
            </div>
        </div>
    </section>
</body>
</html>