<?php 
include("process/dbh.php");

$sql2 = "UPDATE `salary` SET `total` = `base` ";


mysqli_query($conn , $sql2);

header("Location:aloginwel.php");
 ?>