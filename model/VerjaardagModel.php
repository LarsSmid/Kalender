<?php

function getAllMensen() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM `birthdays` 
			LEFT JOIN months on birthdays.month_id = months.month_id
			ORDER By months.month_id, birthdays.day";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getAllMaanden() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM months";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}
function deleteMens($id = null) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM birthdays WHERE id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));

	$db = null;
	
	return true;
}
function createMens() 
{
	$name = isset($_POST['name']) ? $_POST['name'] : null;
	$dag = isset($_POST['dag']) ? $_POST['dag'] : null;
	$maand = isset($_POST['maand']) ? $_POST['maand'] : null;
	$jaar = isset($_POST['jaar']) ? $_POST['jaar'] : null;

	if (strlen($name) == 0 || strlen($dag) == 0 || strlen($maand) == 0 || strlen($jaar) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO birthdays(person, day, month_id, year ) VALUES (:name, :dag, :maand, :jaar)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':name' => $name,
		':dag' => $dag,
		':maand' => $maand,
		':jaar' => $jaar));

	$db = null;
	
	return true;
}

function editMens() 
{
	$naam = isset($_POST['naam']) ? $_POST['naam'] : null;
	$dag = isset($_POST['dag']) ? $_POST['dag'] : null;
	$maand = isset($_POST['maand']) ? $_POST['maand'] : null;
	$jaar = isset($_POST['jaar']) ? $_POST['jaar'] : null;
	$id = isset($_POST['id']) ? $_POST['id'] : null;
	
	if (strlen($naam) == 0 || strlen($dag) == 0 || strlen($maand) == 0 || strlen($jaar) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE birthdays SET person = :person, day = :day, month_id = :month_id, year = :year WHERE id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':person' => $naam,
		':day' => $dag,
		':month_id' => $maand,
		':year' => $jaar,
		':id' => $id));

	$db = null;
	
	return true;
}
function getMens($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM birthdays WHERE id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetch();
}
