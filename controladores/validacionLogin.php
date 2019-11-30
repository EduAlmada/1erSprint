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

function validarNombre($nombre){ /*Inicio de funcion validarNombre */
    $nombre=$_POST["nombre"];

  if($_POST){

      if(preg_match("[\W]",$nombre)){ //Negación de los alfanúmericos [\W]
        return "Ingrese usuario alfanumerico sin simbolos ni espacios";
      }  
      elseif(trim($nombre,"\0")==' '){
        return "Nombre de usuario no debe contener espacios";
      }
      elseif(strlen($nombre)<2){
       return "El nombre de usuario debe contener al menos 2 letras";
      }
      elseif(empty($nombre) || $nombre===" ") {
        return "Ingrese algún nombre de usuario";
      }
      else{
           
          $nombreTrimeado=trim($nombre);
          return "Nombre correcto:".$nombreTrimeado;
      } 
 }
} /*Fin de funcion validarNombre */
$respuestaValidarNombre=validarNombre($_POST);
echo $respuestaValidarNombre;
echo "<br>";


/* ####################### 
Validación de Password
- Que no esté vacio el campo passwordr
- Que el campo password sea mayor a 6
- Que el campo confirmar sea mayor a 6
- Que tenga al menos 1 letra minúscula
- Que tenga al menos 1 letra mayúscula
- Que tenga al menos un carácter numérico
########################## */

function validarPassword($password){ /*Inicio de funcion validarPassword */
    $password=$_POST["password"];

    if($_POST){
            
             if( (strlen($password)==0) ){
               return "La contraseña esta vacia";
             }
           elseif(strlen($password)<6){
                return "La contraseña debe ser mayor igual 6 carácteres alfanuméricos";
             }
             elseif( (!preg_match('`[a-z]`',$password))  ){
                 return "La contraseña debe tener al menos una letra minúscula";
             }
             elseif( (!preg_match('`[A-Z]`',$password))  ){
                return "La clave debe tener al menos una letra mayúscula";
            }
            elseif( (!preg_match('`[0-9]`',$password)) ){
                return "La clave debe tener al menos un caracter numérico";
               
             } 
            else{
                return "Correcto: ".$password;
                }
            } 
     } /*Fin de funcion validarPassword */

    $respuestaValidarPassword=validarPassword($_POST);
    echo $respuestaValidarPassword;


    ?>