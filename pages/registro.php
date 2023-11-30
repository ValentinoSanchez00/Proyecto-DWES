<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Proyecto Fútbol</title>
    <!-- Enlaces a las hojas de estilo CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/registro.css">
</head>
<body>
    <!-- Contenedor principal -->
    <div class="contenedor">
        <!-- Sección principal -->
        <main class="main">
            <!-- Título principal -->
            <h1 class="main__h1">REGÍSTRATE</h1>
            <!-- Formulario de registro -->
            <form class="main__form" action="../index.php" method="post">
                <!-- Sección de datos personales -->
                <div class="d-flex mb-3 mt-3">
                    <div class="form-group right">
                        <label class="form__label">Nombre</label>
                        <!-- Campo de entrada para el nombre -->
                        <input maxlength="30" type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label class="form__label">Apellido</label>
                        <!-- Campo de entrada para el apellido -->
                        <input maxlength="30" type="text" class="form-control" id="apellidos" name="apellidos" required>
                    </div>
                </div>

                <!-- Sección de información adicional -->
                <div class="d-flex mb-3 mt-3">
                    <div class="form-group right">
                        <label class="form__label">DNI:</label>
                        <!-- Campo de entrada para el DNI -->
                        <input maxlength="10" type="text" class="form-control" id="dni" name="dni" required>
                    </div>
                    <div class="form-group mb-3 w-50">
                        <label class="form__label">Dorsal:</label>
                        <!-- Campo de entrada para el dorsal -->
                        <input min="1" max="99" type="number" class="form-control" id="dorsal" name="dorsal" required>
                    </div>
                </div>

                <!-- Sección de credenciales -->
                <div class="d-flex mb-3 mt-3">
                    <div class="form-group right">
                        <label class="form__label">Usuario:</label>
                        <!-- Campo de entrada para el nombre de usuario -->
                        <input maxlength="30" type="text" class="form-control" id="usuario" name="usuario" required>
                    </div>                   
                    <div class="form-group mb-3">
                        <label class="form__label">Correo electrónico:</label>
                        <!-- Campo de entrada para el correo electrónico -->
                        <input maxlength="50" type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>

                <!-- Sección de contraseña -->
                <div class="form-group mb-3">
                    <label class="form__label">Contraseña:</label>
                    <!-- Campo de entrada para la contraseña -->
                    <input maxlength="10" type="password" class="form-control" id="contrasena" name="contrasena" required>
                </div>

                <!-- Botones de acción -->
                <div class="d-flex mb-3 mt-3">
                    <!-- Enlace para volver -->
                    <a class="btn btn-primary bg-success form__button mb-3" href="../index.php">Volver</a>
                    <!-- Botón para enviar el formulario de registro -->
                    <button type="submit" class="btn btn-primary bg-success form__button mb-3">Registrarse</button>
                </div> 
            </form>
        </main>
    </div>
</body>
</html>
