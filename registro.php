<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=<?php echo htmlentities($_SERVER['PHP_SELF']); ?> method="POST">
        <label>Nombre de usuario</label> 
        <br>
        <input type="text" name="user" placeholder="username" required/>
        <br>
        <label>Contraseña</label>
        <br>
        <input type="password" name="password" placeholder="password" required/>
        <br>
        <label>Rol (gestor o tripulante)</label>
        <br>
        <input type="text" name="rol" placeholder="rol" required/>
        <br>
        <input type="submit" value="Sign up">
</body>
</html>