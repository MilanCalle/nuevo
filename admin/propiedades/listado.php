<?php
$inicio = false;
include  '../../includes/templates/header.php';

?>
<main class="contenedor secction">
    <h>Lista de propiedades</h>
    <table class="table table-striped">
    <thead>
        <th>TITULO</th>
        <th>PRECIO</th>
        <th>DESCRIPCION</th>
        <th>HABITACIONES</th>
        <th>ESTACIONAMIENTO</th>
        <th>CREADO</th>
        <th>IMAGEN</th>
     
     <th>accion</th>
    </thead>
    <tbody>
    <?php include "../../includes/config/database.php";

                 $db=conectarDB();
                 $consql="SELECT * FROM propiedades WHERE estado like 'Activo'";
                 $res=mysqli_query($db,$consql);
                 while($reg=mysqli_fetch_array($res)){

                    echo "<tr>";
                    echo "<td>".$reg['titulo']."</td>";
                    echo "<td>".$reg['precio']."</td>";
                    echo "<td>".$reg['descripcion']."</td>";
                    echo "<td>".$reg['habitaciones']."</td>";
                    echo "<td>".$reg['estacionamiento']."</td>";
                    echo "<td>".$reg['creado']."</td>";
                    echo "<td><img src='imagenes/'> ". $reg['imagen'] . "</td>";

                    echo " <td> <a href=eliminar.php?cod=".$reg['id']." class='btn btn-danger'> ELIMINAR </a> </td>";
                    echo "<td><a href=''> Modificar </a> </td>";




                 }
                 
             ?>
    </tbody>
    </table>

</main>
<?php
include  '../../includes/templates/footer.php';


?>