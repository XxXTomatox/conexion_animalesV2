<?php 
    include "./conexion.php"; 
    include "./header.php"; 
    $conexion = conexion(); 
    $sql = "SELECT * FROM t_animales"; 
    $respuesta = mysqli_query($conexion, $sql);
?>
    <p>
        <a href="./agregar.php">
            agregar nuevo nombre 
        </a>
    </p>

<table>
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>reguion</th>
                <th>comida</th>
                <th>editar</th>
                <th>eliminar</th>
            </tr>
        </thead>
        <tbody>
        <?php while ( $ver = mysqli_fetch_array($respuesta)): ?>
            <tr>
                <th><?php echo $ver['id']; ?></th>
                <th><?php echo $ver['nombre']; ?></th>
                <th><?php echo $ver['region']; ?></th>
                <th><?php echo $ver['comida']; ?></th>
                <th><a href="./editar.php?idp=<?php echo $ver['id']; ?>">editar</a></th>
                <th><a href="./backend/eliminar.php?idp=<?php echo $ver['id']; ?>">eliminar</a></th>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</table>

<?php include "./footer.php"; ?>