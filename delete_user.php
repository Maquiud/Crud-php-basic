<?php 
include("connection.php");
$con = connection();


$Id = $_GET['Id'];

$sql = "DELETE FROM users WHERE Id='$Id'";

$query = mysqli_query($con, $sql);

if ($query) {
    header("location: index.php");
};



?>
