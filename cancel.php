<?php
include("db.php");

$id=$_GET['id'];

$sql="DELETE FROM bookings
WHERE booking_id='$id'";

if(mysqli_query($conn,$sql)){
echo "Ticket Cancelled Successfully!";
}

?>

<br><br>

<a href="my_bookings.php">
Back to Bookings
</a>