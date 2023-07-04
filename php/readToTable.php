<?php
	
	// Linking the configuration file
	require 'config.php';
	
	$sql_query = "select id,FirstName, LastName, Gender from registration";
	
	$result = $conn->query($sql_query);
	
	
	if($result->num_rows>0){
		//read data
		while($row = $result->fetch_assoc()){
			//read and utilize the row data
			echo "<table border ='2'>";
			echo "<tr>";
			echo "<td>".$row["id"];
			echo "<td>". $row["FirstName"];
			echo "<td>".$row["LastName"];
			echo "<td>".$row["Gender"];
			echo "</tr>";
			echo "</table>";
		}
		
	}
	else
	{
		echo "No results";
	}
	
	$conn->close();

?>