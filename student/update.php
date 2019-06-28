<?php require_once('../templates/header.php'); ?>
<?php require_once('../templates/navbar.php'); ?>


<div class="columns">
  <div class="column">
    <h1>Update Student</h1>
    <form action="../src/student_controller/update.php?" method="get">

      <div class="control">
        <input type="hidden" name="id" value="<?php echo($_GET['id']) ?>">
      </div>

      <div class="field">
        <input type="text" name="name" value="<?php echo($_GET['name']) ?>" placeholder="Fullname">
      </div>

      <div class="field">
        <input type="date" name="birthdate" value="<?php echo($_GET['date']) ?>">
      </div>

      <div class="field">
          <label class="checkbox">Is Active
            <input type="checkbox" name="isactive"></label>
      </div>


      <div class="field">
        <div class="control">
          <button class="button is-primary">
            <span class="icon is-small">
              <i class="fas fa-check"></i>
            </span>
            <span>Submit</span>
          </button>
        </div>
      </div>


    </form>
  </div>
</div>
<div class="column"></div>
<?php require_once('../templates/footer.php'); ?>
