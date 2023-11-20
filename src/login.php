<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'db.php';

    $db = new DB();
    $conn = $db->connect();

    $correo_electronico = $_POST['correo_electronico'];
    $contrasena = $_POST['contrasena'];

    $sql = "SELECT * FROM usuario WHERE correo_electronico = '$correo_electronico'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        require_once 'user.php';

        
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
        
        $user = new User();
        $user->setNombre($nombre, $apellido);
        
        
        session_start();
        
        
        $_SESSION['user'] = $user;


        if (password_verify($contrasena, $row['contrasena'])) {
            header('Location: /entrenamiento/public/dashboard.php');
            exit;
        } else {
            
            echo "<script>alert('Contraseña incorrecta'); window.location.href='/entrenamiento/public/viewlogin.php';</script>";
            exit;
        }
    } else {
        
        echo "<script>alert('Usuario no encontrado'); window.location.href='/entrenamiento/public/viewlogin.php';</script>";
        exit;
    }
}
?>
