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
$mysqli = new mysqli("localhost", "X33711786", "X33711786", "X33711786");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT UnitID, Cost, Title
FROM unit WHERE UnitID = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($UnitID, $Cost, $Title);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>UnitID</th>";
echo "<td>" . $UnitID . "</td>";
echo "<th>Cost</th>";
echo "<td>" . $Cost . "</td>";
echo "<th>Title</th>";
echo "<td>" . $Title . "</td>";
echo "</tr>";
echo "</table>";
?>
