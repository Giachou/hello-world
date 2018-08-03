<?php

	// check errors on this single page
	//ini_set('display_errors', '1');

	// define variables and assign values to them
	$database	= "mysql";			// set the default database of user
	$user		= "root";
	$password	= "secret";
	$host		= "mysql";
	
	// connect to database
	$db = mysqli_connect("$host", "$user", "$password", "$database");
	
	/*check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	
	/* return name of current default database */
	if ($result_set = mysqli_query($db, "SELECT DATABASE()")) {
		$row = mysqli_fetch_row($result_set);
		printf("Default database is <b>%s</b><br />", $row[0]);
		mysqli_free_result($result_set);
	}
	
	if (!$db) {
		echo "Cannot connect to the database server";
	} elseif ($db && (mysqli_select_db($db,  $database))) {
		echo "Successfully connected to the database server!<br />Database {$database} selected!<br /><b>Amazing</b>";
	}
?>