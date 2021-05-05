<?php

  require_once('connection.php');

  if(isset($_POST['btn-register'])){
    $FirstN = mysqli_real_escape_string($conn,$_POST['fname']);
    $LastN = mysqli_real_escape_string($conn, $_POST['lname']);
    $Email = mysqli_real_escape_string($conn,$_POST['email']);
    $Number = mysqli_real_escape_string($conn,$_POST['phoneNumber']);
    $Pass = mysqli_real_escape_string($conn,$_POST['pass']);
    $CPass = mysqli_real_escape_string($conn,$_POST['cpass']);
  }
  if($Pass != $CPass){
    echo("<h1>Passwords did not match</h1>");
  } else{
    $Password = md5($Pass);
  }

  $sql = "insert into users (firstName, lastName, email, phone, password, admin) values ('$FirstN', '$LastN', '$Email', '$Number', '$Password', 'false')";
  $result = mysqli_query($conn,$sql);
  if($result){
    header("Location: http://localhost/employee-reports/writeReport.php");
  exit();
  } else {
    echo 'Please check your connection';
  }

?>