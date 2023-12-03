<!DOCTYPE html>
<html lang="en">
<head>
  <!-- SEO -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Abhinav Singh">
  <meta name="description" content="Employee Hours tracking dynamic website made using HTML, CSS, and PHP">
  <meta name="robots" content="noindex, nofollow">

  <title>Contact us</title>

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
      include('components/adminDetails.php');
    ?>
  </aside>

  <!-- Main -->
  <main>
    <h1>Contact us</h1>
    <p class="info-para">
      Welcome to Employee Hours Tracker (EHT)! We appreciate your interest in our services. If you have any questions, feedback, or concerns, please feel free to reach out to us. Our dedicated support team is here to assist you.
      <br><br>
      <b>Contact Information</b><br><br>
      Email: support@eht.com<br>
      Phone: 1-800-123-4567<br>
      Address: 123 Main Street, Your City, State, ZIP Code<br>
      Business Hours: Monday to Friday, 9:00 AM - 6:00 PM (Your Time Zone)
      <br><br>
      <b>Get in Touch</b>    <br><br>
      Have a question about our features? Need assistance with your account? Want to provide feedback on our services? We'd love to hear from you! You can contact us using the following methods:
      <br><br>
      <b>Support Resources</b>    <br><br>
      Before reaching out, consider checking our FAQ page. It might have the answers you're looking for. If you're experiencing technical issues, you can also visit our Support Center for troubleshooting guides and tutorials.
      <br><br>
      <b>We Value Your Feedback</b>    <br><br>
      At EHT, we strive for excellence, and your feedback is invaluable to us. If you have any suggestions on how we can improve our services or if you encountered any issues, please let us know. Your input helps us enhance the EHT experience for everyone.
      <br><br>
      Thank you for choosing Employee Hours Tracker. We look forward to assisting you!    <br><br>
      <br><br>
      Best regards,
      <br>
      The EHT Team
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