<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	#text{

		height: 50px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 800px;
		padding: 20px;
	}
	#box_profile{
		background-color: white;
		margin: auto;
		width: 300px;
		height:300px;
		padding: 20px;
	}
	.btn {
  		background-color: lightblue; 
  		border: none; 
  		color: white; 
		height: 23px;
  		padding: 12px 16px; 
  		font-size: 20px; 
  		cursor: pointer; 
	}
	.btn:hover {
  	background-color: RoyalBlue;
	}

</style>
<style>
		.topnav {
    		background-color: #333;
   			 overflow: hidden;
  		}
  		/* Style the links inside the navigation bar */
  		.topnav a {
    		float: left;
    		color: #f2f2f2;
    		text-align: center;
    		padding: 14px 16px;
    		text-decoration: none;
    		font-size: 17px;
			border-bottom: 3px solid transparent;
  		}
  
 		/* Change the color of links on hover */
  		.topnav a:hover {
    		background-color: #ddd;
    		color: black;
			border-bottom: 3px solid red;
 	 	}
  
  		/* Add a color to the active/current link */
  		.topnav a.active {
    		background-color: #333;
    		color: white;
			border-bottom: 3px solid red;
 	 	}
		.topnav a.col{
            width:19.5%;
        }
</style>
<style>
		.flip-card {
 			 background-color: transparent;
  				width: 300px;
  				height: 200px;
  				border: 1px solid #f1f1f1;
  				perspective: 1000px; /* Remove this if you don't want the 3D effect */
		}
	/* This container is needed to position the front and back side */
		.flip-card-inner {
  			position: relative;
  			width: 100%;
  			height: 100%;
  			text-align: center;
			transition: transform 0.8s;
  			transform-style: preserve-3d;
		}

	/* Do an horizontal flip when you move the mouse over the flip box container */
		.flip-card:hover .flip-card-inner {
  			transform: rotateY(180deg);
		}

	/* Position the front and back side */
		.flip-card-front, .flip-card-back {
  			position: absolute;
 			width: 100%;
  			height: 100%;
  			-webkit-backface-visibility: hidden; /* Safari */
  			backface-visibility: hidden;
		}

	/* Style the front side (fallback if image is missing) */
		.flip-card-front {
  			background-color: #bbb;
 			 color: black;
		}
	/* Style the back side */
		.flip-card-back {
  			background-color: dodgerblue;
  			color: white;
  			transform: rotateY(180deg);
		}

</style>
	
<head>
	<title>User</title>
</head>
<body>
	<div id="box">
		<div class="topnav">
			<a class="btn" href="home.php"><i class="fa fa-home"></i></a>
  			<a class="col" href="logout.php">??????</a>
  			<a class="col" href="security.php">??????????????????</a>
			<a class="col" href="home.php">??????</a>
  			<a class="col" href="forget_pw.php">??????????????????</a>
		</div>
		<form>
			<h2  style="margin: 10px;color: white;">?????? <?php echo $user_data['cus_Lname']; ?><?php echo $user_data['cus_Fname'];?> ?????????????????????</h2>
			

			<div id ="box_profile" class="flip-card">
  				<div class="flip-card-inner">
   			 		<div class="flip-card-front">
      				<img src="img_avatar.png" alt="Avatar" style="width:300px;height:300px;">
    			</div>
    			<div class="flip-card-back">
      				<h1>User: <?php echo $user_data['cus_Lname']; ?><?php echo $user_data['cus_Fname'];?></h1>
      				<p>ID: <?php echo $user_data['cus_id'];?></p>
      				<p>Email: <?php echo $user_data['cus_email'];?></p>
					<p>Phone: <?php echo $user_data['cus_phone'];?></p>
    			</div>
  				</div>
			</div>
		</form>
	<div>

	




</body>
</html>