<?php
$inicio = false;
include  '../../includes/templates/header.php';

    $no=$_POST['nom'];
    $pa=$_POST['pat'];
    $ma=$_POST['mat'];
    $te=$_POST['tel'];
    echo "$no"; 
        include"../../includes/config/database.php";
        $db=conectarDB();
        $consql="INSERT INTO vendedores(nombre,paterno, materno,telefono,estado) values ('$no','$pa','$ma','$te','Activo')";

        $res=mysqli_query($db,$consql);
        if($res){
            echo "<script> alert('se registro');</script>";
        }
        else{
            echo "no se conecto";
        }





  
 
    include ('../../includes/templates/footer.php');
 ?>

