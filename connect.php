<?php
  $Name = $_POST['Name'];
  $Contact = $_POST['Contact'];
  $Email = $_POST['Email'];
  $City = $_POST['City'];

  //Database Connection
  $conn = new mysqli('localhost:3308', 'root', '', 'appointments');
  if($conn->connect_error){
    die('Connection failed : '.$conn->connect_error);
  }
  else {
    $stmt = $conn->prepare("insert into customers(Name, Contact, Email, City) values(?,?,?,?)");
    $stmt->bind_param('siss', $Name, $Contact, $Email, $City);
    $stmt->execute();
    echo "APPOINTMENT BOOKED SUCCESSFULLY!";
    $stmt->close();
    $conn->close();
  }
 ?>
