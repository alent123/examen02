<?php
session_start();
require_once '../clases/Usuario.php';

if (!isset($_SESSION['usuario']) || !isset($_SESSION['correo'])) {
    header("Location: ../public/login_form.php");
    exit;
}

$usuario = new Usuario($_SESSION['usuario'], $_SESSION['correo']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card custom-card">
            <div class="card-body">
                <h3 class="card-title">Bienvenid@, <?php echo htmlspecialchars($usuario->nombre); ?>!</h3>
                <p class="card-text"><?php echo $usuario->saludar(); ?></p>
                <a href="logout.php" class="btn btn-danger">Cerrar sesión</a>
                <a href="../public/usuarios.php" class="btn btn-secondary">Ver Usuarios</a>
            </div>
        </div>
    </div>
</body>
</html>
