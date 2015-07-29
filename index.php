<?php 
	require 'movies.php';
	use movie\DB;

	//fetch All Posts
	
	$details = DB\get('movie_details',$conn,5);
	
	view('index', array(
			'details' => $details
		));	

?>