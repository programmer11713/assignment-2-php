<!DOCTYPE html>
<html lang="en">
<head>
  <!-- SEO -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Abhinav Singh">
  <meta name="description" content="Employee Hours tracking dynamic website made using HTML, CSS, and PHP">
  <meta name="robots" content="noindex, nofollow">

  <title>About us</title>

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
    <h1>About us</h1>
    <p class="info-para">
      Welcome to EHT, your trusted partner in efficient employee time tracking and workforce management. Founded on the principles of accuracy, simplicity, and reliability, we are dedicated to helping businesses streamline their operations and maximize productivity.
      <br><br>
      <b>Our Mission</b>
      <br><br>
      At EHT, our mission is to empower businesses of all sizes to effortlessly manage their workforce by providing intuitive and innovative solutions for employee time tracking. We understand the critical role that accurate timekeeping plays in optimizing business performance, which is why we have developed a user-friendly platform that caters to the diverse needs of modern workplaces.
      <br><br>
      <b>Why Choose Us?</b>
      <br><br>
      Simplicity at its Best: We believe that effective solutions should be simple to use. Our intuitive interface ensures that businesses can start tracking employee hours with ease, without the need for extensive training or complicated setups.
      <br><br>
      Precision and Accuracy: We prioritize accuracy in every aspect of our platform. With advanced tracking features and real-time monitoring, you can trust our system to provide precise data, enabling you to make informed decisions for your business.
      <br><br>
      Flexible and Customizable: We understand that every business is unique. That's why we offer flexible and customizable features that can be tailored to suit your specific requirements. Whether you have a small team or a large workforce, our platform adapts to your needs.
      <br><br>
      Compliance and Security: We prioritize the security of your data and ensure that our platform complies with industry standards and regulations. You can rest assured that your sensitive information is protected, allowing you to focus on what matters most – growing your business.
      <br><br>
      Exceptional Customer Support: Our dedicated support team is always ready to assist you. Whether you have a question, need technical support, or require guidance on maximizing the benefits of our platform, our experts are just a message away.
      <br><br>
      <b>Our Vision</b>
      <br><br>
      We envision a future where businesses can effortlessly manage their workforce, increase efficiency, and foster a positive work environment. By providing cutting-edge solutions and unparalleled support, we aim to be the driving force behind the success of businesses across various industries.
      <br><br>
      Join us on this journey towards optimized workforce management. Experience the difference with EHT – where innovation meets simplicity. Let's transform the way you track employee hours and revolutionize your business operations together.
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