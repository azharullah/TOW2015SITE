<!DOCTYPE html>
<<<<<<< HEAD

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
=======
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>USER</title>
	<meta name="author" content="AZHAR" />
	<!-- Feather Icons -->
	<link rel="stylesheet" type="text/css" href="fonts/feather/style.css">
	<!-- General demo styles & header -->
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<!-- Component styles -->
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<link rel="stylesheet" type="text/css" href="css/mods.css">
	<script type="text/javascript" src="../admin/jquery-2.1.4.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
>>>>>>> c54544efa95b1d208d5d68a30419740ca9cf35d6
</head>

<body>

<<<<<<< HEAD
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

=======
	<?php  

		$i=1;
		/*$arr = new array();
		for ($k=0; $k < 50 ; $k++) { 
			$arr[$k] = -1;
		}*/
		require "connectdb.php";
		mysql_select_db("db_b130727cs");
		$sql = "SELECT * FROM TUX_QUESTIONS ORDER BY QNO;";
		$query = mysql_query($sql,$mysql_conn);
		if(!$query)
		{
			die("Error in getting questions...Try again later...".mysql_error());
		}
		//$row = mysql_fetch_array($query);

		echo '<div class="container">';
		echo '<section class="slider">';
		
			while($row = mysql_fetch_assoc($query))
			{
				if($i==1)
				{
					echo '<div class="slide slide--current" data-content="content-' . $i . '">';
					echo '<h2 class="slide__title"> QUESTION NUMBER - ' . $row['QNO'] . '</h2>';
					echo '<div class="slide__mover">';
					echo '<div class="zoomer flex-center" style="display: list-item">';

						echo '<h2 class="slide__title"> QUESTION - STATEMENT : ' . $row['QUESTION'] . '</h2><br>';
						echo '<p class="options"> OPT - A :' . $row['OPTA'] . '</p><br>';
						echo '<p class="options"> OPT - B :' . $row['OPTB'] . '</p><br>';
						echo '<p class="options"> OPT - C :' . $row['OPTC'] . '</p><br>';
						echo '<p class="options"> OPT - D :' . $row['OPTD'] . '</p><br>';
						echo '<form id="formid' . $i . '" name="formname' . $i . '" action="<?php echo $_SERVER[\'PHP_SELF\']; ?>">';
						echo '<select id="forcolor' . $i . '" name="question' . $i . '" placeholder="ANSWER' . $i . '"><br>';
						echo '<option value="A">A</option><br>';
						echo '<option value="B">B</option><br>';
						echo '<option value="C">C</option><br>';
						echo '<option value="D">C</option><br>';
						echo '</select><br><br>';
						echo '<input type="submit" name="submitname' . $i . '" id="submitid' . $i . '" value="SUBMIT">';
						echo '</form>';

					echo '</div></div></div>';
				}
				else
				{
					echo '<div class="slide" data-content="content-' . $i . '">';
					echo '<h2 class="slide__title"> QUESTION NUMBER - ' . $row['QNO'] . '</h2>';
					echo '<div class="slide__mover">';
					echo '<div class="zoomer flex-center" style="display: list-item">';

						echo '<h2 class="slide__title"> QUESTION - STATEMENT : ' . $row['QUESTION'] . '</h2><br>';
						echo '<p class="options"> OPT - A :' . $row['OPTA'] . '</p><br>';
						echo '<p class="options"> OPT - B :' . $row['OPTB'] . '</p><br>';
						echo '<p class="options"> OPT - C :' . $row['OPTC'] . '</p><br>';
						echo '<p class="options"> OPT - D :' . $row['OPTD'] . '</p><br>';
						echo '<form id="formid' . $i . '" name="formname' . $i . '" action="<?php echo $_SERVER[\'PHP_SELF\']; ?>">';
						echo '<select id="forcolor' . $i . '" name="question' . $i . '" placeholder="ANSWER' . $i . '"><br>';
						echo '<option value="A">A</option><br>';
						echo '<option value="B">B</option><br>';
						echo '<option value="C">C</option><br>';
						echo '<option value="D">C</option><br>';
						echo '</select><br><br>';
						echo '<input type="submit" name="submitname' . $i . '" id="submitid' . $i . '" value="SUBMIT">';
						echo '</form>';

					echo '</div></div></div>';
				}
				$i=$i+1;
			}		
	?>
			
	<nav class="slider__nav">
		<button id="moveleft" class="button button--nav-prev"><i class="icon icon--arrow-left"></i><span class="text-hidden"></span></button>
		<button style="display : none" class="button button--zoom"><i class="icon icon--zoom"></i><span class="text-hidden">View details</span></button>
		<button id="moveright" class="button button--nav-next"><i class="icon icon--arrow-right"></i><span class="text-hidden"></span></button>
	</nav>

	</section>

	<?php  

		echo '<section class="content">';

		while($i>0)
		{
			echo '<div class="content__item" id="content-' . $i . '">';
			echo '<div class="content__item-inner">';
			echo '</div></div>';
			$i=$i-1;
		}

	?>			
		
			<button class="button button--close"><i class="icon icon--circle-cross"></i><span class="text-hidden">Close content</span></button>
		</section>

	</div>

	<div id="sidemenu">
			
		<ul>
			<?php  

				$sql = "SELECT QNO FROM TUX_QUESTIONS ORDER BY QNO;";
				$query = mysql_query($sql,$mysql_conn);
				if(!$query)
				{
					die("Error in getting questions...Try again later...".mysql_error());
				}	
				while($row = mysql_fetch_assoc($query))
				{
					echo '<li id="list' . $i . '"> <a href="#0">  Q : ' . $row['QNO'] . '</a>  </li>';
					$i=$i+1;
				}

			?>
		</ul>

	</div>	
	
	<script src="js/classie.js"></script>
	<script src="js/dynamics.min.js"></script>
	<script src="js/main.js"></script>

</body>
>>>>>>> c54544efa95b1d208d5d68a30419740ca9cf35d6
</html>