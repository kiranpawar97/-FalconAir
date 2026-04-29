<?php
include("db.php");

if(isset($_POST['add'])){

$flight=$_POST['flight'];
$source=$_POST['source'];
$destination=$_POST['destination'];
$departure=$_POST['departure'];
$price=$_POST['price'];

$sql="INSERT INTO flights
(flight_name,source,destination,departure,price)

VALUES(
'$flight',
'$source',
'$destination',
'$departure',
'$price'
)";

if(mysqli_query($conn,$sql)){
echo "Flight Added Successfully!";
}

}
?>

<h2>Add Flight</h2>

<form method="POST">

Flight Name:
<input type="text" name="flight"><br><br>

Source:
<input type="text" name="source"><br><br>

Destination:
<input type="text" name="destination"><br><br>

Departure Time:
<input type="text" name="departure"><br><br>

Price:
<input type="number" name="price"><br><br>

<button name="add">
Add Flight
</button>

</form>