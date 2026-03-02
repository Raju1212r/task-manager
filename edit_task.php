<?php
include "config.php";

$id=$_GET['id'];

$result=mysqli_query($conn,"SELECT * FROM tasks WHERE id=$id");
$task=mysqli_fetch_assoc($result);

if(isset($_POST['update'])){

$title=$_POST['title'];
$description=$_POST['description'];
$status=$_POST['status'];

mysqli_query($conn,"UPDATE tasks
SET title='$title',description='$description',status='$status'
WHERE id=$id");

header("Location:view_tasks.php");

}
?>

<!DOCTYPE html>
<html>

<head>

<title>Edit Task</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h2>Edit Task</h2>

<form method="POST">

<input type="text" name="title" value="<?php echo $task['title']; ?>">

<textarea name="description"><?php echo $task['description']; ?></textarea>

<select name="status">

<option <?php if($task['status']=="Pending") echo "selected"; ?>>Pending</option>
<option <?php if($task['status']=="Completed") echo "selected"; ?>>Completed</option>

</select>

<button name="update">Update Task</button>

</form>

</div>

</body>

</html>