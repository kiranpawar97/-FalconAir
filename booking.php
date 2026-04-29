<?php
include("db.php");

if(isset($_POST['book'])){

$name=$_POST['name'];
$flight=$_POST['flight'];
$source=$_POST['source'];
$destination=$_POST['destination'];

$sql="INSERT INTO bookings
(passenger_name,flight_name,source,destination)

VALUES(
'$name',
'$flight',
'$source',
'$destination'
)";

if(mysqli_query($conn,$sql)){

header("Location: my_bookings.php");
exit();

}

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Book Flight</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
background:#eef5ff;
}
</style>

</head>

<body class="container mt-5">

<nav class="navbar navbar-dark bg-primary mb-4">
<div class="container">
<a class="navbar-brand">
✈ Your Airline
</a>
</div>
</nav>

<h2 class="text-primary mb-4">
Book Flight Ticket
</h2>

<form method="POST">

<input
class="form-control mb-3"
name="name"
placeholder="Passenger Name"
required>

<input
class="form-control mb-3"
name="flight"
placeholder="Flight Name"
required>

<input
class="form-control mb-3"
name="source"
placeholder="Source"
required>

<input
class="form-control mb-3"
name="destination"
placeholder="Destination"
required>

<button
name="book"
class="btn btn-success">
Book Ticket
</button>

</form>

</body>
</html>