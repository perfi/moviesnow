<?php
	require 'functions.php';
	require 'db.php';

	use movie\DB;
	/*Try To Connect to the database*/
	$conn = DB\connect($config);
	if(!$conn) die('Could Not Connect to the DB');

?>