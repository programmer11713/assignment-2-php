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
    <h1>
      View Data
    </h1>
    <p>
      <?php
        include("scripts\Database.php");
        $totalRows = $db->countRows();
        if ($totalRows > 0) {
          include("components/table.php");
        }
        else {
          echo "<p class='not-found' style='font-size: 2.5rem'>No Information to display. Please add from Home Page</p>";
        }
      ?>
    </p>
  </main>

  <!-- Footer -->
  <footer>
    <?php 
      include("components/footer.php");
    ?>
  </footer>
</body>
</html>