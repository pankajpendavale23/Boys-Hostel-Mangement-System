<?php

$name = filter_input(INPUT_POST, 'name');
$studentfee = filter_input(INPUT_POST, 'studentfee');
$Room = filter_input(INPUT_POST, 'Room');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');


if (!empty($name)){
if (!empty($studentfee)){
if (!empty($Room)){
if (!empty($email)){
if (!empty($password)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "hostel";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO `register` (`name`, `Student fee`, `Room`, `email`, `Password`) 
values ('$name','$studentfee','$Room','$email','$password')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "name should not be empty";
die();
}
}
}
}

?>