<?php  // registrar PROCESO DE INSCRIPCION ESTUDIANTES
class procesoEstudiantesC {
    function __construct(){
        $this->procesoEstudiantesM = new procesoEstudiantesM();
    }
    // registrar proceso Inscripcion
        public function registroEstudiantesC(){
            if(isset($_POST['dniRE'])){
                $datosC =array();
                $datosC['nombre'] = $_POST['nombreRE'];
                $datosC['apellido'] = $_POST['apellidoRE'];
                $datosC['celular'] = $_POST['celularRE'];
                $datosC['genero'] = $_POST['generoRE'];
                $datosC['dni'] = $_POST['dniRE'];
                $datosC['email'] = $_POST['emailRE'];
                $datosC['contraseña'] = $_POST['dniRE'];
                              
                $resultado = $this->procesoEstudiantesM->registroEstudiantesM($datosC);


                
                if ($resultado) {
                    // Redirigir al usuario a una página de confirmación o mostrar un mensaje de éxito
                    header("Location:index.php?ruta=dashboard");
                    exit;
                } else {
                    // Manejar errores
                    echo "Error al registrar el estudiante.";
                }
    
            }
        }

 // MOSTRAR ESTUDIANTES
 public function mostrarEstudiantesC(){
    $resultado = $this->procesoEstudiantesM->mostrarEstudiantesM();
    return $resultado;
}


 // ELIMINAR ESTUDIANTES
 public function borrarEstudiantesC(){
    if(isset($_GET['idESTU'])){
        $datosC = array();
        $datosC['idestudiantes'] = $_GET['idESTU'];
        $resultado=$this->procesoEstudiantesM->borrarEstudiantesM($datosC);
        header("location: index.php?ruta=registroestudiantes");
        exit();
        
    }
}
   

// MODIFICAR ESTUDIANTES

public function moficarEstudiantesC(){
    if(isset($_POST['nombreME'])){
        $datosC = array();  
        $datosC['nombre']= $_POST['nombreME'];
        $datosC['apellido']= $_POST['apellidoME'];           
        $datosC['dni']= $_POST['dniME'];
        $datosC['genero']= $_POST['generoME']; 
        $datosC['telefono']= $_POST['telefonoME'];
        $datosC['email']= $_POST['emailME'];
                    
        $resultado = $this->procesoEstudiantesM->moficarEstudiantesM($datosC);
        header("location: index.php?ruta=registroestudiantes");
        exit();
        return $resultado;
        
    }
}

}
?>