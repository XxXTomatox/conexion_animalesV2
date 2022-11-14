<?php 
        include "./conexion.php";
        $conexion = conexion();
        $id = $_GET ['idp'];
        $sql = "SELECT * FROM t_animales
                where id = '$id'";
        $respuesta = mysqli_query ($conexion, $sql);
        $item= mysqli_fetch_array($respuesta)
?>
<html>
    <form action="./backend/actualizar.php" method="post">
        <input type="text" name="id" value=" <?php echo $id; ?> " hidden >
        <label for="nombre">nombre</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $item['nombre'] ?>">
        <label for="region">reguion</label>
        <input type="text" name="region" id="region" value="<?php echo $item['region'] ?>">
        <label for="comida">comida</label>
        <input type="text" name="comida" id="comida" value="<?php echo $item['comida'] ?>">
        <br>
        <button>actualizar</button>
    </form>
</html>