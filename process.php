<?php

  require_once('connection.php');

  if(isset($_POST['btn-save'])){
    $Report = mysqli_real_escape_string($conn,$_POST['report']);
    $UserName = mysqli_real_escape_string($conn, $_POST['name']);
    $Email = mysqli_real_escape_string($conn,$_POST['email']);
    $Date = mysqli_real_escape_string($conn,$_POST['date']);
  }

  $sql = "insert into reports (name, email, report, date) values ('$UserName', '$Email', '$Report', '$Date')";
  $result = mysqli_query($conn,$sql);
  if($result){
    header("Location: http://localhost/employee-reports/success.php");
  exit();
  } else {
    echo 'Please check your connection';
  }

?>