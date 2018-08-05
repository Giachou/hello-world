<?php
	//phpinfo();
?>
<!DOCTYPE html>
<head>
	<title>Hello Fucking World!</title>
</head>
<body>
	<h1>Hello G! Pretty F***ing AMAZING!!!</h1>
	<p><?php echo 'We are running PHP, version: ' . phpversion(); ?></p>
	<?
	// // define variables and assign values to them
	// $database	= "chousme_db";			// set the default database of user
	// $user		= "user";
	// $password	= "password";
	// $host		= "mysql";
	
	// // connect to database
	// $db = mysqli_connect("$host", "$user", "$password", "$database");
	
	// /*check connection */
	// if (mysqli_connect_errno()) {
		// printf("Connect failed: %s\n", mysqli_connect_error());
		// exit();
	// }
	
	// /* return name of current default database */
	// if ($result_set = mysqli_query($db, "SELECT DATABASE()")) {
		// $row = mysqli_fetch_row($result_set);
		// printf("Default database is <b>%s</b><br />", $row[0]);
		// mysqli_free_result($result_set);
	// }
	
	// if (!$db) {
		// echo "Cannot connect to the database server";
	// } elseif ($db && (mysqli_select_db($db,  $database))) {
		// echo "Successfully connected to the database server!<br />Database {$database} selected!<br /><b>Amazing</b>";
	// }
	$database = "chousme_db";
	$user = "user";
	$password = "password";
	$host = "mysql";
	 
	 $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
	 $query = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");
	 $tables = $query->fetchAll(PDO::FETCH_COLUMN);
	 
	 if (empty($tables)) {
		echo "<p>There are no tables in database {$database}.</p>";
	 } else {
		 echo "<p>Database {$database} has the following tables:</p>";
		 echo "<ul>";
		 foreach ($tables as $table) {
			 echo "<li>{$table}</li>";
		 }
		 echo "</ul>";
	 }
	?>
</body>
