<?php
  //database connection
  $servername ="localhost";
  $username ="root";
  $password ="";
  $database_name="bca3rdsem2022";

  $conn = new mysqli($servername,$username,$password,$database_name);

  //check connection
  if($conn->connect_error)
  {
    die ("Connection Failed: ".$conn->connect_error);
  }
  echo "Connected Successfully.";


  //get form data
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $address = $_POST['address'];
  $areacode = $_POST['areacode'];
  $contact = $_POST['contact'];
  $subject = $_POST['subject'];

  $sql = "INSERT INTO loginform (firstname,lastname,address, areacode, contact, subject) VALUES ($firstname,$lastname,$address,$areacode,$contact,$subject)";

  if ($conn ->query($sql)==true) {
    echo "New Record Created Successfully";
  }else{
    echo "Error: ".$sql."<br>".$conn->error;
  }
  $conn->close();


?>