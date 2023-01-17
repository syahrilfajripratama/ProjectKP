<?php 
require 'conn.php';

//fungsi query
function query($query){
	global $mysqli;
	$result = mysqli_query($mysqli, $query);
	$rows = [];
	while ($row = mysqli_fetch_array($result)) {
		$rows[] = $row;
	}
	return $rows;
}
 ?>
