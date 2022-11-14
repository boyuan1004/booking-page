
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../.././font/font_2099015_z5uhbhlgbqn/iconfont.css">
<html>
<form name="form" method="post" action="connect.php">
<head>
	<title>Login</title>
</head>
<body>
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
		width: 600px;
		padding: 20px;
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
    		background-color: lightblue;
    		color: white;
			border-bottom: 3px solid red;
 	 	}
		.topnav a.col{
            width:27.99999%;
        }
</style>
	

	<div id="box">
	<div class="topnav">
  		<a class="active col" href="login.php">登入</a>
  		<a class=" col" href="signup.php">註冊</a>
  		<a class=" col" href="forget_pw.php">忘記密碼</a>
	</div>
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">登入</div>
			<input id="text" type="text" name="id" placeholder = "身分證字號"><br><br>
			<input id="text" type="password" name="pw" placeholder = "請輸入密碼"><br><br>
			<input id="button" type="submit" value="Login"><br><br>

		</form>
	</div>
</body>
</html>
