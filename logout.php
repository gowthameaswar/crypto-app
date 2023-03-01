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
    
    // Delete the current user's id from the "current" table
    $query = "DELETE FROM current";
    mysqli_query($connect, $query);
    
    // Redirect to the login page
    header("Location: login.php");
    mysqli_close($connect);
    ?>
                
    </body>    
</html>