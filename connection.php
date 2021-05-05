<?php
  $conn = new mysqli('localhost:3307','root','','employee-reports');
  if(!$conn){
    echo 'Please check your database connection';
  }

?>