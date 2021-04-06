<?php 
    include "clases/ClaseAgenda.php"; session_start();

?>

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
    <h1>Lista de contactos</h1>

    <div class="nav">
        <nav>
            <a href="index.php">Inicio</a><br>
            <a href="anadir.php">Añadir contactos</a><br>
            <a href="eliminar.php">Eliminar contacto</a><br>
        </nav>
    </div>

    <!--Empiezo la construcción de la tabla-->
        <table>
            <tr>
            <th>Posición</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Teléfono</th>
        </tr>

    <?php 
        if(isset($_SESSION["contacto"]))
        {
        if(isset($_POST["nombre"]) and ($_POST["apellido"]) and ($_POST["telefono"]))
            {
                echo "Ningún contacto!";
            }else
                {
                    for ($c = 0; $c < count($_SESSION["contacto"]); $c++)
                    {
                    //En cada vuelta se va crando una nueva fila
                    echo 
                        "<tr>\n" . 
                            "<td>" . $c . "</td>\n" .
                            "<td>" . $_SESSION["contacto"][$c]->_nombre . "</td>\n" . 
                            "<td>" . $_SESSION["contacto"][$c]->_apellido . "</td\n>" . 
                            "<td>" . $_SESSION["contacto"][$c]->_telefono . "</td>\n" .
                        "</tr>\n";  
                    }
                    echo "</table>";
                }
        }
    ?>
</body>
</html>