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
<h1>Owns</h1>
<?php
$mysqli = new mysqli("localhost", "X33207069", "X33207069", "X33207069");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT ITEM.NAME FROM PURCHASE, ITEM WHERE PURCHASE.ITEMID=ITEM.ITEMID and PURCHASE.USERID=1";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($ITEM.ITEMID, $ITEM.NAME);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>NAME</th>";
echo "<td>" . $ITEM.NAME . "</td>";
echo "</tr>";
echo "</table>";

?>
