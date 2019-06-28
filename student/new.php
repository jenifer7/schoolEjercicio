<?php require_once('../templates/header.php'); ?>
<?php require_once('../templates/navbar.php'); ?>

<?php require_once('../src/database/connection.php'); ?>
<div class="columns">
  <div class="column"></div>
  <div class="column is-three-quarters">
    <form method="post" action="../src/student_controller/create.php">

    <h1 class="title is_three">New Student</h1>
    <hr>
      <div class="field">
        <div class="control">
            <input class="input is-rounded" type="text" placeholder="Full Name" name="fullname">
        </div>
      </div>
      <div class="field">
        <div class="control">
            <input class="input is-rounded" type="date" placeholder="Birthdate" name="birthdate">
        </div>
      </div>
        <div class="control is-grouped is-pulled-right">
          <button class="button is-primary">Send</button>
          <a class="button is-danger">Cancel</a>
        </div>
      </div>
      </form>
  <div class="column"></div>
</div>
<?php require_once('../templates/footer.php'); ?>
