<?php  

		require "connectdb.php";
		mysql_select_db("db_b130727cs");
		$sql = "SELECT * FROM TUX_QUESTIONS;";
		$query = mysql_query($sql,$mysql_conn);
		if(!$query)
		{
			die("Error in getting questions...Try again later...".mysql_error());
		}
		$row = mysql_fetch_assoc($query);
		while($row = mysql_fetch_assoc($query))
		{
			echo $row['QNO']; echo "<br>";
			echo $row['QUESTION'];
		}		

	?>