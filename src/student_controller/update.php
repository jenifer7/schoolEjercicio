<?php require_once('../database/connection.php');

$id = $_GET['id'];
$name = $_GET['name'];
$date = $_GET['birthdate'];


$sql = "UPDATE student SET fullname = '$name', birthdate = '$date', is_active = 1 WHERE id = '$id'";

$db_con -> exec($sql);
header('Location: ../../student/list.php');
?>
