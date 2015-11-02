<?php  
	
	session_start();
	if($_SESSION['user']!="abcdef")
	{
		header('Location:../index.php');
	}
	if($_SESSION['newsess']!="123456")
	{
		header('Location:../index.php');
	}

?>

<!DOCTYPE html>
<html>

	<head>
		
		<title>Rules</title>
	
	</head>

	<body>

		<h1> RULES FOR THE ROUND 1 : </h1>

		<h2>Instructions for Part B :</h2>

		<ol>
			<li> Allotted time limit for Part B is 30 minutes.</li>
			<li> You are allowed to use command-line terminal during Part B.</li>
			<li> Part B consist of three Linux shell scripting questions to be implemented in Bash.</li>
			<li> You are reqquired to solve at least one question in Part B correctly in order to qualify for final round.</li>
			<li> Event manager's decisions will be final in deciding the finalist.</li>
		</ol>

		<form action="round2.php" method="POST">
			<center><input type="submit" value="ACCEPT AND PROCEED TO PART B"></center>
		</form>

		<style type="text/css">

			body
			{
				background-color: black;
				color: lime;
			}

			h1, h2
			{
				text-align: center;
			}

			ol
			{
				font-size: 25px;
				margin-left: 5%;
			}

			li
			{
				margin-top: 5px;
				margin-bottom: 5px;
			}

			input
			{	
				margin-top: 40px;
				padding: 10px 10px 10px 10px;
				color: black;
				background-color: limegreen;
				box-sizing: border-box;
				border-radius: 8%;
				border : 2px solid limegreen;
				box-shadow: 0px 3px 3px 0px green;
			}

			input:hover
			{
				padding: 10px 10px 10px 10px;
				color: black;
				font-weight: bold;
				background-color: lime;
				box-sizing: border-box;
				border-radius: 8%;
				border : 3px solid lime;
				box-shadow: none;
			}

		</style>

	</body>

</html>	