<?php
include "config.php";

if(isset($_GET['search'])){

$keyword=$_GET['keyword'];

$result=mysqli_query($conn,"SELECT * FROM tasks WHERE title LIKE '%$keyword%'");

}else{

$result=mysqli_query($conn,"SELECT * FROM tasks");

}
?>

<!DOCTYPE html>
<html>

<head>

<title>Task List</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h2>Task List</h2>

<a href="dashboard.php">Dashboard</a>

<br><br>

<form method="GET">

<input type="text" name="keyword" placeholder="Search task">

<button name="search">Search</button>

</form>

<br>

<a href="add_task.php">Add Task</a>

<table>

<tr>
<th>ID</th>
<th>Title</th>
<th>Status</th>
<th>Action</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['title']; ?></td>

<td><?php echo $row['status']; ?></td>

<td>

<a href="edit_task.php?id=<?php echo $row['id']; ?>">Edit</a>

<a href="delete_task.php?id=<?php echo $row['id']; ?>"
onclick="return confirm('Are you sure you want to delete this task?')">
Delete
</a>

</td>

</tr>

<?php } ?>

</table>

</div>

</body>

</html>