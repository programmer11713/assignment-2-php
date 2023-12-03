<?php
  session_start();
  $_SESSION['loggedIn'] = false;
  $admin = "Not Logged in";
  $adminPlan = "Basic";
  $companyName = "Testing INC.";

  if(isset($_SESSION['admin'])) {
    $admin = $_SESSION['admin'];
    $adminPlan = $_SESSION['adminPlan'];
    $companyName = $_SESSION['companyName'];
    $_SESSION['loggedIn'] = true;
  }

?>
<div class="admin__information">
  <b>Admin: </b><?php echo $admin ?><br>
  <b>Admin Plan: </b><?php echo $adminPlan ?><br>
  <b>Company Name: </b> <?php echo $companyName ?>
</div>