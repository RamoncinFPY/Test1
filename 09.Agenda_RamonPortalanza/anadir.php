<?php include "clases/ClaseAgenda.php"; session_start(); ?>

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
    
    <h1>Añade más contactos</h1>
    <div>
        <nav>
            <a href="index.php">Inicio</a><br>
            <a href="mostrar.php">Lista de contactos</a><br>
            <a href="eliminar.php">Eliminar contacto</a>
        </nav>
    </div>
    <fieldset>
        <legend>Agenda de contactos</legend>
        <form action="anadir.php" method="post">
            Nombre: <input type="text" name="nombre" id="nombre"><br><br>
            Apellido: <input type="text" name="apellido" id="apellido"><br><br>
            Telefono: <input type="text" name="telefono" id="telefono"><br><br>
            <input type="submit" name="añadir" value="Añadir contacto"><br><br>
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
                if(isset($_POST["nombre"]) and ($_POST["apellido"]) and ($_POST["telefono"]))
                {
                    $personas = new Contacto
                    (
                        $_POST["nombre"],
                        $_POST["apellido"],
                        $_POST["telefono"]
                    );
                    array_push($_SESSION["contacto"], $personas);
                    echo "<h2 style= 'font-style: italic; color: blue;'>Añadido correctamente</h2>";
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