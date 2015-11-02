<?php  
	
	session_start();
	if($_SESSION['user']!="abcdef")
	{
		header('Location:../index.php');
	}

?>

<html>

	<head>
		
		<title>PART B</title>
		<link href='https://fonts.googleapis.com/css?family=Signika' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="round2.css">
		<script type="text/javascript" src="jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="round2.js"></script>

	</head>

	<body>

		<h1>WELCOME TO PART 2</h1>
		
		<div id="list">
			
			<ul>
				
				<li id="1"><a href="#0">Question 1</a></li>
				<li id="2"><a href="#0">Question 2</a></li>
				<li id="3"><a href="#0">Question 3</a></li>

			</ul>

		</div>

		<div id="main">
			
			<div id="three">
				
				<p> Q3) Write a Bash script for finding the largest of three numbers. </p>

			</div>

			<div id="one">
				
				<p> Q1) Visit this link: <a target="_blank" href="http://192.168.40.99/tuxofwar/files">192.168.40.99/tuxofwar/files</a>. The directory contains a number of good files and bad files. Your task is to write a script to download all the good files.</p> 
				<p>(You should not download all files and then remove the bad ones).</p>

			</div>

			<div id="two">

				<p> Q2) Rename all filenames starting with 'tux' in the current working directory to 'tuxofwar_count'.</p>
				<p>'count' should be initially made equal to 1. On finding a filename starting with 'tux', count will be incremented.</p>
				<p>Sample : Following are the files in the current working directory,</p>
				<ul>
					<li>Koders</li>
					<li>Linux_maestros</li>
					<li>tux_for_fun</li>
					<li>tux_of_war</li>
					<li>war_of_tux</li>
				</ul>
				<p>After running the script, the following are the files in the current working directory,</p>
				<ul>
					<li>Koders</li>
					<li>Linux_maestros</li>
					<li>tuxofwar_1</li>
					<li>tuxofwar_2</li>
					<li>war_of_tux</li>
				</ul>
			</div>

		</div>

		<div id="submitdiv">
			
			<form action="finalround.php" method="POST">
				<input type="submit" value="GO TO ROUND 2">
			</form>
			
			<style type="text/css">
			
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

		</div>

	</body>

</html>
