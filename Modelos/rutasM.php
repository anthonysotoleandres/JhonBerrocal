<?php //  Modelos/rutasM.php
class RutasM{
    public function procesaRutasM($ruta){
        if( $ruta == "ingreso" || 
            $ruta == 'dashboard' ||
            $ruta == 'salir' ||
            $ruta == 'registro_estudiantes' ||
            $ruta == 'realizar_nueva_matricula' ||
            $ruta == 'realizar_matricula' ||
            $ruta == 'reporte_estudiantesI' ||
            $ruta == 'recuperar_contraseña' ||
            $ruta == 'reporte_estudiantes_registrados' ||


            $ruta == 'perfil')
        {
            $pagina = "Vistas/Modulos/".$ruta. ".php";
        }
        else if($ruta == 'index'){
            $pagina = "Vistas/Modulos/ingreso.php";
        }
        else {
            $pagina = "Vistas/Modulos/ingreso.php";
        }
        return $pagina;
    }

}
?>