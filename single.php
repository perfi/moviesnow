<?php
	require 'movies.php';
	use movie\DB;

	//fetch All Posts

	$movie_details = DB\get_by_id($_GET['id'], $conn);
	if ($movie_details) {
		$movie_details = $movie_details[0];
		
		view('single', array(
			'movie_details' => $movie_details
		));
	}
	else{
		header('location:index.php');
	}
	
?>