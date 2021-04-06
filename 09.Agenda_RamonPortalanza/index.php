<?php include "clases/ClaseAgenda.php"; session_start();?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="css/estiloAgenda.css">
</head>
<body>
    <div>
        <h1>Bienvenido a la agenda de contactos</h1>
        <nav>
            <a href="anadir.php">Añadir contacto</a><br>
            <a href="mostrar.php">Lista de contactos</a><br>
            <a href="eliminar.php">Eliminar contacto</a><br><br>
        </nav>

        <?php 
            if (!isset($_SESSION["contacto"]))
            {
                $_SESSION["contacto"] = [];
                echo "Iniciaste sesión!<br><br>";
            }
        ?>
    </div>

    <footer>
        by Ramón
    </footer>
    
</body>
</html>