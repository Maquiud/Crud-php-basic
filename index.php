<?php 
include("connection.php");

$con = connection();

$sql = "SELECT * FROM users";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Usuarios CRUD basico</title>
</head>

<body>
    <div class="users-form">
        <form action="insert_user.php" method="post">
            <h1>Crear usuario</h1>
            <input type="text" name="name" placeholder="Nombre">
            <input type="text" name="address" placeholder="Direccion">
            <input type="text" name="password" placeholder="password">            
            <input type="text" name="email" placeholder="email">
            <input type="text" name="phone" placeholder="Telefono">

            <input type="submit" value="Agregar usuario">
        </form>
    </div>
    

    <div class="users table">
        <h2>Usuario registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                     <th>Direccion</th>
                    <th>password</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th></th>
                    <th></th>
                            
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($query)): ?>
                <tr>

                <th> <?= $row['Id']?> </th>
                <th> <?= $row['name']?> </th>
                <th> <?= $row['password']?> </th>
                <th> <?= $row['address']?> </th>
                <th> <?= $row['email']?> </th>
                <th> <?= $row['phone']?> </th>

                <th><a href="update.php?Id=<?= $row['Id'] ?>" class="users-table--edit">Editar</a></th>
                <th><a href="delete_user.php?Id=<?= $row['Id'] ?>" class="users-table--delete">Eliminar</a></th>  
                </tr>
                <?php endwhile; ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>