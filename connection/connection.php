<?php

$User_ID = $_POST['User_ID'];
$Name = $_POST['Name'];
$Last_name = $_POST['Last_name'];
$Check_In = $_POST['Check_In'];
$Check_Out = $_POST['Check_Out'];
$Email = $_POST['Email'];
$Guests = $_POST['Guests'];
$Room_type = $_POST['Room_type'];


$servername = "localhost";
$username = "root";
$password = "Mikey%/5";
$dbname = "hotel";

//$conn = new mysqli('localhost','root','','hotel');
//if($conn->connect_error){
//     die('Connection Failed : '.$conn->connect_error);
//}else{
//    $stmt = $conn->prepare("")
//}

$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO hotelinfo (user_id, first_name, last_name, check_in, check_out, email, guests, room_type)
VALUES ('$User_ID', '$Name', '$Last_name', '$Check_In', '$Check_Out', '$Email', '$Guests', '$Room_type')";

if ($conn->query($sql) === TRUE) {
  echo "Booking Successfull";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>