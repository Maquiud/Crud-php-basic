<?php 

include("connection.php");
$con = connection();

$Id=$_GET['Id'];

$sql = "SELECT * FROM users where Id='$Id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Editar usuarios</title>
</head>
<body>
    <div class="users-form">
        <form action="edit_user.php" method="POST">
            <h1>Editar usuario</h1>
            <input type="hidden" name="Id" value="<?= $row['Id']?>">
            <input type="text" name="name" placeholder="Nombre"  value="<?= $row['name']?>">
            <input type="text" name="address" placeholder="Direccion" value="<?= $row['address']?>">
            <input type="text" name="password" placeholder="password" value="<?= $row['password']?>"> 
            <input type="text" name="email" placeholder="email" value="<?= $row['email']?>">
            <input type="text" name="phone" placeholder="Telefono" value="<?= $row['phone']?>">
            
            <input type="submit" value="Actualizar informacion">
       </form>

    </div>
    
</body>
</html>