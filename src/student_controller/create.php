<?php require_once('../database/connection.php');

$fullname = $_POST['fullname'];
$birthdate = $_POST['birthdate'];

$sql = "insert into student values(null,null,'$fullname','$birthdate',1)";

  if(isset($db_con) == false){

  }else{
    $db_con->exec($sql);
    header("location: ../../student/list.php");
  }
?>
