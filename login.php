<?php
session_start();
include("db.php");

if(isset($_POST['login'])){

$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM users
WHERE email='$email'
AND password='$password'";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

$row=mysqli_fetch_assoc($result);

$_SESSION['user']=$row['name'];

header("Location: dashboard.php");
exit();

}
else{
$error="Invalid Email or Password";
}

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:linear-gradient(to right,#1e3c72,#2a5298);
height:100vh;
}

.card{
margin-top:80px;
border-radius:25px;
box-shadow:0 0 30px rgba(0,0,0,.3);
}

</style>

</head>

<body>

<div class="container">
<div class="row justify-content-center">
<div class="col-md-6">

<div class="card p-5 bg-white">

<h2 class="text-center text-primary mb-4">
✈ Passenger Login
</h2>

<?php
if(isset($error)){
echo "<div class='alert alert-danger'>$error</div>";
}
?>

<form method="POST">

<div class="mb-3">
<input
type="email"
name="email"
class="form-control"
placeholder="Email"
required>
</div>

<div class="mb-3">
<input
type="password"
name="password"
class="form-control"
placeholder="Password"
required>
</div>

<button
type="submit"
name="login"
class="btn btn-primary w-100">
Login
</button>

</form>

<br>

<p class="text-center">
New User?
<a href="register.php">
Register
</a>
</p>

</div>

</div>
</div>
</div>

</body>
</html>