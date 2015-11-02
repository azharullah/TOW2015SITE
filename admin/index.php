<!DOCTYPE html>

<?php  
	session_start();
<<<<<<< HEAD
	$_SESSION['admin']="";
=======
>>>>>>> 1ee566170dc809dbd6e197bd9cac57c1d6740b3f
?>

<html>

<head>
	<title>ADMIN</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
	<link href='https://fonts.googleapis.com/css?family=Signika' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="admin.js"></script>
</head>

<body>

	<center>

	<h1> WELCOME TO TUX OF WAR - NIT CALICUT </h1>
	
	 <form id="adminlogin" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		
		ID : <input type="text" name="ID" placeholder="ADMIN ID" required> <br><br>
		PASSWORD : <input type="password" name="PWD" placeholder="PASSWORD" required> <br><br>
		<input id="submit" type="submit" name="SUBMIT" value="SUBMIT">

	</form>

	<?php  

		require "connectdb.php";

<<<<<<< HEAD
		mysql_select_db("db_tow2015");
=======
		mysql_select_db("db_b130727cs");
>>>>>>> 1ee566170dc809dbd6e197bd9cac57c1d6740b3f

		$adminid = $_POST["ID"];
		$adminpwd = $_POST["PWD"];

		if($_POST["SUBMIT"])
		{
			if(!empty($_POST["ID"]) && isset($_POST["ID"]) && !empty($_POST["PWD"]) && isset($_POST["PWD"]))
			{
				$sql = 'SELECT * FROM TUXADMIN';
				$query = mysql_query($sql,$mysql_conn);
				if(!$query)
				{
					die("Table cannot be accessed...".mysql_error());
				}
				$row = mysql_fetch_assoc($query);
				if($row['ID']==$adminid && $row['PWD']==$adminpwd)
				{
<<<<<<< HEAD
					$_SESSION['admin']=$adminid;
					header('Location:admin.php');
=======
					header('Location: admin.php');
>>>>>>> 1ee566170dc809dbd6e197bd9cac57c1d6740b3f
				}
				else
				{
					echo "<div class='errmsg'>You've entered wrong credentials, please try again...</div>";
				}
			}
		}

	?> 

	</center>

</body>

</html>