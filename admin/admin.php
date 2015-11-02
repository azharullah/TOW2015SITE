<?php  
	
	session_start();
	if($_SESSION['admin']=="")
	{
		header('Location:index.php');
	}

?>

<!DOCTYPE html>
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

	<h1>WELCOME ADMIN!!!</h1>

	<h1>INSERT THE QUESTIONS HERE :</h1>

	<form id="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		
		QUESTION NUMBER : <input name="QNO" type="number" placeholder="QUESTION NUMBER" required> <br>
		QUESTION : <input type="text" name="QUE" placeholder="QUESTION" required> <br>
		OPTION A : <input type="text" name="OPTA" placeholder="OPTIONA" required>
		OPTION B : <input type="text" name="OPTB" placeholder="OPTIONB" required>
		OPTION C : <input type="text" name="OPTC" placeholder="OPTIONC" required>
		OPTION D : <input type="text" name="OPTD" placeholder="OPTIOND" required> <br>
		CORRECT ANSWER : <input type="text" name="ANS" placeholder="ANSWER" maxlength="1" required> <br> <br>
		<input id="submit" type="submit" name="submit" value="ENTER QUESTION">

	</form>

	<?php  

		require "connectdb.php";
		if($_POST["submit"])
		{
			
			$qno = $_POST['QNO'];
			$que = $_POST['QUE'];
			$opta = $_POST['OPTA'];
			$optb = $_POST['OPTB'];
			$optc = $_POST['OPTC'];
			$optd = $_POST['OPTD'];
			$ans = strtoupper($_POST['ANS']);

			if( isset($_POST['QNO']) && !empty($_POST['QNO']) && isset($_POST['QUE']) && !empty($_POST['QUE']) && isset($_POST['OPTA']) && !empty($_POST['OPTA']) && isset($_POST['OPTB']) && !empty($_POST['OPTB']) && isset($_POST['OPTC']) && !empty($_POST['OPTC']) && isset($_POST['OPTD']) && !empty($_POST['OPTD']) && isset($_POST['ANS']) && !empty($_POST['ANS']) )
			{
				mysql_select_db("db_tow2015");
				$sql = "INSERT INTO TUX_QUESTIONS (`QNO`, `QUESTION`, `OPTA`, `OPTB`, `OPTC`, `OPTD`, `ANS`) VALUES('$qno','$que','$opta','$optb','$optc','$optd','$ans');";
				$query = mysql_query($sql,$mysql_conn);
				if(!$query)
				{
					die("Error in entering the question...Try again later...".mysql_error());
				}
				else
				{
					echo "<div class='succtext'> Successfully entered the question... </div>";
				}
			}
			else
			{
				echo "<div id='errmsg'>Please enter all the fields...</div>";
			}
		}

	?>

	<hr>

	<div id="view">

		<h1>SEE ALL QUESTIONS </h1>
		
	 	<form id="viewform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	 		
	 		<input type="submit" name="viewsubmit" value="SEE ALL QUESTIONS">

	 	</form>

	 	<?php  

	 		require "connectdb.php";
	 		if($_POST["viewsubmit"])
			{
				mysql_select_db("db_tow2015");
				$sql = "SELECT * FROM TUX_QUESTIONS";
				$query = mysql_query($sql,$mysql_conn);
				if(!$query)
				{
					die("Error in entering the question...Try again later...".mysql_error());
				}
				while($row=mysql_fetch_assoc($query))
				{
					echo '<span class="cqno"> Qno - ' . $row['QNO'] . ' </span>      <span class="cque"> Statement - ' . $row['QUESTION'] . ' </span><br>';
					echo '<span class="opt"> a) ' . $row['OPTA'] . ' </span>     <span class="opt"> b) ' . $row['OPTB'] . ' </span>     <span class="opt"> c) ' . $row['OPTC'] . ' </span>     <span class="opt"> d) ' . $row['OPTD'] . ' </span><br>';
					echo '<span class="ans"> Ans : ' . $row['ANS'] . ' </span><br>';
					echo "-------------------------------------------------------------------------------------------------<br>";
				}
			}

	 	?>

	</div>	

	<hr>

	<div id="delete">

		<h1> DELETE A QUESTION </h1>
		
	 	<form id="deleteform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	 		
	 		QNO : <input type="number" placeholder="QNO" name="delqno" required> <br> <br>

	 		<input type="submit" name="deletesubmit" value="DELETE THE QUESTION">

	 	</form>

	 	<?php  

	 		require "connectdb.php";
	 		if($_POST["deletesubmit"])
			{
				mysql_select_db("db_tow2015");
				if(!empty($_POST['delqno']) && isset($_POST['delqno']))
				{
					$delq = $_POST['delqno'];
					mysql_select_db("db_tow2015");
					$sql = "DELETE FROM TUX_QUESTIONS WHERE QNO='$delq'";
					$query = mysql_query($sql,$mysql_conn);
					if(!$query)
					{
						die("Error in deleting the question...Try again later...".mysql_error());
					}
					echo '<div class="succtext"> Deleted the question successfully... </div>';
				}
			}

	 	?>

	</div>

	<hr>

	<div id="view">

		<h1>ADD A USER </h1>
		
	 	<form id="newuserform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	 		
		 	TATHVA ID : <input type="text" name="TID" value="" placeholder="TATHVA ID" required> <br>

		 	NAME : <input type="text" name="NAME" value="" placeholder="NAME" required> <br>

		 	PHONE NO : <input type="number" name="PHNO" value="" placeholder="PHNO" required> <br> <br>

		 	<input type="submit" name="adduser" value="ADD USER">

	 	</form>

	 	<?php  

	 		require "connectdb.php";
	 		if($_POST['adduser'])
	 		{
	 			mysql_select_db("db_tow2015");
	 			if(isset($_POST['TID']) && isset($_POST['NAME']) && isset($_POST['PHNO']))
	 			{
	 				$tid = strtoupper($_POST['TID']);
	 				$name = $_POST['NAME'];
	 				$phno = $_POST['PHNO'];

	 				$sql = "SELECT * FROM TUX_PARTICIPANTS WHERE TID = '$tid';";
	 				$query = mysql_query($sql,$mysql_conn);
	 				$row = mysql_fetch_assoc($query);
	 				if(!$row)
	 				{
	 					$sql = "INSERT INTO TUX_PARTICIPANTS (TID, NAME, PHNO) VALUES('$tid','$name','$phno');";
	 					$query = mysql_query($sql,$mysql_conn);
	 					if(!$query)
	 					{
	 						die("Error adding user...try agin later".mysql_error());
	 					}
	 					else
	 					{
	 						echo '<div class="succtext"> User added successfully... </div>';
	 					}
	 				}
	 				else
	 				{
	 					echo '<div class="succtext"> User already exists... </div>';
	 				}
	 			}	
	 		}

	 	?>

	 </div>

	 <hr>

	 <div id="seeusersform">
	 	
	 	<h1>SEE ALL USERS / RESULTS</h1>
		
	 	<form id="seeusersform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	 		
	 		<input type="submit" name="seeusers" value="SEE RESULTS">

	 	</form>

	 	<?php  

	 		require "connectdb.php";
	 		if($_POST["seeusers"])
			{
				mysql_select_db("db_tow2015");
				$sql = "SELECT * FROM TUX_PARTICIPANTS ORDER BY RESULT DESC";
				$query = mysql_query($sql,$mysql_conn);
				if(!$query)
				{
					die("Error in getting users...Try again later...".mysql_error());
				}

				echo "<table>";
					
					echo "<tr>";
						echo "<th>SNO</th>";
						echo "<th>TATHVA ID</th>";
						echo "<th>NAME</th>";
						echo "<th>PHNO</th>";
						echo "<th>CORRECT ANS</th>";
					echo "</tr>";
				
					$i = 1; 

					while($row=mysql_fetch_assoc($query))
					{
						echo "<tr>";
							echo "<td>" . $i . "</td>";
							echo "<td>" . $row['TID'] . "</td>";
							echo "<td>" . $row['NAME'] . "</td>";
							echo "<td>" . $row['PHNO'] . "</td>";
							echo "<td>" . $row['RESULT'] . "</td>";
						echo "</tr>";
						$i=$i+1;
					}

				echo "</table>";
			}

	 	?>

	 </div>

	 <hr>

	</center>

	<?php  

		//session_destroy();
		//session_unset();

	?>

</body>

</html>