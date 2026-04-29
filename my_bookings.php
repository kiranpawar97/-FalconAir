<?php
include("db.php");

$result=mysqli_query($conn,"SELECT * FROM bookings");

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">

<h2 class="text-primary">
My Booked Tickets
</h2>

<?php

while($row=mysqli_fetch_assoc($result)){

echo "
<div class='card shadow p-4 mt-3'>

<h4>".$row['flight_name']."</h4>

Passenger:
".$row['passenger_name']."<br>

".$row['source']." ➜ ".$row['destination']."

<br><br>

<a
onclick='return confirm(\"Cancel Ticket?\")'
href='cancel.php?id=".$row['booking_id']."'
class='btn btn-danger'>
Cancel Ticket
</a>

</div>
";

}
?>