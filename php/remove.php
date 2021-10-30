<?php
$Id = filter_input(INPUT_POST, 'id');
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
$sql = "DELETE FROM ITEM WHERE ITEMID='$Id'";
if ($conn->query($sql))
{
echo "Record has been removed sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
?>
