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

    <h1>Mejor sólo que mal acompañado</h1>
    <div>
        <nav class="nav">
            <a href="index.php">Inicio</a><br>
            <a href="anadir.php">Añadir contactos</a><br>
            <a href="mostrar.php">Lista de contactos</a><br>
        </nav>
    </div>

    <fieldset>
        <legend>Agenda de contactos</legend>
        <form action="eliminar.php" method="post">
            Posición de contacto: <input type="text" name="elimina" id="elimina"><br><br>
            <input type="submit" value="Eliminar contacto"><br><br>
        </form>
    </fieldset>
    <table>
            <tr>
            <th>Posición</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Teléfono</th>
        </tr>

    <?php

        if(!isset($_SESSION["contacto"]))
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
                if(isset($_POST["elimina"]) and (($_POST["elimina"] != null) or ($_POST["elimina"] != "")))
                {
                    array_splice($_SESSION["contacto"], $_POST["elimina"], 1);

                    echo "<h2 style= 'font-style: italic; color: blue;'>Has eliminado un contacto</h2>";
                    for ($c = 0; $c < count($_SESSION["contacto"]); $c++)
                {
                //En cada vuelta se va crando una nueva fila
                echo 
                    "<table>" . 
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