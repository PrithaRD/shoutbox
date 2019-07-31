<?php

//Connect to MySql
$con = mysqli_connect("localhost", "root", "root", "shoutit");

//Test Connection
if(mysqli_connect_errno()){
	echo "Failed to connect to database".mysqli_connect_error();
}

?>