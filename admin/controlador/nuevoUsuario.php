<?php 
include"../vista/usuarioNuevo.php";
if(isset($_POST['registrarUsu'])){
    $e = $_POST['ema'];
    $p = $_POST['pas'];
    $r = $_POST['rol'];
echo  $e.$p.$r;

}

?>