<?php require_once('../templates/header.php'); ?>
<?php require_once('../templates/navbar.php'); ?>

<div class="columns">
  <div class="column"></div>
  <div class="column is-three-quarters">
  <?php require_once('../src/database/connection.php');


  $id = $_GET['id'];

  $sql = "select s.name, t.fullname, sy.start_date, sy.end_date
          from subject s, teacher t, subject_year sy, year y
          where sy.subject_id = s.id and sy.teacher_id = t.id
          and sy.year_id = y.id and s.id = '$id'";



  if($db_con){
    $result = $db_con -> query($sql);

    foreach ($result as $value) {
      echo "<h1>" . $value['name'] . "</h1>" .
           "<h1>" . $value['fullname'] . "</h1>" .
           "<h1>" . $value['start_date'] . "</h1>" .
           "<h1>" . $value['end_date'] . "</h1>";
    }
  }


  ?>
</div>
</div>
