<?php
  class Database {
    private $con;
    function __construct() {
      $this->makeConnection();
    }


    function makeConnection() {
      $this->con = mysqli_connect('localhost', 'root', '', 'mydb');
      if (!$this->con) {
        die("Error");
      }
      // echo "Connected Successfully";
    }

    public function getData($query){
      $result = $this->con->query($query);
      if ($result == false){
        return false;
      }
      $rows = array();
      while ($row = $result->fetch_assoc()){
        $rows[] = $row;
      }
      return $rows;
    }

    public function countRows() {
      $result = mysqli_query($this->con, "SELECT * FROM randomtable11713");
      return mysqli_num_rows($result);      
    }
    public function execute($query){
      $result = $this->con->query($query);
      if ($result == false){
        echo 'Error: cannot execute the command';
        return false;
      }else{
        return true;
      }
    }
  }

  $db = new Database();
?>