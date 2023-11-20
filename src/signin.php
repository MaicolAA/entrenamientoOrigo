<?php
require_once 'DB.php';

$db = new DB();
$conn = $db->connect();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $correo_electronico = $_POST['correo_electronico'];
    $contrasena = $_POST['contrasena'];

    $hashed_password = password_hash($contrasena, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuario (id_usuario, nombre, apellido, telefono, correo_electronico, contrasena, id_rol) 
            VALUES ('$cedula', '$nombre', '$apellido', '$telefono', '$correo_electronico', '$hashed_password', 1)";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('$nombre fuiste registrado correctamente, inicia sesion'); window.location.href='/entrenamiento/public/viewlogin.php';</script>";
            exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
