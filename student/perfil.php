<?php require_once('../templates/header.php'); ?>
<?php require_once('../templates/navbar.php'); ?>

<div class="columns">
<div class="column"></div>
  <div class="column is-three-quarters">
    <div class="column"></div>
      <div class="column"></div>
      <div class="control is-grouped is-pulled-right">
        <input class="button is-info is-outlined" type="button" name="imprimir" value="Constancy Print">
        <input class="button is-info is-outlined" type="button" name="asignar" value="Assign">
      </div>
<?php require_once('../src/database/connection.php');
$fecha_actual = strtotime(date("Y-m-d",time()));
$ed = ['end_date'];
$id = $_GET['id'];
$est;

$uno = "select s.codigo as Codigo, s.fullname as Name, round(year(now())-year(birthdate)) as Age
        from student s where s.id = '$id'";

$sql = "select st.codigo as Codigo, st.fullname as Name,round(year(now())-year(st.birthdate)) as Age,
        sb.name as Subject, y.year as Ciclo, sy.end_date as Estado, sby.score as Nota
        from subject sb, year y, student_subject_year sby, subject_year sy,student st
        where sy.year_id = y.id and sy.subject_id = sb.id
        and sby.subject_year_id = sy.id
        and sby.student_id = st.id and st.id = '$id'";


if($db_con){
  $result = $db_con -> query($uno);

      foreach ($result as $values) {
        echo  "<h1>". $values['Name'] ."</h1>" .
              "<h1>". $values['Codigo'] . "</h1>" .
              "<h1>". $values['Age'] . "</h1>";
              break 1;
      }
    }
    echo "<hr/>";
if($db_con){
    $result = $db_con -> query($sql);
echo  "<table class='table is-family-code'>" .
      "<thead>" .
      " <th>Name</th> " .
      " <th>Ciclo</th> " .
      " <th>State</th> " .
      " <th>Score</th> "  .
      " </thead> " ;

      foreach ($result as $value) {

        if($fecha_actual > $ed){

        }else {

        }



       echo "<tr>" .
            "<td>" . $value['Subject'] . "</td>" .
            "<td>" . $value['Ciclo'] . "</td>" .
            "<td>" . $value['Estado'] . "</td>" .
            "<td>" . $value['Nota'] . "</td>" .
            "</tr>";
        }
      echo "</table>" ;
      }
     ?>
     <div class="column">
         <input onClick=location.href='list.php'
          class="button is-primary is-outlined" type="submit"
          name="salir" value="Back">
     </div>
  </div>
    <div class="column"></div>
</div>


<?php require_once('../templates/footer.php'); ?>
