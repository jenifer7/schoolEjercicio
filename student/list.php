<?php require_once('../templates/header.php'); ?>
<?php require_once('../templates/navbar.php'); ?>
</div>
<input onClick=location.href='../index.php' class="button is-info is-outlined" type="submit" name="salir" value="Back">
</div>
<?php require_once('../src/database/connection.php');

  $sql = "select * from student";
  if($db_con){
    $result = $db_con->query($sql);
  }
 ?>
<div class="colums">
<div class="column is-half is-offset-one-quarter">
  <table class="table is-family-primary has-text-weight-light">
    <tr>
      <th>Code</th>
      <th>Name</th>
      <th>Birthdate</th>
      <th>Is Active</th>
    </tr>
    <?php
      foreach ($result as $value) {
        echo "<tr>" .
             "<td>" . $value['codigo'] . "</td>" .
             "<td>" . $value['fullname'] . "</td>" .
             "<td>" . $value['birthdate'] . "</td>" .
             "<td>" . $value['is_active'] . "</td>" .
             "<td>" .
             "<a href='update.php"."?id=" . $value["id"]
             . "&name=" . $value["fullname"]
             . "&date=" . $value["birthdate"]
             . "' class= 'button is-small is-warning is-outlined is-family-code'>
             <span class= 'icon is-small'><i class='fas fa-edit'></i></span>
             <span> Edit </span></a></td>" .
             "<td>" .
             "<a href='../src/student_controller/delete.php?id="
             .$value["id"]
             . "' class= 'button is-small is-danger is-outlined is-family-code'>
             <span class= 'icon is-small'><i class='fas fa-times'></i></span>
             <span> Delete </span></a></td>" .
             "<td>" .
             "<a href='perfil.php?id="
             .$value["id"]
             . "' class= 'button is-small is-primary is-outlined is-family-code'>
             <span class= 'icon is-small'><i class='fas fa-check'></i></span>
             <span>Detail</span></a></td>" .
             "</tr>" ;
          }

     ?>
     </table>


<?php require_once('../templates/footer.php'); ?>
