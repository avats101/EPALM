<?php
  $REGISTRATION_NUMBER = $_POST['REGISTRATION_NUMBER'];
  $FIRST_NAME = $_POST['FIRST_NAME'];
  $MIDDLE_NAME = $_POST['MIDDLE_NAME'];
  $LAST_NAME = $_POST['LAST_NAME'];
  $MOBILE_NUMBER = $_POST['MOBILE_NUMBER'];
  $EMAIL = $_POST['EMAIL'];
  $PASSWRD = $_POST['PASSWRD'];

  $conn = new mysqli('localhost','root','','epalm');
  if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
  } else {
    $stmt = $conn->prepare("INSERT INTO STUDENT(REGISTRATION_NUMBER,FIRST_NAME, MIDDLE_NAME, LAST_NAME,MOBILE_NUMBER,EMAIL,PASSWRD) values(?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssiss",$REGISTRATION_NUMBER,$FIRST_NAME, $MIDDLE_NAME, $LAST_NAME, $MOBILE_NUMBER,$EMAIL, $PASSWRD);
    $execeval = $stmt->execute();
    echo $execeval;
    $stmt->close();
    $conn->close();    
    header("Location:index.html");
    exit();

  }
?>