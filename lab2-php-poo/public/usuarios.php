<?php
require_once '../config/db.php';

$sql = "SELECT nombre FROM usuarios";
$stmt = $pdo->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuarios Registrados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <div class="container mt-5">
        <h3 class="mb-4">Usuarios Registrados</h3>
        <ul class="list-group">
            <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                <li class="list-group-item"><?php echo htmlspecialchars($row['nombre']); ?></li>
            <?php endwhile; ?>
        </ul>
        <div class="mt-3">
            <a href="login_form.php" class="btn btn-primary">Volver al Login</a>
            <a href="../sesiones/perfil.php" class="btn btn-success">Ir a mi Perfil</a>
            <a href="../sesiones/logout.php" class="btn btn-danger">Cerrar sesión</a>
        </div>
    </div>
</body>
</html>
