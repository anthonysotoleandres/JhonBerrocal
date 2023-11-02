<?php  //Modelos/conexcionBD.php
class ConexionBD{
    public function conectarBD(){
        $cBD = new mysqli('localhost','root','','latoscana',3360);
        return $cBD;
    }
}
?>