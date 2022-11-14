<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$upLname = $_POST['upLname'];
         //$upLname = $_SESSION['cus_Lname'];
		$upFname = $_POST['upFname'];
        //if($upFname == null)$upFname = $_SESSION['cus_Fname'];
		$uppw = $_POST['uppw'];
        //if($uppw == null)$uppw = $_SESSION['cus_password'];
		$uppw2 = $_POST['uppw2'];
        //if($uppw2 == null)$uppw = $uppw2;
		$upemail = $_POST['upemail'];
        //if($upemail == null)$upemail = $_SESSION['cus_email'];
		$upphone = $_POST['upphone'];
        //if($upphone == null)$upphone = $_SESSION['cus_phone'];
        $user_id = $_SESSION['cus_id'];

		if( $user_id != null)
		{
			$query = "UPDATE customers SET cus_Lname = '$upLname', cus_Fname = '$upFname', cus_password = '$uppw', cus_email = '$upemail', cus_phone = '$upphone' WHERE cus_id = '$user_id'";

			if(mysqli_query($con, $query))
			{
				echo '更新成功!';
				echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
			}
			else
			{
				echo '更新失敗!';
				echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
			}
		}
		else
		{
			echo '您無權限觀看此頁面!';
			echo "Please enter some valid information!";
			echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
		}
	}
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<head>
	<title>更新資料</title>
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
		width: 100%;
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
			<div style="font-size: 20px;margin: 10px;color: white;">更新會員資料</div>
			<input id="text" type="text" name="upLname" placeholder = "姓氏">
			<input id="text" type="text" name="upFname" placeholder = "名字"><br><br>
			<input id="text" type="email" name="upemail"  placeholder = "name@example.com"><br><br>
			<input id="text" type="text" name="upphone" placeholder="電話號碼"><br><br>
			<input id="text" type="password" name="uppw" autocomplete="off" placeholder="密碼">
			<input id="text" type="password" name="uppw2" autocomplete="off" placeholder="確認密碼">	<br><br>

			<input id="button" type="submit" value="確定更新"><br><br>
		</form>
	</div>
</body>
</html>