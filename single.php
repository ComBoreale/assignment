<!DOCTYPE html>
<html>
<body>
<h1>LIST<h1>
<hr>
<table border = '2'>
<tr>
<th>id</th>
<th>Name</th>
<th>Genre</th>
<th>Price</th>
</tr>
<?php
$conn = new mysqli("localhost", "X33207069", "X33207069", "X33207069");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT ITEMID, NAME, GENRE, PRICE FROM ITEM WHERE GENRE='Single Player'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	echo "<tr>";
    	echo "<td>" . $row["ITEMID"] ."</td>";
	echo "<td>" . $row["NAME"] . "</td>";
    	echo "<td>" . $row['GENRE'] . "</td>";
   	echo "<td>" . $row['PRICE'] . "</td>";
   	echo "</tr>";
}
} else {
  echo "0 results";
}
$conn->close();
?>
</table>
</body>
</html>
