<?php
include("db.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Search Flights</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

<h2>Search Flights</h2>

<form method="POST">

<input
type="text"
name="source"
placeholder="Source"
class="form-control mb-3"
required>

<input
type="text"
name="destination"
placeholder="Destination"
class="form-control mb-3"
required>

<button
type="button"
onclick="window.location.href='/booking.php';"
class="btn btn-success">
Book Now
</button>

</form>

<?php

if(isset($_POST['search'])){

$source=$_POST['source'];
$destination=$_POST['destination'];

$sql="SELECT * FROM flights
WHERE source='$source'
AND destination='$destination'";

$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result)){

?>

<div class="card shadow p-4 mt-4">

<h3>
<?php echo $row['flight_name']; ?>
</h3>

<p>
<?php echo $row['source']; ?>
➜
<?php echo $row['destination']; ?>
</p>

<p>
Departure:
<?php echo $row['departure']; ?>
</p>

<h4>
₹<?php echo $row['price']; ?>
</h4>

<button onclick="window.location='booking.php'" class="btn btn-success">
Book Now
</button>

</div>

<?php

}

}

?>

</body>
</html>