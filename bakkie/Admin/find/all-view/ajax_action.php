<?php
include_once './../../../config/Database.php';
include_once 'Records.php';

$database = new Database();
$db = $database->getConnection();

$record = new Records($db);

if(!empty($_POST['action']) && $_POST['action'] == 'listRecords') {
	$record->listRecords();
}
// if(!empty($_POST['action']) && $_POST['action'] == 'addRecord') {	
// 	$record->name = $_POST["name"];
//     $record->age = $_POST["age"];
//     $record->skills = $_POST["skills"];
// 	$record->address = $_POST["address"];
// 	$record->designation = $_POST["designation"];
// 	$record->addRecord();
// }
// if(!empty($_POST['action']) && $_POST['action'] == 'getRecord') {
// 	$record->id = $_POST["id"];
// 	$record->getRecord();
// }
// if(!empty($_POST['action']) && $_POST['action'] == 'updateRecord') {
// 	$record->id = $_POST["id"];
// 	$record->name = $_POST["name"];
//     $record->surname = $_POST["surname"];
//     $record->email = $_POST["email"];
// 	$record->cellnumber = $_POST["cellnumber"];
// 	$record->regdate = $_POST["regdate"];
// 	$record->updateRecord();
// }
if(!empty($_POST['action']) && $_POST['action'] == 'deleteRecord') {
	$record->id = $_POST["id"];
	$record->deleteRecord();
}
?>