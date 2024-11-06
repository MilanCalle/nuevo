<?php 
include "../modelo/usuario.php";

$us=new Usuario("","","","","");

$res=$us->listaUsuario();
include "../vista/mostrarListaUsr.php";



?>