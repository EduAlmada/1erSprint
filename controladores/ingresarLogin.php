<?php 

$nombreValidado=validarNombre();
$passwordValidado=validarPassword();
  
function ingresarLogin($nombreValidado,$passwordValidado){
    
  


    $usuariosGet=file_get_contents("usuarios.json");//Leemos los usuarios registrados
    $usuariosDecode=json_decode($usuariosGet,true);
   // $encontrado=FALSE;
    $usuarioLogueado="";
    $passwordVerificado=FALSE;
    // var_dump($usuariosDecode);

    
    foreach($usuariosDecode as $usuario){

        $passwordAprobado=password_verify($passwordValidado,$usuario["password"]);
        
        if(($nombreValidado===$usuario["nombre"]) && ($passwordAprobado==TRUE)){
            //$encontrado=TRUE;
            $usuarioLogueado=$usuario["nombre"];
           // $passwordAprobado=FALSE;
            header("Location:bienvenida.php?usuario=$usuarioLogueado");
            //session_start();
            //$_SESSION["usuario"]=$usuarioLogueado;
            // $ruta=realpath("../bienvenida.php");
            //$encontrado=FALSE;
           // header("Location:bienvenida.php");

           }

        
       
        else{
           // $encontrado=FALSE;
       //  header("Location:index.php");
          
        } 
    }

  } 
 // }
    //Determinamos si redirigimos a Login.php ó dejamos ingresar a la pagina de bienvenida
    
  /*  if($encontrado==TRUE)
    {
       session_start();
       $_SESSION["usuario"]=$usuarioLogueado;
       // $ruta=realpath("../bienvenida.php");
       $encontrado=FALSE;
       header("Location:bienvenida.php");
        //header("Location:bienvenida.php?usuario=$usuarioLogueado");
         
      //  echo 'Usuario Login correcto'.$usuario['nombre'];
    }
    else{
        //$ruta=realpath('../login.php');
        header("Location:login.php");
        }
    */

ingresarLogin($nombreValidado,$passwordValidado);

?>