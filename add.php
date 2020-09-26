<html>
<head>
	<title>Add Tasks</title>
</head>

<body>
	<a href="index.php">Go to List</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Task</td>
				<td><input type="text" name="task"></td>
			</tr>
			<tr> 
				<td>Urgency</td>
				<td><input type="text" name="urgency"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php

	// nsert form data into tasks table.
	if(isset($_POST['Submit'])) {
		$task = $_POST["task"];
		$urgency = $_POST["urgency"];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO tasks(task,urgency) VALUES('$task','$urgency')");
		
		// Show message when task added
		echo "task added. <a href='index.php'>View Tasks</a>";
	}
	?>
</body>
</html>