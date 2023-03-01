<?php
    // Connect to the database
    $host="localhost";
    $user="root";
    $password="";
    $connect=mysqli_connect($host,$user,$password,"crypto");

    // Get the current user's id
    $query = "SELECT cid FROM current";
    $result = mysqli_query($connect,$query); 
    $row = mysqli_fetch_array($result);
    $current_id = $row['cid'];

    // Get the updated information
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Update the information in the register table
    $query = "UPDATE register SET name='$name', email='$email', phone = '$phone' WHERE id='$current_id'";
    mysqli_query($connect, $query);

    // Close the database connection
    mysqli_close($connect);

    // Redirect to the profile page
    header("Location: profile.php");
    exit;
?>
