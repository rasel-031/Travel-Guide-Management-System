
<?php 

session_start();

if (isset($_POST['login'])) 
{
	$conn = mysqli_connect("localhost","root","","tms"); 

	$eml = $_POST['email'];
	$psw = $_POST['password'];

	if ($conn) 
	{

		if (!empty($eml) && !empty($psw)) 
		{



			$sql_que = "SELECT Id, Email, Password FROM register WHERE Email = '$eml' ";

       //matching or compare two string or numeric value 

			$rslt = mysqli_query($conn, $sql_que);

			if (mysqli_num_rows($rslt))
			{
				$row = mysqli_fetch_assoc($rslt);

				$_SESSION['id'] = $row['Id'];

				header("Location: view_places.php");
				exit();

			}
			else
			{
				echo "<script>alert('Session['id'] not generated.)</script>";
			}

		}
		else
		{
			echo "<script>alert('Please, fill in the requirment.')</script>";
		}


	}
	else
	{
		echo die("Database connection failed.");  
	}
}

?>