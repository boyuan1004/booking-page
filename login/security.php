<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$chpw = $_POST['chpw'];
		$chpw2 = $_POST['chpw2'];
        $id = $_SESSION['cus_id'];
		$sql = "SELECT * FROM customers where cus_id = '$id'";
        $result = mysqli_query($con,$sql);
        $row = @mysqli_fetch_row($result);
		if( $chpw == $chpw2 && $chpw == $row[4])
		{
			echo "認證成功";
			echo '<meta http-equiv=REFRESH CONTENT=1;url=updata.php>';
		}
		else
		{
			echo '認證失敗! 請在確認您的密碼';
			echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
		}
	}
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<head>
	<title>Security</title>
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
		width: 400px;
		height: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
        <button id= "backbutton" onclick="javascript:history.back();" value="返回到上一個頁面"><i class="fa fa-arrow-left" aria-hidden="true"></i> 回上一頁</button>
		<form method="post">
            
			<div style="font-size: 20px;margin: 10px;color: white;">確認用戶安全</div>
			<input id="text" type="password" name="chpw" autocomplete="off" placeholder="請輸入目前的密碼">
			<input id="text" type="password" name="chpw2" autocomplete="off" placeholder="確認密碼"><br><br>

			<input id="button" type="submit" value="確定"><br><br>
		</form>
	</div>
</body>
</html>