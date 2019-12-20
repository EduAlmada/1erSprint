<?php
/* Version 0.3
Autor: Rodrigo Luque
Proyecto: Ecommerce
Fecha: 30/11/2019
*/


/* ####################
  Validación de Nombre
  - Que no tenga caracteres especiales Ej:(%$#!)
  - Que tenga al menos 2 letras
  - Que no tenga espacios
  - Que no este vacio
######################*/


function validarNombre(){ /*Inicio de funcion validarNombre */
   

  if(isset($_POST["nombre"])){

      if(preg_match("[\W]",$_POST["nombre"])){ //Negación de los alfanúmericos [\W]
        return "Ingrese usuario alfanumerico sin simbolos ni espacios";
      }  
      elseif(trim($_POST["nombre"],"\0")==' '){
        return "Nombre de usuario no debe contener espacios";
      }
      elseif(strlen($_POST["nombre"])<2){
       return "El nombre de usuario debe contener al menos 2 letras";
      }
      elseif(empty($_POST["nombre"]) || $_POST["nombre"]===" ") {
        return "Ingrese algún nombre de usuario";
      }
      else{
           
          $nombreTrimeado=trim($_POST["nombre"]);
          return $nombreTrimeado;
      } 
 }
} /*Fin de funcion validarNombre */


/* ####################### 
Validación de Password
- Que no esté vacio el campo passwordr
- Que el campo password sea mayor a 6
- Que el campo confirmar sea mayor a 6
- Que tenga al menos 1 letra minúscula
- Que tenga al menos 1 letra mayúscula
- Que tenga al menos un carácter numérico
########################## */

function validarPassword(){ /*Inicio de funcion validarPassword */
   

    if(isset($_POST["password"])){
            
             if( (strlen($_POST["password"])==0) ){
               return "La contraseña esta vacia";
             }
           elseif(strlen($_POST["password"])<6){
                return "La contraseña debe ser mayor igual 6 carácteres alfanuméricos";
             }
             elseif( (!preg_match('`[a-z]`',$_POST["password"]))  ){
                 return "La contraseña debe tener al menos una letra minúscula";
             }
             elseif( (!preg_match('`[A-Z]`',$_POST["password"]))  ){
                return "La clave debe tener al menos una letra mayúscula";
            }
            elseif( (!preg_match('`[0-9]`',$_POST["password"])) ){
                return "La clave debe tener al menos un caracter numérico";
               
             } 
            else{
                return $_POST["password"];
                }
            } 
     } /*Fin de funcion validarPassword */

  
   

    ?>