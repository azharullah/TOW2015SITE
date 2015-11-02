<?php  

	session_start();
	$currentuser = $_SESSION['user'];

	if($_POST['questionno'] && $_POST['selectedans'])
	{
		$question = $_POST['questionno'];
		$selectedanswer = $_POST['selectedans'];

		require "connectdb.php";
<<<<<<< HEAD
		mysql_select_db("db_tow2015");
=======
		mysql_select_db("db_b130727cs");
>>>>>>> 1ee566170dc809dbd6e197bd9cac57c1d6740b3f
		
		$sql = "SELECT ANS FROM TUX_QUESTIONS WHERE QNO='$question';";
		$query = mysql_query($sql,$mysql_conn);
		if(!$query)
		{
			die("Error in getting questions...Try again later...".mysql_error());
		}
		echo "string";

		while($row = mysql_fetch_assoc($query))
		{
			$correctanswer = $row['ANS'];
		}

		$sql = "SELECT CORRECTANS FROM TUX_PARTICIPANTS WHERE TID='$currentuser';";
		$query = mysql_query($sql,$mysql_conn);
		$row = mysql_fetch_assoc($query);
		$current = $row['CORRECTANS'];

		if($correctanswer == $selectedanswer)
		{
			//echo json_encode("true");
			$current[$question - 1] = 1;
		}
		else
		{
			//echo json_encode("false");
			$current[$question - 1] = 0;
		}

		$sql = "UPDATE TUX_PARTICIPANTS SET CORRECTANS = '$current' WHERE TID = '$currentuser';";
		$query = mysql_query($sql,$mysql_conn);

		echo json_encode($current);
	}

?>