<?php
include("db.php");

if(isset($_POST['register'])){

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="INSERT INTO users(name,email,password)
VALUES('$name','$email','$password')";

if(mysqli_query($conn,$sql)){
header("Location: login.php");
exit();
}else{
echo "Registration Failed";
}

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Passenger Registration</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:linear-gradient(to right,#1e3c72,#2a5298);
height:100vh;
}

.card{
margin-top:70px;
border-radius:25px;
box-shadow:0 0 30px rgba(0,0,0,.3);
}

h2{
font-weight:bold;
}

</style>

</head>
<body>

<div class="container">
<div class="row justify-content-center">
<div class="col-md-6">

<div class="card p-5 bg-white">

<h2 class="text-center text-primary mb-4">
✈ Passenger Registration
</h2>

<form method="POST">

<div class="mb-3">
<input
type="text"
name="name"
class="form-control"
placeholder="Full Name"
required>
</div>

<div class="mb-3">
<input
type="email"
name="email"
class="form-control"
placeholder="Email Address"
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
name="register"
class="btn btn-success w-100">
Register
</button>

</form>

<br>

<p class="text-center">
Already have an account?

<a href="login.php">
Login Here
</a>

</p>

</div>

</div>
</div>
</div>

</body>
</html>