<?php 

include("connection.php");
$con = connection();

$Id = $_POST['Id'];
$name = $_POST['name'];
$address = $_POST['address'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql ="UPDATE users SET name='$name', password='$password', address='$address', email='$email', phone='$phone' WHERE Id='$Id'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("location: index.php");
};

?>
