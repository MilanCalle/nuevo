<?php
$inicio = false;
include  '../../includes/templates/header.php';

?>
<main class="contenedor secction">
<a href="/BIENES RAICES/admin/vendedores/crear.php" class="boton boton-verde">REGISTRAR VENDEDOR</a>
<br>

    <h>Lista de vendedores</h>
    <table class="table table-striped">
    <thead>
        <th>Nombre</th>
        <th>Paterno</th>
        <th>Materno</th>
        <th>Teleforno</th>
        <th>Operciones</th>
    </thead>
    <tbody>
    <?php include "../../includes/config/database.php";
                 $db=conectarDB();
                 $consql="SELECT * FROM vendedores WHERE estado like 'Activo'";
                 $res=mysqli_query($db,$consql);
                 while($reg=mysqli_fetch_array($res)){

                    echo "<tr>";
                    echo "<td>".$reg['nombre']."</td>";
                    echo "<td>".$reg['paterno']."</td>";
                    echo "<td>".$reg['materno']."</td>";
                    echo "<td>".$reg['telefono']."</td>";
                    echo " <td> <a href=Eliminar.php?cod=".$reg['idVendedores']." class='btn btn-danger'> ELIMINAR </a> </td>";
                    echo "<td><a href=''> Modificar </a> </td>";




                 }
                 
             ?>
    </tbody>
    </table>

</main>
<?php
include  '../../includes/templates/footer.php';


?>