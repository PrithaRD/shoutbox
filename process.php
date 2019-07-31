<?php
include 'database.php';
    
//Check if form is submitted
/* isset($_POST['submit'])) {
    $user = mysqli_escape_string($con, $_POST['user']);
    $message = mysqli_escape_string($con, $_POST['message']);
    
//Set timezone
date_default_timezone_get();
$time = date('h:i:s a', time());

//Validate input
if(!isset($user) || $user == '' || !isset($message) || $message =='') {
    $error = "Please fill in your name and a message";
    header("Location: index.php?error=".urlencode($error));
    exit();    
}
else{
    $query = "INSERT INTO shouts (user, message, time) VALUES ('$user','$message','$time')" ;
    if(!mysqli_query($con, $query)){
        die('Error:' .mysqli_error($con));
    }
    else{
        header("Location: index.php");
        exit();
    }
    
}

}  */

if(isset($_POST['user'])&& isset($_POST['message'])){
    $user = mysqli_real_escape_string($con, $_POST['user']);
    $message = mysqli_real_escape_string($con, $_POST['message']);
    //$date = mysqli_real_escape_string($con, $_POST['time']);
    
    //Set timezone
    date_default_timezone_set('Asia/Kolkata');
    $date = date('h:i:s', time());
    
    $query = "INSERT INTO shouts (user, message, time) VALUES ('$user', '$message', '$date')";  
    
    if(!mysqli_query($con, $query))
    {
        echo 'Error: '. mysqli_error($con);
    }
    else
    {
        echo '<li class="shout"><span>'. $date . '</span> - <strong> ' . $user . '</strong> - ' .  $message . '</li>';
        
    }
}
?>