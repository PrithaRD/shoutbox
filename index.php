<?php 
include 'database.php';


$query = "Select * from shouts order by id desc";
$result = mysqli_query($con, $query);

?>


<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8" />
	<title> SHOUT IT </title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
	</head>
	<body>
		<div id="container">
			<header> <h1> SHOUT IT! Shoutbox </h1> </header>
			<div id="shouts">
				<ul>
					<?php while($row = mysqli_fetch_assoc($result)):?>
					<li class="shout"><span> <?php echo $row['time'] ?> - </span><strong> <?php echo $row['user'] ?> </strong> - <?php echo $row['message'] ?> </li>
					<?php endwhile; ?> 
				</ul>
			</div>
			<div id="input">
            <?php //if(isset($_GET['error'])) : ?>
           <!-- <div class="error"> <?php //echo $_GET['error']; ?> </div> -->
             <?php //endif ; ?>
            
            
				<!-- <form method="post" action="process.php">  -->
                 <form>
					<input id="user" type="text" name="user" placeholder="Enter your name" />
					<input id="message" type="text" name="message" placeholder="Enter your message" />
					<br/>
					<input id="submit" class="shout-btn" type="submit" name="submit" value="Shout It Out" />
				</form> 
			</div>
		</div>
		
	</body>
</html>