<?php  
	
	session_start();
	if($_SESSION['user']=="")
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

		<h2> Round 1 consist of two parts each consisting of 30 minutes. (Part A and Part B)</h2>

		<h2>Instructions for Part A :</h2>

		<ol>
			<li> Maximum time limit for Part A is 30 minutes.</li>
			<li> You are not allowed to leave the fullscreen mode or to use command-line terminal during Part A.</li>
			<li> You are not allowed to enter part B unless you complete Part A.</li>
			<li> Part A consist of 30 MCQs.</li>
			<li> You are allowed to enter Part B soon after you complete Part A. The extra time you have in part A is added to the time limit in Part B.</li>
		</ol>

		<form action="round1.php" method="POST">
			<center><input type="submit" value="ACCEPT AND PROCEED TO PART A"></center>
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