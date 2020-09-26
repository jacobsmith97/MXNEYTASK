<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM tasks ORDER BY id DESC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>

    <h1>MXNEY To-do List</h1>

    <table width='80%' border=1>

    <tr>
        <th>Task</th> <th>Urgency</th> <th></th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['task']."</td>";
        echo "<td>".$user_data['urgency']."</td>";   
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
    
    <a href="add.php">Add New Task</a><br/><br/>
</body>
</html>
