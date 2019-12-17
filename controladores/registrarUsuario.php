<?php

/* #################
Declaramos un array usario para armar el json
#########################*/
$usuarioDatos=array();

/*Funcion para registrar usuarios */    
function registrarUsuario($nombreValidado,$emailValidado,$passwordHasheado,$avatarValidado){

         if($passwordHasheado==NULL){
           echo "No se puede guardar porque la contraseña, esta mal";
         }
           
         else{
            $usuarioDatos=[
                'nombre' => $nombreValidado,
                'email' => $emailValidado,
                'password' => $passwordHasheado,
                'avatar' => $avatarValidado
            ]; 

            $usuariosGet=file_get_contents("usuarios.json");//Obtenemos usuarios sí es que hay
            $usuariosDecode=json_decode($usuariosGet,true);//Convertimos a array asociativo. 
            $usuariosDecode[]=$usuarioDatos;//Ingresamos en el ultimo lugar al usuario.
            $usuariosEncode=json_encode($usuariosDecode);//Codificamos el array para posterior guardarlo.
            file_put_contents("usuarios.json",$usuariosEncode);//Guardamos el usuario codificado en el archivo.
        
        }
}

//Llamamos a la funcion y le pasamos las variables validadas.
registrarUsuario($nombreValidado,$emailValidado,$passwordHasheado,$avatarValidado);


?>