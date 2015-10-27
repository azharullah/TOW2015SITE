<!DOCTYPE html>

<?php  
	session_start();
	$_SESSION['user']='';
?>

<html>

<head>
	<title>USER</title>
	<link rel="stylesheet" type="text/css" href="user.css">
	<link href='https://fonts.googleapis.com/css?family=Signika' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="user.js"></script>
</head>

<body>

	<center>

	<h1> WELCOME TO TUX OF WAR - NIT CALICUT </h1>
	
	 <form id="userlogin" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		
		TATHVA ID : <input type="text" name="ID" placeholder="USER ID" required> <br><br>
		PASSWORD : <input type="password" name="PWD" placeholder="PASSWORD" required> <br><br>
		<input id="submit" type="submit" name="SUBMIT" value="SUBMIT">

	</form>

	<?php  

		require "connectdb.php";

		mysql_select_db("db_b130727cs");

		$userid = $_POST["ID"];
		$userpwd = $_POST["PWD"];

		if($_POST["SUBMIT"])
		{
			if(!empty($_POST["ID"]) && isset($_POST["ID"]) && !empty($_POST["PWD"]) && isset($_POST["PWD"]))
			{
				$sql = 'SELECT * FROM TUX_PARTICIPANTS';
				$query = mysql_query($sql,$mysql_conn);
				if(!$query)
				{
					die("Table cannot be accessed...".mysql_error());
				}
				$row = mysql_fetch_assoc($query);
				//echo $userid . ' ' . $row['TID'] . ' ' . $userpwd . ' ' . $row['PHNO'] ;
				if($row['TID']==$userid && $row['PHNO']==$userpwd)
				{
					$_SESSION['user']=$userid;
					echo $_SESSION['user'];
					header('Location: index1.php') && exit();
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