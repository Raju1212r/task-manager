<?php

include "config.php";

$id=$_GET['id'];

mysqli_query($conn,"DELETE FROM tasks WHERE id=$id");

header("Location:view_tasks.php");

?>