<?php
$Id = filter_input(INPUT_POST, 'id');
$Name  = filter_input(INPUT_POST, 'name');
$Genre     = filter_input(INPUT_POST, 'genre');
$Description     = filter_input(INPUT_POST, 'description');
$Supply     = filter_input(INPUT_POST, 'supply');
$Price     = filter_input(INPUT_POST, 'price');
if (empty($Name))
{
$Name='NULL';
}
if (empty($Genre))
{
$Genre='NULL';
}
if (empty($Description)){
$Description='NULL';
}
if(empty($Supply))
{
$Supply='NULL';
}
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
$sql = "INSERT INTO ITEM
values($Id,'$Name','$Genre', '$Description', '$Supply', '$Price')";
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
