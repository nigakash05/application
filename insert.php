<?php
	include_once 'connection.php';
?>


<?php
if(isset ($_POST['Name'])&&($_POST['Password'])&&($_POST['Email'])&&($_POST['Phone']))
{
	$name = $_POST['Name'];
	$password = $_POST['Password'];
	$email = $_POST['Email'];
	$phone = $_POST['Phone'];
	
	$query = "INSERT INTO info VALUES(1,'$name', '$email','$phone','$password')";
	$data = mysqli_query($conn, $query);
	
	if($data)
	{
		echo "success";
        header("Location: https://akashwebapp05.azurewebsites.net/search.php");
       
	}
	else
	{
		echo "failed";

	}
	}
	else
	{
	

include_once 'https://akashwebapp05.azurewebsites.net/index.html';

	}
?>
