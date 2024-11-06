<?php
$inicio = false;
include  '../../includes/templates/header.php';

?>
<main class="contenedor secction">
    <h>registrar nueva propiedad </h>
    <a href="/BIENES RAICES/admin/index.php" class="boton boton-verde">Volver</a>
    <form method="post" action="registarPropiedad.php" class="formulario" enctype="multipart/form-data">
    <fieldset>
        <legend>INFORMACION GENERAL</legend>
        <label for="">titulo: </label>
        <input type="text" name="tit" id="tit" placeholder="Titulo de la Propiedad">
        <label for="">Precio: </label>
        <input type="number" name="pre" id="pre" placeholder="Apellido Paterno">
        <label for="">Imagen: </label>
        <input type="file" name="ima" id="ima" placeholder="Apellido Materno">
        <label for="">Decripcion : </label>
        <input type="des" name="des" id="des" placeholder="Telefono">
    </fieldset>
    <fieldset>INFORMACION DE LA PROPIEDAD

        <label for="">Habitaciones</label>
        <input type="number" name="hab" id="hab">
        <label for="">Banios</label>
        <input type="number" name="wc" id="wc">
        <label for="">Estacionamiento</label>
        <input type="number" name="est" id="est" min="0" max="10">

    <input type="submit" value="Crear Vendedor " class="boton boton-verde">
    </fieldset>

    <fieldset>
        <legend>Vendedor</legend>
        <select name="ven" id="ven">
            <?php
                    include "../../includes/config/database.php";
                    $db=conectarDB();
                    $con_sql="select * from vendedores where estado='Activo' ";
                    $res=mysqli_query($db,$con_sql);
                    while ($reg=$res ->fetch_assoc()) {


                    
            ?>
            <option value="<?php echo $reg ['idvendedores'];?>"><?php   echo $reg['nombre']; ?></option>

            <option value=""><?php   echo $reg['nombre']; ?></option>
            <option value=""><?php   echo $reg['nombre']; ?></option>
                    <?php }

                    ?>
        </select>
    </fieldset>

    </form>

</main>
<?php
include  '../../includes/templates/footer.php';


?>