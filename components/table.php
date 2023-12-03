<!-- Table -->
<?php
  $query = 'SELECT * FROM randomtable11713';
  $result = $db->getData($query);
?>
<table>
  <thead>
    <th>#</th>
    <th>Name</th>
    <th>ID</th>
    <th>Shift Date</th>
    <th>Hours Worked</th>
    <th>Void Cheque</th>
  </thead>
  <tbody>
    <?php
      $i = 1;
      foreach($result as $key => $res){
        echo "<tr>";
          echo "<td>".$i."</td>";
          echo "<td>".$res['emp_name']."</td>";
          echo "<td>".$res['emp_id']."</td>";
          echo "<td>".$res['shift_date']."</td>";
          echo "<td>".$res['hours']."</td>";
          echo "<td><a href='" . $res['voidChequePath'] . "' download><i class='fa-solid fa-download'></i></a></td>";

          if ($_SESSION['loggedIn']) {
            $empID = $res['emp_id'];
            echo '<td><a href=del.php?empid="'.$empID.'"><i style="color:red" class="fa-solid fa-xmark"></i></a></td>';
            echo '<td><a href=edit.php?empid="'.$empID.'"><i style="color:red" class="fa-solid fa-pencil"></i></a></td>';
          } 
        echo "</tr>";
        $i++;
      }
    ?>
  </tbody>
</table>