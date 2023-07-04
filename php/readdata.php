<?php
	
	// Linking the configuration file
	require 'config.php';
	
	$sql_query = "select id,FirstName, LastName, Gender from registration";
	
	$result = $conn->query($sql_query);
	
	
	if($result->num_rows>0){
		//read data
		while($row = $result->fetch_assoc()){
			//read and utilize the row data
				echo $row["id"]. "-". $row["FirstName"]."-".$row["LastName"]."-".$row["Gender"]."<br>";
		}
		
	}
	else
	{
		echo "No results";
	}
	
	$conn->close();

?>