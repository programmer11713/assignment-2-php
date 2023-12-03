<!DOCTYPE html>
<html lang="en">
<head>
  <!-- SEO -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Abhinav Singh">
  <meta name="description" content="Employee Hours tracking dynamic website made using HTML, CSS, and PHP">
  <meta name="robots" content="noindex, nofollow">

  <title>Track Employee Working Hours</title>

  <!-- Stylesheets & More -->
  <link rel="stylesheet" type="text/css" href="/stylesheets/styles.css">
  <link rel="icon" type="image/x-icon" href="/images/favicon.ico">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/38e0495f56.js" crossorigin="anonymous"></script>
</head>
<body>
  <!-- Header -->
  <header>
    <?php  
      include("components/header.php");
    ?>

  </header>

  <aside>
    <?php
      include("components/adminDetails.php");
    ?>
  </aside>

  <!-- Main -->
  <main>
    <h1>Register</h1>
    <form class="employee__form__fields" action="/register.php" method="POST" enctype='multipart/form-data'>
      <input type="text" name="username" placeholder="Set Username" required min="5" max="16">
      <input type="text" name="email" placeholder="Enter Email" required>
      <input type="password" name="password" placeholder="Set Password" required>
      <input type="text" name="company" placeholder="Enter Company Name" required>
      
      <input style="display:none" type="file" name="userprofileImage" id="profilePic" placeholder="Upload Void Check" accept="image/*">
      <button style="margin-bottom: 2rem" type="button" onClick="document.getElementById('profilePic').click()" class="btn btn--light">Choose Profile Pic</button>


      <button class="btn btn--light" type="submit">Register</button>

      <?php
        if (isset($_POST['username'])) {
          // Store everything
          $username = $_POST['username'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          $company = $_POST['company'];
          $profilePicName = $_FILES['userprofileImage']['name'];
          $validFileExtension = false;

          $targetPath = './userUploads/userProfilePics/'.$profilePicName;

          // file extension
            $file_extension = pathinfo($targetPath, PATHINFO_EXTENSION);
            $file_extension = strtolower($file_extension);

            // Valid image extension
            $valid_extension = array("png","jpeg","jpg", "jfif");
            if(in_array($file_extension, $valid_extension)) {
              // Upload file
              move_uploaded_file($_FILES['userprofileImage']['tmp_name'], $targetPath);
              $validFileExtension = true;
            }
            else{
              $validFileExtension = false;
            }

          // Make new Connection
          $con = mysqli_connect('localhost', 'root', '', 'mydb');

          $nameFine = false;

          if (strlen($username) > 0 && strlen($username) <= 30) {
            $nameFine = true;
          }
          else {
            echo "<p class='error-message'>Name should be less 50 chars</p>";
          }

          if ($validFileExtension) {
            if ($nameFine) {
              $addquery = "INSERT INTO admindetails VALUES ('$username', '$email', '$password', '$targetPath', '$company')";
              try {
                mysqli_query($con, $addquery);
                echo "<p class='success-message'>Added Successfully</p>";
              }
              catch (mysqli_sql_exception $e) {
                echo "<p class='error-message'>User already exists</p>";
              }
            }
          }
          else {
            echo "<p class='error-message'>Please Upload your Profile Pic</p>";
          }
        }
      ?>
    </form>
  </div>
    </form>
  </main>

  <!-- Footer -->
  <footer>
    <?php 
      include("components/footer.php");
    ?>
  </footer>
</body>
</html>