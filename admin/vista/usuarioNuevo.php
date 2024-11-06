<?php 
$inicio = false;

include  '../../includes/templates/header.php';

?>
<main class="contenedor secction">
    <h>Registrar ussuaio </h>
    <a href="/BIENES RAICES/admin/index.php" class="boton boton-verde">Volver</a>
    <form method="post"  class="formulario">
    <fieldset>
        <legend>INFORMACION GENERAL</legend>
        <label for="">email: </label>
        <input type="email" name="ema" id="ema" placeholder="usuario@gmail.com">
        <label for="">Contrasena: </label>
        <input type="password" name="pas" id="pas" placeholder="*******">
        <label for="">Rol: </label>
        <select  name="rol" id="rol" >
            <option value="1" >Adiministrador</option>    
            <option value="2" >Empleado</option> 
        </select>
    </fieldset>
    <input type="submit" value="registrar ususario " name="registrarUsu" class="boton boton-verde">


    </form>

</main>

<?php
    include ('../../includes/templates/footer.php');
?>

