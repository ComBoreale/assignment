
if ($search == true)
{
	$result = $conn->query($sql);
        if ($result->num_rows > 0)
	{
        	echo "<table class=\"table\">";
                echo "<thead class=\"thead-dark\">";
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Name</th>";
                echo "<th>Genre</th>";
                echo "<th>Price</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                while ($row = $result->fetch_assoc())
		{
                	echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["Title"] . 
               		"</td><td>" . $row["Studio"] . "</td><td>" . $row["Status"] . 
                    	"</td><td>" . $row["Sound"] . "</td><td>" . $row["Versions"] . 
                    	"</td><td>" . $row["RecRetPrice"] . " </td><td>" . 
                    	$row["Rating"] . "</td><td>" . $row["Year"] . "</td><td>" . 
                    	$row["Genre"] . "</td><td>" . $row["Aspect"] . 
                    	"</td></tr>";
			$sqlIncrement = "UPDATE `movies` SET numbOfSearches = numbOfSearches + 1 WHERE ID=" . $row["ID"] . ";";
			$conn->query($sqlIncrement);
		}
        	echo "</tbody>";
		echo "</table>";
	}
	else
	{
		echo "<h1><b>0 Movies Found</b></h1>";
	}
$conn->close();