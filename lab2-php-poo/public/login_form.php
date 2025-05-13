<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card custom-card shadow-lg">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Inicio de Sesión</h4>
                    </div>
                    <div class="card-body">
                        <form action="../sesiones/login.php" method="POST">
                            <div class="mb-3">
                                <label for="usuario" class="form-label">Nombre de Usuario</label>
                                <input type="text" class="form-control" id="usuario" name="usuario" required>
                            </div>
                            <div class="mb-3">
                                <label for="correo" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="correo" name="correo" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Ingresar</button>
                        </form>
                    </div>
                    <div class="card-footer text-muted text-center">
                        EXAMEN 02
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
