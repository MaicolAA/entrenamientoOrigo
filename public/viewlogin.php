


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="../styles/Nav.css">
    <link rel="stylesheet" href="../styles/Footer.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
</head>
<body>
    
<nav class="NavHome">
    <div>
        <button onclick="window.location.href='viewwelcome.php'">
            <img src="../img/logo.png" alt="Logo" />
            <p>HomeCenter</p>
        </button>
    </div>
    <section>
        <button onclick="window.location.href='viewlogin.php'">Iniciar Sesion</button>
        <button onclick="window.location.href='viewsignin.php'">Registrarse</button>
    </section>
</nav>

<br><br>

<main class="container-md">
    <br><br>
    <header>
        <h1 class="text-center">Inicia Sesión</h1>
    </header>
    <section class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                
                <form action="/entrenamiento/src/login.php" method="post">
                    <div class="form-group">
                        <label for="correo_electronico">Nombre de usuario:</label>
                        <input type="text" class="form-control col-12" id="correo_electronico" name="correo_electronico" placeholder="Ingresa tu nombre de usuario">
                    </div>
                    <div class="form-group">
                        <label for="contrasena">Contraseña:</label>
                        <input type="password" class="form-control col-12"  id="contrasena" name="contrasena" placeholder="Ingresa tu contraseña">
                    </div>
                    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </section>
</main>

<br>
<footer>
    <h2 class="text-center">ORIGO</h2>
    <p class="text-center">El software de entrenamiento de personal es el adecuado para formar de forma correcta al nuevo personal de HomeCenter</p>
    <section class="InfoMembers"> 
        <div>
            <p>HomeCenter - All Rigths Reseverd - 2023 </p>  
        </div>
    </section>
</footer>

</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
