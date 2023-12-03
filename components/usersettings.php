<p class="info-para user-settings">
  <?php 
    $profilePhoto = $_SESSION['profile'];
    echo "<img src='" . $profilePhoto . "' alt='user-image'><br>"
  ?>
  <p class="user-details">
    <b>Username:</b> <?php echo $_SESSION["admin"] ?><br>
    <b>Password:</b> *******<br>
    <b>Company Name:</b> <?php echo $_SESSION["companyName"] ?><br>
    <b>Email:</b> <?php echo $_SESSION["email"] ?>
  </p>
</p>