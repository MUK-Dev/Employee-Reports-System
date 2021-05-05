<?php

  require_once('connection.php');

  if(isset($_POST['btn-login'])){
    $Email = mysqli_real_escape_string($conn,$_POST['email']);
    $Pass = mysqli_real_escape_string($conn,$_POST['pass']);
  }
  $sql = "SELECT * FROM users ORDER BY ts DESC";
  $result = $conn->query($sql);
  while($user=$result->fetch_assoc()){
    if($user['email']==$Email){
      if($user['password']==md5($Pass)){
        if($user['admin'] == "true"){
          header("Location: http://localhost/employee-reports/home.php");
          exit();
        } else {
          header("Location: http://localhost/employee-reports/writeReport.php");
          exit();
        }
      }
    }
  }

?>