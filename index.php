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
	<script type="text/javascript" src="user/jquery-2.1.4.min.js"></script>
</head>

<body>

	<center>

	<h1> WELCOME TO TUX OF WAR - NIT CALICUT </h1>
	
	 <form id="userlogin" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		
		TATHVA ID : <input type="text" name="ID" placeholder="USER ID" required> <br><br>
		PASSWORD : <input type="password" name="PWD" placeholder="PASSWORD" required> <br><br>

		I agree to the <a href="Generalrules.html" target="_blank">rules and regulations</a> of the contest.

		<input id="submit" type="submit" name="SUBMIT" value="SUBMIT">

	</form>

	<?php  

		require "user/connectdb.php";

		mysql_select_db("db_tow2015");

		$userid = strtoupper($_POST["ID"]);
		$userpwd = $_POST["PWD"];

		if($_POST["SUBMIT"])
		{
			if(!empty($_POST["ID"]) && isset($_POST["ID"]) && !empty($_POST["PWD"]) && isset($_POST["PWD"]))
			{
				$sql = "SELECT * FROM TUX_PARTICIPANTS WHERE TID='$userid'";
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
					header('Location: user/round1rules.php');
				}
				else
				{
					echo "<div class='errmsg'>You've entered wrong credentials, please try again...</div>";
				}
			}
		}

	?>
	
	<div id="bottom">
	
		<p> The contest for 2015 has ended. Congratulations to the winners for the great performances!  For those who missed it, you can still login with these credentials and check out the questions.</p> 
		<p>The solutions for the questions would be uploaded very soon!!</p>
		<p>Credentials for login :</p>
		<li>Username : <span style="color:orange">test</span></li>
		<li>Password : <span style="color:orange">1234</span></li>	
	</div> 

	<!--<img src="user/images/linux.png" width="400px">-->

	</center>

</body>

</html>
