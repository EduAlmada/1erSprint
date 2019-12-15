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

/* ################### 
 Validación de Email 
 - Que no esta vacio
 - Que verifique el formato xxx@xxx.com
 #####################*/
function validarEmail($email){ /*Inicio de funcion validarEmail */
      
    $email = $_POST["email"];

    if($_POST)
    {
        if($email===" " || empty($email))
        { return "El campo esta vacio";
         }
          elseif(!(filter_var($email, FILTER_VALIDATE_EMAIL))){
              echo "EL campo no es un email"; 
            }
           else{ 
               return "El email ingresado es correcto: ".$email; 
            }
        }
} /* Fin de funcion validarEmail */

$respuestaValidarEmail=validarEmail($_POST);
echo $respuestaValidarEmail;
echo "<br>";


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
function validarPassword($password){ /*Inicio de funcion validarPassword */
    $password=$_POST["password"];
    $confirmar=$_POST["confirmar"];

    if($_POST){
            if( (strlen($password)==0)  && (strlen($confirmar)==0) ){
               return "Los dos campos de contraseña estan vacios";
             }
             elseif( (strlen($password)==0) ){
               return "La contraseña esta vacia";
             }
             elseif( (strlen($confirmar)==0) ){
               return "Falta la confirmacion de contraseña";
             }
             elseif( ( (strlen($password)>0)  && (strlen($confirmar)>0) ) && ( $password<>$confirmar) )  {
                return "Las contraseñas no verifican";
              }
             elseif(strlen($password)<6){
                return "La contraseña debe ser mayor igual 6 carácteres alfanuméricos";
             }
             elseif(strlen($confirmar)<6){
                return "La contraseña debe ser mayor igual 6 carácteres alfanuméricos";
             }
             elseif( (!preg_match('`[a-z]`',$password)) &&  (!preg_match('`[a-z]`',$confirmar)) ){
                 return "La contraseña debe tener al menos una letra minúscula";
             }
             elseif( (!preg_match('`[A-Z]`',$password)) &&  (!preg_match('`[A-Z]`',$confirmar)) ){
                return "La clave debe tener al menos una letra mayúscula";
            }
            elseif( (!preg_match('`[0-9]`',$password)) && (!preg_match('`[0-9]`',$confirmar)) ){
                return "La clave debe tener al menos un caracter numérico";
               
             } 
            else{
                return "Correcto: ".$password;
                }
            } 
     } /*Fin de funcion validarPassword */

    $respuestaValidarPassword=validarPassword($_POST);
    echo $respuestaValidarPassword;

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