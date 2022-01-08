<?php
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$subject = filter_input(INPUT_POST, 'subject');
$message = filter_input(INPUT_POST, 'message');
if (!empty($name)){
if (!empty($email)){
if (!empty($subject)){
if (!empty($message)){
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
$sql = "INSERT INTO contact (name,email,subject,message)
values ('$name','$email','$subject','$message')";
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
echo "message should not be empty";
die();
}
}
else{
echo "name should not be empty";
die();
}
}
}
?>