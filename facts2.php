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
$sql1=mysqli_query($conn,"update temp set flag = '0' where id=1");
    echo "<h1 class=\"center\">Some fun facts</h1>";
    $random = rand(1,10);
    $sql1=mysqli_query($conn,"select fact from facts where foodid = '$random' ");
    $funfact=mysqli_fetch_array($sql1,MYSQLI_ASSOC);
    echo "<h2>An Amazing fact : ".$funfact["fact"]."</h2>";
    echo "<a href=\"dbms1.php\">click to continue</a>";
    ?>

    <script>
    window.location.href="dbms1.php";
    </script>
    </body>
    </html>