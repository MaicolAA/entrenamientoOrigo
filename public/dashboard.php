<?php
require_once '../src/user.php';
session_start();

$user = $_SESSION['user'];
$nombre = $user->getNombre();
$apellido = $user->getApellido();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../styles/Footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>

<div class="container-fluid ">
    <div class="row">
        <nav class="col-md-3 bs-primary-bg-subtle text-center">
            <img src="../img//logo.png" alt="Logo" class="img-fluid mt-3">
            <h2 class="text-center mt-3">Homecenter Entrenamiento</h2>
            <button class="btn btn-warning mt-3" onclick="window.location.href='viewwelcome.php'">
                <i class="bi bi-box-arrow-right"></i>
                <p>Cerrar sesión</p>
            </button>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-9 px-md-4">
            <section class="mt-3">
                <h3>Hola <?php echo $nombre . $apellido; ?> bienvenido a tu entrenamiento</h3>
            </section>
        </main>
    </div>


    <br><br><br>
    <footer class="mt-auto text-center footer">
        <h2 class="text-center">ORIGO</h2>
        <p class="text-center">El software de entrenamiento de personal es el adecuado para formar de forma correcta al nuevo personal de HomeCenter</p>
        <section class="InfoMembers text-center">
            <p>HomeCenter - All Rights Reserved - 2023</p>
        </section>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
