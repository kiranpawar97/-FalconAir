<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-dark bg-primary p-3">
<div class="container">
<a class="navbar-brand">
✈ Falcon Airways
</a>
</div>
</nav>

<div class="container mt-5">

<h2>
Welcome
<?php echo $_SESSION['user']; ?>
</h2>

<div class="row mt-4">

<div class="col-md-4">
<a href="search_flights.php" class="btn btn-info w-100 p-4">
Search Flights
</a>
</div>

<div class="col-md-4">
<a href="booking.php" class="btn btn-success w-100 p-4">
Book Ticket
</a>
</div>

<div class="col-md-4">
<a href="my_bookings.php" class="btn btn-warning w-100 p-4">
My Bookings
</a>
</div>

</div>

<br>

<a href="logout.php" class="btn btn-danger">
Logout
</a>

</div>

</body>
</html>