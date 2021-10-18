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
<h1>LIST<h1>
<?php
$conn = new mysqli("localhost", "X33207069", "X33207069", "X33207069");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT ITEMID, GENRE, PRICE FROM ITEM";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
echo "<table>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>"
	echo "<th>ITEMID</th>"
	echo "<td>" . $row["ITEMID"] . "</td>";
	echo "<th>Genre</th>";
	echo "<td>" . $row["GENRE"] . "</td>";
	echo "<th>Price</th>";
	echo "<td>" . $row["PRICE"] . "</td>";

    }
echo "</tr>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</body>
</html>

