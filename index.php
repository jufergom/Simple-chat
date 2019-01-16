<?php
    include "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Mukta" rel="stylesheet">
    <script type="text/javascript" src="script.js"></script>
    <title>Chat simple by jufergom</title>
</head>
<body onload="ajax();">
    <div id="contenedor">
        <div id="caja-chat">
            <div id="chat"></div>
        </div>
        <form action="index.php" method="post">
            <input type="text" name="nombre" placeholder="Ingresa tu nombre">
            <textarea name="mensaje" id="mensaje" placeholder="Escribe un mensaje"></textarea>
            <input type="submit" name="enviar" value="Enviar">
        </form>
        <?php
            if(isset($_POST['enviar'])) {
                $nombre = $_POST['nombre'];
                $mensaje = $_POST['mensaje'];

                $consulta = "INSERT INTO chat (nombre, mensaje) VALUES ('$nombre', '$mensaje')";
                $ejecutar = $conexion->query($consulta);
                if($ejecutar) {
                    echo "<embed loop='false' src=beep.mp3 hidden='true' autoplay='true'>";

                }
            }
        ?>
    </div>
</body>
</html>