<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="../styles/Nav.css">
    <link rel="stylesheet" href="../styles/Footer.css">
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

<main class="container-md align-items-center">
    <br><br>
    <header>
        <h1 class="text-center" >Regístrate</h1>
        <h2></h2>
    </header>
    <section class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="../src/signin.php" method="post">
                    <div class="form-group">
                        <label for="cedula">Cédula:</label>
                        <input type="number" class="form-control col-12" id="cedula" name="cedula" placeholder="Ingresa tu cédula" required>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control col-12" id="nombre" name="nombre" placeholder="Ingresa tu nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido:</label>
                        <input type="text" class="form-control col-12" id="apellido" name="apellido" placeholder="Ingresa tu apellido" required>
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono:</label>
                        <input type="tel" class="form-control col-12" id="telefono" name="telefono" placeholder="Ingresa tu teléfono" required>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo Electrónico:</label>
                        <input type="email" class="form-control col-12" id="correo_electronico" name="correo_electronico" placeholder="Ingresa tu correo electrónico" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input type="password" class="form-control col-12" id="contrasena" name="contrasena" placeholder="Ingresa tu contraseña" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                </form>
            </div>
        </div>
    </section>
</main>

<br>

<footer>
    <h2>ORIGO</h2>
    <p>El software de entrenamiento de personal es el adecuado para formar de forma correcta al nuevo personal de HomeCenter</p>
    <section class="InfoMembers"> 
        <div>
            <p>HomeCenter - All Rigths Reseverd - 2023 </p>  
        </div>
    </section>
</footer>
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs
