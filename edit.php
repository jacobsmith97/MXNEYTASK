<?php
// include database connection
include_once("config.php");

// Check if form is submitted, then redirect
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$task=$_POST["task"];
	$urgency=$_POST["urgency"];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE tasks SET task='$task',urgency='$urgency' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM tasks WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$task = $user_data["task"];
	$urgency = $user_data["urgency"];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
               
				<td>task</td>
				<td><input type="text" name="task" value="<?php echo $task;?>"></td>
			</tr>
			<tr> 
				<td>urgency</td>
				<td><input type="text" name="urgency" value="<?php echo $urgency;?>"></td>
			</tr>

			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>

