<?php

require 'connect.php';

function dd($value)
{
	echo "<pre>", print_r($user), "</pre>";
	die();
}

function SelectAll($table, $conditions = [])
{
	global $conn;
	$sql = "SELECT * FROM $table";

	if (empty($conditions)) {
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	} else {
		$i = 0;
		foreach ($conditions as $key => $value) {
			if ($i === 0) {
				$sql = $sql . " WHERE $key=?";
			} else {
				$sql = $sql . " AND $key=?";
			}
			$i++;
			
		}

		$stmt = $conn->prepare($sql);
		$values = array_values($conditions);
		$types = str_repeat('s', count($values));
		$stmt->bind_param($types, ...$values);
		$stmt->execute();
		$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
		return $records;
	}
	
}

function SelectOne($table, $conditions)
{
	global $conn;
	$sql = "SELECT * FROM $table";
		$i = 0;
		foreach ($conditions as $key => $value) {
			if ($i === 0) {
				$sql = $sql . " WHERE $key=?";
			} else {
				$sql = $sql . " AND $key=?";
			}
			$i++;
			
		}

		$stmt = $conn->prepare($sql);
		$values = array_values($conditions);
		$types = str_repeat('s', count($values));
		$stmt->bind_param($types, ...$values);
		$stmt->execute();
		$records = $stmt->get_result()->fetch_assoc();
		return $records;
	
	
}




 
 ?>