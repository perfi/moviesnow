<?php
include '../movies.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$title = $_POST['title'];
	$body = $_POST['body'];

	if (empty($title) || empty($body)) {
		$status = 'PLEASE FILL OUT BOTH INPUTS.';
	}
	else{
		$status = '';
	}
}
view('admin/create', array(
		'status' => $status
	));