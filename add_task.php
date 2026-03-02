<?php
include "config.php";

if(isset($_POST['submit'])){

$title=$_POST['title'];
$description=$_POST['description'];
$status=$_POST['status'];

mysqli_query($conn,"INSERT INTO tasks(title,description,status)
VALUES('$title','$description','$status')");

header("Location:view_tasks.php");

}
?>

<!DOCTYPE html>
<html>

<head>

<title>Add Task</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h2>Add Task</h2>

<form method="POST">

<input type="text" name="title" placeholder="Task Title" required>

<textarea name="description" placeholder="Task Description"></textarea>

<select name="status">

<option value="Pending">Pending</option>
<option value="Completed">Completed</option>

</select>

<button name="submit">Add Task</button>

</form>

</div>

</body>

</html>