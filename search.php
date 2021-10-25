<!DOCTYPE html>
<html>
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

$sql = "SELECT ITEMID, NAME, GENRE, PRICE FROM ITEM WHERE NAME REGEXP ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($ITEMID, $NAME, $GENRE, $PRICE);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>ITEMID</th>";
echo "<td>" . $ITEMID . "</td>";
echo "<th>NAME</th>";
echo "<td>" . $NAME . "</td>";
echo "<th>PRICE</th>";
echo "<td>" . $PRICE . "</td>";
echo "</tr>";
echo "</table>";

?>
