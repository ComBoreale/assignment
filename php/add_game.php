<?php
$Id = filter_input(INPUT_POST, 'user');
$Name  = filter_input(INPUT_POST, 'item');
$host = "localhost";
$dbusername = "X33207069";
$dbpassword = "X33207069";
$dbname = "X33207069";
//Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error())
{
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO PURCHASE
values($Id,'$Name')";
if ($conn->query($sql))
{
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
?>
