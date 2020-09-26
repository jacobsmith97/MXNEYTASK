<?php
// database connection 
include_once("config.php");

// Get id from URL
$id = $_GET['id'];

// Delete task row based on  id
$result = mysqli_query($mysqli, "DELETE FROM tasks WHERE id=$id");

//redirect to Home
header("Location:index.php");
?>

