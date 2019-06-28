<?php
  $username = 'root';
  $password = '12345';
  $database = 'schooldb';
  $host = 'localhost';

  try {
    $db_con = new PDO("mysql:host={$host};dbname={$database};charset=UTF8", $username, $password);

    $db_con -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    echo $e -> getMessage();
  }
 ?>
