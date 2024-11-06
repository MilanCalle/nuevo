<?php
$inicio = false;
include  '../../includes/templates/header.php';

$idv = $_GET['cod'];
echo "el id del vendedor es :".$idv;
include "../../includes/config/database.php";
$db=conectarDB();


$consql= " UPDATE vendedores SET estado='inactivo' WHERE idVendedores='{$idv}'";

$res=mysqli_query($db,$consql);
if($res){
    echo " se ha eliminado";
}
else{
    echo "no se ha eliminado";
}






?>
<main class="contenedor secction">
    <h>eliminar vendedores</h>

</main>
<?php
include  '../../includes/templates/footer.php';


?>