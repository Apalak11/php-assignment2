<?php
	// defining the database
	define('DB_SERVER', '172.31.22.43');
	define('DB_USERNAME', 'Apalakpreet200544669');
	define('DB_PASSWORD', 'PmEGyqZ-jL');
	define('DB_NAME', 'Apalakpreet200544669');

	//  connecting to MySQL database
	$mysql_db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

	if (!$mysql_db) {
		die("Error: Unable to connect " . $mysql_db->connect_error);
	}