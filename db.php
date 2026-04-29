<?php

$conn=mysqli_connect(
"sqlXXX.epizy.com",
"epiz_username",
"your_password",
"epiz_database"
);

if(!$conn){
die(mysqli_connect_error());
}

?>