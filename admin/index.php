<!DOCTYPE html>

<?php  
	session_start();
	$_SESSION['admin']="";
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

		mysql_select_db("db_tow2015");

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
					$_SESSION['admin']=$adminid;
					header('Location:admin.php');
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