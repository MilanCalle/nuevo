<?php 

  //  include "/BIENES RAICES/includes/header.php" ; //para salir es .. y para decir esta carpeta es . 


$inicio = false;
include  '../includes/templates/header.php';


?>
<main class="contenedor secction">
        <h1>Bienvenido </h1>
        <a href="./vendedores/listado.php" class="boton boton-verde">Vendedores</a>
        <a href="./propiedades/listado.php" class=" boton-amarillo">Propiedades</a>
    
        <a href="./controlador/UsuarioLista.php" class=" boton-amarillo">usuarios</a>
        </main>

    <?php
   // include "../includes/templates/footer.php"; 
    include ('../includes/templates/footer.php');
    ?>

