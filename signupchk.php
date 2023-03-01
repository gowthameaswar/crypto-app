<!doctype html>  
<html>  
      <head>  
           <title>SignUp-Cryptex</title>  
           <link rel="icon" type="image/png" href="images/cryptologo.png"/>
      </head>  
      <body>
      
<?php
$host="localhost";
$user="root";
$password="";
$connecto=mysqli_connect($host,$user,$password,"crypto");

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pass = $_POST['pass'];


$check_email = "SELECT * FROM register WHERE email='$email'";
$result = mysqli_query($connecto, $check_email);

if (mysqli_num_rows($result) > 0) {
      header("Location: signup.php?error=1");
      exit();
} else {
  $sql="INSERT INTO register (name, email, phone, password) VALUES ('$name', '$email', '$phone','$pass')";
  if (mysqli_query($connecto,$sql)) {
      echo "<script>alert('Successfully registered!!');window.location.href='login.php';</script>";
  } else {
      echo "<script>alert('Error: Could not insert data into the database.');window.location.href='signup.php';</script>";
      exit();
  }
}
?>
</body>
</html>