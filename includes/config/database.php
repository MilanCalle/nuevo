<?php 
    function conectarDB(){
        $db=mysqli_connect('localhost','root','','bienes');
        if($db){
            //echo "se conecto";
        }

        
    return $db;

    }
    conectarDB();

?>