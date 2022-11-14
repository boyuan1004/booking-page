<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$Lname = $_POST['Lname'];
		$Fname = $_POST['Fname'];
		$pw = $_POST['pw'];
		$pw2 = $_POST['pw2'];
		$user_id = $_POST['user_id'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];

		if(!empty($Lname) && !empty($Fname) && !empty($pw) && !empty($pw2) && !empty($user_id) && !empty($email) 
		&& !empty($phone) && $pw == $pw2)
		{
			
				$query = "INSERT INTO customers (cus_Lname, cus_Fname, cus_id, cus_password, cus_email, cus_phone) VALUES ('$Lname','$Fname','$user_id', '$pw', '$email', '$phone')";

				if(mysqli_query($con, $query))
				{
					echo "新增成功!";
					echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
				}
				else
				{
					echo '新增失敗!';
					echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
				}
			
		}
		else
		{
			echo '您無權限觀看此頁面!';
			echo "Please enter some valid information!";
			echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
		}
	}
?>


<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<head>
	<title>Signup</title>
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

	#backbutton{
        padding: 10px;
		width: 100pw;
		color: white;
		background-color: lightblue;
		border: none;
    }

	#box{

		background-color: grey;
		margin: auto;
		width: 500px;
		height: 600px;
		padding: 20px;
	}

</style>

	<div id="box">
		<button id="backbutton" onclick="javascript:history.back();" value="返回到上一個頁面"><i class="fa fa-arrow-left" aria-hidden="true"></i> 回上一頁</button>
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>
			<input id="text" type="text" name="Lname" placeholder = "姓氏">
			<input id="text" type="text" name="Fname" placeholder = "名字"><br><br>
			<input id="text" type="text" maxlength="10" placeholder="身分證字號" name="user_id"><br><br>
			<input id="text" type="email" name="email"  placeholder = "name@example.com"><br><br>
			<input id="text" type="text" name="phone" placeholder="電話號碼"><br><br>
			<input id="text" type="password" name="pw" autocomplete="off" placeholder="密碼">
			<input id="text" type="password" name="pw2" autocomplete="off" placeholder="確認密碼">	<br><br>

			<input id="button" type="submit" value="Signup"><br><br>
		</form>
	</div>
</body>
</html>