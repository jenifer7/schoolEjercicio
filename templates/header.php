<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/school/css/bulmaswatch.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title><?php

    $title = "SchoolApp";

          if($title === NULL){
            echo 'SchoolApp';
          }else {
            echo $title;
          }
          ?>
    </title>
<link
rel="stylesheet"
href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/school/css/bulma.min.css">
</head>
<body>
