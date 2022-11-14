<?php
session_start();

include("connection.php");
function check_login($con)
{

	if(isset($_SESSION['cus_id']))
	{
		$id = $_SESSION['cus_id'];
		$query = "select * from customers where cus_id = '$id'";

		$result = mysqli_query($con,$query);
		//if($result)
		//{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		//}
	}

	//redirect to login
	//header("Location: login.php");
	//die;

}

function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}

	return $text;
}