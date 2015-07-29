<?php namespace movie\DB;
$config = array(
		'username' => 'root',
		'password' => 'tigerleo',
		'host' => 'localhost',
		'database' => 'mag'
	);
function connect($config)
{
	try{
		$conn = new \PDO('mysql:host=localhost;dbname=' . $config['database'],
							$config['username'],
							$config['password']);
		$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
		return $conn;  
	}catch(Exception $e)
	{
		return false;
	}
}

function query($query, $bindings, $conn)
{
	$stmt = $conn->prepare($query);
	$stmt->execute($bindings);
	$results = $stmt->fetchAll();
	return $results ? $results : false;
}

function get($tablename, $conn, $limit=10)
{
	try{
		$result = $conn->query("select * from $tablename limit $limit");
		return ($result->rowCount() > 0 )
				? $result : false; 

	}
	catch(Exception $e){
		return false;
	}
	
}

function get_by_id($id, $conn)
{
	return query(
					'SELECT * from movie_details where movie_id = :id LIMIT 1',
					array('id' => $id),
					$conn);
}