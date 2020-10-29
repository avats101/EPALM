<?php
  $reg_num = $_POST['reg_num'];
  $firstName = $_POST['firstName'];
  $middleName = $_POST['middleName'];
  $lastName = $_POST['lastName'];
  $mobile = $_POST['mobile'];
  $Email = $_POST['Email'];
  $Password = $_POST['Password'];

  $conn = new mysqli('localhost','root','','epalm');
  if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
  } else {
    $stmt = $conn->prepare("insert into student(reg_num,firstName, middleName, lastName,mobile, Password, Email) values(?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssiss",$reg_num,$firstName, $middleName, $lastName, $mobile, $Password, $Email);
    $execeval = $stmt->execute();
    $stmt->close();
    $conn->close();
    header("Location: registerview.php");
    exit();
  }
?>