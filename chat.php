<?php
    include "db.php";
    $consulta = "SELECT * FROM chat ORDER BY id DESC";
    $result = $conexion->query($consulta);

    while($fila = $result->fetch_array()):
?>
<div id="datos-chat">
    <span style="color: #1c62c4"><?php echo $fila['nombre']; ?>: </span>
    <span style="color: #848484"><?php echo $fila['mensaje']; ?> </span>
    <span style="float: right"><?php echo format_date($fila['fecha']); ?></span>
</div>
<?php 
    endwhile;
?>