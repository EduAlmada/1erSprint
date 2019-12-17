<?php

/*Funcion para cifrar el password*/
function hashearPassword($passwordValidado){

      if(strlen($passwordValidado)>8) {
          return $passwordValidadoHasheado=NULL;
          
      }
     else{
        $passwordParaHashear=$passwordValidado;
        $passwordValidadoHasheado=password_hash($passwordParaHashear,PASSWORD_DEFAULT);
        return $passwordValidadoHasheado;
     }
    
  }

  //LLamamos a la funcion para cifrar el password validado.
  $passwordHasheado=hashearPassword($passwordValidado);

  ?>