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
      $query = "DELETE FROM randomtable11713 where "
    ?>

  </header>

  <aside>
    <?php
      include("components/adminDetails.php");
    ?>
  </aside>

  <!-- Main -->
  <main>
    <div class="employee__form">
      <h1>
        Update Employee Information 
      </h1>
      <form class="employee__form__fields" action="/edit.php" method="POST" enctype='multipart/form-data'>
      <input type="text" name="ename" placeholder="Name of Employee" required>
        <input type="text" name="id" placeholder="ID of Employee" required>
        <?php
          $dateToday = date('Y-m-d');
          echo "<input type='date' name='date' min='2023-01-01' max='$dateToday' value='$dateToday' required>";
        ?>
        <input type="number" name="hours" min="1" max="24" placeholder="Hours to Add" required>

        <input style="display:none" type="file" name="voidCheque" id="getfile" placeholder="Upload Void Check" accept="image/*">
        <button style="margin-bottom: 2rem" type="button" onClick="document.getElementById('getfile').click()" class="btn btn--light">Void Cheque Image</button>

        <button class="btn btn--light" type="submit">Update</button>
        <?php
          if (isset($_POST['ename'])) {
            // Store everything
            $name = $_POST['ename'];
            $id = $_POST['id'];
            $date = $_POST['date'];
            $number = $_POST['hours'];
            $voidChequeFileName = $_FILES['voidCheque']['name'];
            $validFileExtension = false;
            $empid;
            if (isset($_GET['empid'])) {
              $_SUPER['empid'] = $_GET['empid'];
              $empid = $_SUPER['empid'];
            }
            
            $targetPath = './userUploads/voidCheques/'.$voidChequeFileName;

            // file extension
            $file_extension = pathinfo($targetPath, PATHINFO_EXTENSION);
            $file_extension = strtolower($file_extension);

            // Valid image extension
            $valid_extension = array("png","jpeg","jpg","pdf", "jfif", "webp");
            if(in_array($file_extension, $valid_extension)) {
              // Upload file
              move_uploaded_file($_FILES['voidCheque']['tmp_name'], $targetPath);
              $validFileExtension = true;
            }
            else{
              $validFileExtension = false;
            }

            // Make new Connection
            $con = mysqli_connect('localhost', 'root', '', 'mydb');

            $nameFine = false;
            $idFine = false;

            if (strlen($name) <= 30) {
              $nameFine = true;
            }
            else {
              echo "<p class='error-message'>Name should be less 50 chars</p>";
            }

            if (strlen($id) <= 10) {
              if (preg_match("/^[0-9]+$/", $id)){
                $idFine = true;        
              }
              else {
                echo "<p class='error-message'>ID should be numeric</p>";
              }      
            }
            else {
              echo "<p class='error-message'>ID should be less than 10 digits</p>";
            }
            
            if ($validFileExtension) {
              if ($nameFine && $idFine) {
                $addquery = "INSERT INTO randomtable11713 VALUES ('$name', '$id', '$date', '$number', '$voidChequeFileName', '$targetPath')";
                try {
                  $query = "delete from randomtable11713 where emp_id=$empid";
                  mysqli_query($con, $delQuery);
                  mysqli_query($con, $addquery);
                  echo "<p class='success-message'>Updated Successfully</p>";
                }
                catch (mysqli_sql_exception $e) {
                  echo "<p class='error-message'>ID already exists!</p>";
                  echo $e;
                }
              }
            }
            else {
              echo "<p class='error-message'>Please Upload Image/PDF file</p>";
            }
          }
        ?>
      </form>
    </div>
  </main>

  <!-- Footer -->
  <footer>
    <?php 
      include("components/footer.php");
    ?>
  </footer>
</body>
</html>