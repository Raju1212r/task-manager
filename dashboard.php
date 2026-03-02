<?php
session_start();

if(!isset($_SESSION['user'])){
header("Location: login.php");
exit();
}
?>

<!DOCTYPE html>
<html>

<head>

<title>Task Manager Dashboard</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h2>Welcome <?php echo $_SESSION['user']; ?></h2>

<p>Task Manager Dashboard</p>

<br>

<a href="add_task.php">Add New Task</a>

<br><br>

<a href="view_tasks.php">View All Tasks</a>

<br><br>

<a href="logout.php">Logout</a>

</div>

</body>
</html>