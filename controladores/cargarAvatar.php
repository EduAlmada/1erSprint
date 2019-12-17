<?php 

function cargarAvatar(){

        if (isset($_FILES["avatar"]["name"])) {
            if ($_FILES["avatar"]["error"] == UPLOAD_ERR_OK) {
            $directorioTemporal=$_FILES["avatar"]["tmp_name"];
            $ext =pathinfo($_FILES["avatar"]["name"],PATHINFO_EXTENSION);
            $nombreImagen=uniqid("img_").".".$ext;
            $rutaCarpeta="archivos";
            //$rutaCarpeta =dirname(__FILE__)."/archivos/".$nombreImagen;
            move_uploaded_file($directorioTemporal,"$rutaCarpeta/$nombreImagen");
            return $nombreImagen;
        }
            
            }
        
}

?>	