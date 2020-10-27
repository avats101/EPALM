<?php
  $Card_Number = $_POST['Card_Number'];
  $Name_on_Card = $_POST['Name_on_Card'];
  $CVV = $_POST['CVV'];
  $Expiry_Date = $_POST['Expiry_Date'];
  $Registered_ph_no = $_POST['Registered_ph_no'];

  $conn = new mysqli('localhost','root','','epalm');
  if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
  } else {
    $stmt = $conn->prepare("insert into student(Expiry_Date,Name_on_Card, CVV, Registered_ph_no, Card_Number) values(?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiii",$Expiry_Date, $Name_on_Card, $CVV, $Registered_ph_no, $Card_Number);
    $execeval = $stmt->execute();
    $stmt->close();
    $conn->close();
    header("Location: register_success.html");
    exit();
  }
?>