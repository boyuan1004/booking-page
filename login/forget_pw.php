<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$chuser_id = $_POST['chuser_id'];
		$fgpw = $_POST['fgpw'];
		$fgpw2 = $_POST['fgpw2'];

		if($fgpw == $fgpw2 )
		{
            $sql = "SELECT * FROM customers where cus_id = '$chuser_id'";
            $result = mysqli_query($con,$sql);
            $row = @mysqli_fetch_row($result);
            echo "$row[1]";
			$query = "UPDATE customers SET  cus_password = '$fgpw' WHERE cus_id = '$row[1]'";

			if(mysqli_query($con, $query))
			{
				echo '修改密碼成功!';
				echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
			}
			else
			{
				echo '修改密碼失敗!';
				echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
			}
		}
		else
		{
			echo '密碼不同，請在確認一次 !!';
			echo '<meta http-equiv=REFRESH CONTENT=1;url=forget_pw.php>';
		}
	}
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<head>
	<title>忘記密碼</title>
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
        <button id= "backbutton" onclick="javascript:history.back();" value="返回到上一個頁面"><i class="fa fa-arrow-left" aria-hidden="true"></i> 回上一頁</button><br><br>
		<form method="post">
            <div style="font-size: 20px;margin: 10px;color: white;">忘記密碼</div>
            <input id="text" type="text" maxlength="10" placeholder="身分證字號" name="chuser_id"><br><br>
			<input id="text" type="password" name="fgpw" autocomplete="off" placeholder="請輸入新密碼">
			<input id="text" type="password" name="fgpw2" autocomplete="off" placeholder="確認密碼"><br><br>

			<input id="button" type="submit" value="確定更新"><br><br>
		</form>
	</div>
</body>
</html>