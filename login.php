<?php
session_start();

if(isset($_POST['login'])){

$username = $_POST['username'];
$password = $_POST['password'];

if($username=="admin" && $password=="admin123"){

$_SESSION['user']=$username;

header("Location: dashboard.php");

}else{

echo "<script>alert('Invalid login')</script>";

}

}
?>

<!DOCTYPE html>
<html>

<head>

<title>Login</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h2>Task Manager Login</h2>

<form method="POST">

<input type="text" name="username" placeholder="Username" required>

<input type="password" name="password" placeholder="Password" required>

<button name="login">Login</button>

</form>

</div>

</body>
</html>