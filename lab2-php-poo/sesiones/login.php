<?php
session_start();

$usuario = $_POST['usuario'] ?? '';
$correo = $_POST['correo'] ?? '';

$usuariosPermitidos = [
    ['nombre' => 'Ana Pérez', 'correo' => 'ana@example.com'],
    ['nombre' => 'Juan Ramírez', 'correo' => 'juan@example.com'],
    ['nombre' => 'Laura Gutiérrez', 'correo' => 'laura@example.com']
];

$esValido = false;
foreach ($usuariosPermitidos as $permitido) {
    if ($usuario === $permitido['nombre'] && $correo === $permitido['correo']) {
        $esValido = true;
        break;
    }
}

if ($esValido) {
    require_once '../config/db.php';

    $stmt = $pdo->prepare("SELECT id FROM usuarios WHERE nombre = :nombre AND correo = :correo");
    $stmt->execute([":nombre" => $usuario, ":correo" => $correo]);

    if ($stmt->rowCount() === 0) {
        $insert = $pdo->prepare("INSERT INTO usuarios (nombre, correo) VALUES (:nombre, :correo)");
        $insert->execute([":nombre" => $usuario, ":correo" => $correo]);
    }

    $_SESSION['usuario'] = $usuario;
    $_SESSION['correo'] = $correo;

    header("Location: perfil.php");
    exit;
} else {
    echo "<div style='text-align:center; margin-top:50px; font-family:sans-serif'>
            <h2>Usuario o correo inválido.</h2>
            <a href='../public/login_form.php' style='color:blue;'>Volver</a>
          </div>";
}
?>
