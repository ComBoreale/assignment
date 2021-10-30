<!DOCTYPE html>
<html>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>

<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>
<h1>LIST</h1>
<?php
$mysqli = new mysqli("localhost", "X33207069", "X33207069", "X33207069");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT USERID, NAME FROM USER WHERE USERID=?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($USERID, $NAME);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>USERID</th>";
echo "<td>" . $USERID . "</td>";
echo "<th>NAME</th>";
echo "<td>" . $NAME . "</td>";
echo "</tr>";
echo "</table>";

?>
