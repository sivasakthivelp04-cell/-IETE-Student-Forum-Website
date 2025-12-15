<?php
    
$hostname="localhost:3306";
$username="ietebits_abhishek";
$password="iete@2017";

$database="ietebits_ietebits";

$dbConnected = mysqli_connect($hostname, $username, $password);
$dbSelected = mysqli_select_db($dbConnected, $database);
$dbSuccess = True;
if($dbConnected){
    
    if($dbSelected){
    
    }
    else{
        echo "<script>alert('We\'ve encountered an Error')</script>";
        $dbSuccess = False;
    }
}
else {
    echo "<script>alert('We\'ve encountered an Error')</script>";
}
if ($dbSuccess){
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    
    $query = "INSERT INTO `messages`(`First Name`, `Last Name`, `Email`, `Message`)";
    $query .= "VALUES ('$fname'";
    $query .=",'$lname'";
    $query .=",'$email'";
    $query .=",'$message'";
    $query .=")";
    $check = mysqli_query($dbConnected, $query);
    if($check){
        echo "<script>alert('Thank You For Messaging Us !');</script>";
        echo "<script> location.href='contact.php'; </script>";
    }
    else
     {
         echo "<script>alert('We\'ve encountered an Error, try again');</script>"
     }   
}






?>