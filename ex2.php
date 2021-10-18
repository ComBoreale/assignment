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
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT ITEMID, NAME, GENRE, PRICE FROM ITEM";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result))
{
	echo "<tr>";
    	echo "<td>" . $row["ITEMID"] ."</td>";
	echo "<td>" . $row["NAME"] . "</td>";
    	echo "<td>" . $row['GENRE'] . "</td>";
   	echo "<td>" . $row['PRICE'] . "</td>";
   	echo "</tr>";
}
mysqli_close($conn);
?>
</table>
</body>
</html>
