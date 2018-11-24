<?php
$unameerr = $emailerr = $gendererr = $passerr = "";
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
$gender=$_POST["gender"];
$sql1=mysqli_query($conn,"insert into users values ('$uname','$email','$pass','$gender')");
if(!$sql1)
echo "Data updatation failed";
?>



<?php
                    if(file_exists("user.txt"))
                    {
                        $myfile = fopen("user.txt","w") or die("Unable to open file");
                        <li> <a href="user page" >fgets($myfile);</a></li>
                        <li> <a href = \"logout\"></a></li>";
                    }
                    else{
                    echo "<li><a href=\"dbms2.html\"><i class=\"fas fa-user\"></i> Login</a></li>";
                    echo "<li><a href=\"dbms3.html\"><i class=\"fas fa-user-plus\"></i> Signup</a></li>";
                    }
                    ?>



                    <?php
                    if(file_exists("user.txt"))
                    {
                        $myfile = fopen("user.txt","w") or die("Unable to open file");
                        <li> <a href="user page" >fgets($myfile);</a></li>
                        <li> <a href = "logout"></a></li>
                    }
                    else{
                    <li><a href="dbms2.html"><i class="fas fa-user"></i> Login</a></li>
                    <li><a href="dbms3.html"><i class="fas fa-user-plus"></i> Signup</a></li>
                    }
                    ?>



                    <?php
                    if(file_exists("user.txt"))
                    {
                        $myfile = fopen("user.txt","w") or die("Unable to open file");
                        echo "<li> <a href=\"user page\" >".fgets($myfile)."</a></li>";
                        echo "<li> <a href = \"logout\"></a></li>";
                    }
                    else{
                    echo "<li><a href=\"dbms2.html\"><i class=\"fas fa-user\"></i> Login</a></li>";
                    echo "<li><a href=\"dbms3.html\"><i class=\"fas fa-user-plus\"></i> Signup</a></li>";
                    }
                    ?>