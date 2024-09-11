<?php 
include("connection.php");
$con = connection();

$Id = null;
$name = $_POST['name'];
$address = $_POST['address'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql ="INSERT INTO users VALUES('$Id', '$name', '$password', '$address', '$email', '$phone')";
$query = mysqli_query($con, $sql);

if ($query) {
    header("location: index.php");
};

?>