<?php
/* Version 0.3
Autor: Rodrigo Luque
Proyecto: Ecommerce
Fecha: 29/11/2019
*/


/* ####################
  Validación de Nombre
  - Que no tenga caracteres especiales Ej:(%$#!)
  - Que tenga al menos 2 letras
  - Que no tenga espacios
  - Que no este vacio
######################*/

function validarNombre(){ /*Inicio de funcion validarNombre */


  if($_POST){

      if(preg_match("[\W]", $_POST["nombre"])){ //Negación de los alfanúmericos [\W]
        return "Ingrese usuario alfanumerico sin simbolos ni espacios";
      }  
      elseif(trim( $_POST["nombre"],"\0")==' '){
        return "Nombre de usuario no debe contener espacios";
      }
      elseif(strlen( $_POST["nombre"])<2){
       return "El nombre de usuario debe contener al menos 2 letras";
      }
      elseif(empty( $_POST["nombre"])) {
        return "Ingrese algún nombre de usuario";
      }
      else{
           
          $nombreTrimeado=trim( $_POST["nombre"]);
          return $nombreTrimeado;
      } 
 }
} /*Fin de funcion validarNombre */



/* ################### 
 Validación de Email 
 - Que no esta vacio
 - Que verifique el formato xxx@xxx.com
 #####################*/
function validarEmail(){ /*Inicio de funcion validarEmail */
      
  if($_POST)
    {
        if(empty($_POST["email"]))
        { return "El campo esta vacio";
         }
          elseif(!(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))){
              echo "EL campo no es un email"; 
            }
           else{ 
               return $_POST["email"]; 
            }
        }
} /* Fin de funcion validarEmail */



/* ####################### 
Validación de Password
- Que no esté vacio el campo password y confirmar
- Que sean iguales el campo password y confirmar
- Que el campo password sea mayor a 6
- Que el campo confirmar sea mayor a 6
- Que tenga al menos 1 letra minúscula
- Que tenga al menos 1 letra mayúscula
- Que tenga al menos un carácter numérico
########################## */
function validarPassword(){ /*Inicio de funcion validarPassword */
  
    

    if($_POST){
            if( (strlen($_POST["password"])==0)  && (strlen($_POST["confirmar"])==0) ){
               return "Los dos campos de contraseña estan vacios";
             }
             elseif( (strlen($_POST["password"])==0) ){
               return "La contraseña esta vacia";
             }
             elseif( (strlen($_POST["confirmar"])==0) ){
               return "Falta la confirmacion de contraseña";
             }
             elseif( ( (strlen($_POST["password"])>0)  && (strlen($_POST["confirmar"])>0) ) && ( $_POST["password"]<>$_POST["confirmar"]) )  {
                return "Las contraseñas no verifican";
              }
             elseif(strlen($_POST["password"])<6){
                return "La contraseña debe ser mayor igual 6 carácteres alfanuméricos";
             }
             elseif(strlen($_POST["password"])>8){
              return "La contraseña no debe exceder los 8 carácteres alfanuméricos";
            }
             elseif( (!preg_match('`[a-z]`',$_POST["password"])) &&  (!preg_match('`[a-z]`',$_POST["confirmar"])) ){
                 return "La contraseña debe tener al menos una letra minúscula";
             }
             elseif( (!preg_match('`[A-Z]`',$_POST["password"])) &&  (!preg_match('`[A-Z]`',$_POST["confirmar"])) ){
                return "La clave debe tener al menos una letra mayúscula";
            }
            elseif( (!preg_match('`[0-9]`',$_POST["password"])) && (!preg_match('`[0-9]`',$_POST["confirmar"])) ){
                return "La clave debe tener al menos un caracter numérico";
               
             } 
            else{
                return $_POST["password"];
                }
            } 
     } /*Fin de funcion validarPassword */


    function persistirDato($arrayE, $campo) {
      if( isset($arrayE[$campo]) ) {
          return "";
      } else {
          if(isset($_POST[$campo])) {
              return $_POST[$campo];
          }
      }
  }
?>