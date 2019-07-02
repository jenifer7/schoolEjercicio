<?php require_once('../templates/header.php'); ?>
<?php require_once('../templates/navbar.php'); ?>

<div class="control">
  <div class="control is-grouped is-pulled-right">
    <input type="submit" name="salir" value="Back" onClick=location.href='../index.php' class="button is-info is-outlined">
  </div>
</div>
<div class="columns">
<div class="column is-half is-offset-one-quarter">
  <table class="table is-family-primary has-text-weight-light">
    <tr>
      <th>Curso</th>
      <th>Instructor</th>
      <th>Estado</th>
      <th>Detalle</th>
    </tr>

<?php require_once('../src/database/connection.php');

  $fechaa = date("Y-m-d", time());
  $end = ['end_date'];
  $res;

  $sql = "select s.name, t.fullname, sy.end_date from subject s, teacher t,
         subject_year sy, year y where sy.year_id = y.id and sy.teacher_id = t.id and sy.subject_id = s.id";

         if ($db_con) {
           $result = $db_con->query($sql);
         }

 ?>
 </table>
</div>
</div>
