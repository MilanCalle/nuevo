<?php 
class Usuario{
    protected  $id;
    protected   $email;
    protected   $contrasena;
    protected $estado;
    protected $rol;

    public function __construct($id,$email,$contra,$estado,$rol){
        $this->id=$id;
        $this->email=$email;
        $this->contrasena=$contra;
        $this->estado=$estado;
        $this->rol=$rol;
    }
    
public function listaUsuario(){
    include "conexion.php";
    $db=conectarDB();
    $res=$db -> query( "SELECT *FROM usuarios WHERE estado LIKE 'Activo'");
    return $res;
}

}
?>