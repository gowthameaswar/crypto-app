<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" type="x-icon" href="logo.jpg">
        <title>Login-Cryptex</title>
        <link rel="icon" type="image/png" href="images/cryptologo.png"/>
    </head>
        <?php
            // Connect to the database
            $host="localhost";
            $user="root";
            $password="";
            $connect=mysqli_connect($host,$user,$password,"crypto");
            $email=$_POST['email'];
            $pass=$_POST['pass'];
            $query = "SELECT * FROM register where email='$email'";
            $result = mysqli_query($connect,$query); 
            $row = mysqli_fetch_array($result);  
            if ($row["email"]==$email && $row["password"]==$pass) {
                setcookie("user_email", $email, time() + (86400 * 30), "/"); // Set a cookie that expires in 30 days
                $id = $row["id"];
                $query1 = "INSERT INTO current (cid) VALUES ($id)";
                mysqli_query($connect, $query1);
                header("Location: mainpage.php");
            } elseif ($row["email"]!=$email) {
                header("Location: login.php?error=2");
                exit;
            }else{
                header("Location: login.php?error=1");
            }                                   
            mysqli_close($connect)            
        ?>            
    </body>    
</html>