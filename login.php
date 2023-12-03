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
    <h1>Login to your Account</h1>
    <form class="employee__form__fields" action="/login.php" method="POST">
      <input type="text" name="username" placeholder="Enter username" required>
      <input type="password" name="password" placeholder="Enter Password" required>
      <button class="btn btn--light" type="submit">Login</button>

      <?php
        if (isset($_POST['username'])) {
          // Store everything
          $username = $_POST['username'];
          $password = $_POST['password'];
          // $number = $_POST['hours'];
          // $voidCheque = $_POST['image'];

          // Make new Connection
          $con = mysqli_connect('localhost', 'root', '', 'mydb');
          $checkUser = "SELECT * FROM admindetails WHERE USERNAME='$username' AND PASSWORD='$password'";
          $exists = false;
          $result = mysqli_query($con, $checkUser);
          
          if(mysqli_num_rows($result) > 0){
            $exists = true;
          }

          if ($exists) {
            $_SESSION['admin'] = " " . $username;
            $_SESSION['adminPlan'] = " Premium";
            $findCompany =  "SELECT company from admindetails WHERE username='$username'";
            $companyName = mysqli_query($con, $findCompany);
            $rows = mysqli_fetch_array($companyName);
            $_SESSION['companyName'] = " " . $rows[0];

            $findEmail = "SELECT email from admindetails WHERE username='$username'";
            $_SESSION['email'] = " " . mysqli_fetch_array(mysqli_query($con, $findEmail))[0];
            $_SESSION['loggedIn'] = true;

            $findUserProfilePath = "SELECT profile from admindetails WHERE username='$username'";
            $_SESSION['profile'] = "". mysqli_fetch_array(mysqli_query($con, $findUserProfilePath))[0];
            
            // Refresh Page
            $page = $_SERVER['PHP_SELF'];
            $sec = "1";
            header("Refresh: $sec; url=$page");
            echo "<p class='success-message'>Logged in Successfully!</p>";
          }

          else {
            echo "<p class='error-message'>Username or Password do not match!</p>";
          }
        }
      ?>
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