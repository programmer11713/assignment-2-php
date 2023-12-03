<?php
  require("scripts/Database2.php");

  if (isset($_GET['empid'])) {
    $empID = $_GET['empid'];
    $con = mysqli_connect('localhost', 'root', '', 'mydb');
    $query = "delete from randomtable11713 where emp_id=$empID";
    mysqli_query($con, $query);
    
    // Refresh Page
    $page = 'viewHours.php';
    $sec = "0";
    header("Refresh: $sec; url=$page");
  } 
  else {
    echo "Employee ID not provided";
  }
?>