## Personalización

- **Nombre**: Salas Perez Santiago Agustin 
- **Docente**: Nilton Cesar Mercado Chavez


# Sistema de Gestión de Usuarios en PHP (Examen 02)


Este proyecto es un sistema de gestión de usuarios desarrollado en PHP, utilizando Programación Orientada a Objetos (POO), herencia, polimorfismo, conexión a una base de datos MySQL mediante PDO, y manejo de sesiones en PHP.

---

## Estructura del Proyecto

lab2-php-poo/
│
├── clases/
│   ├── Persona.php
│   └── Usuario.php
│
├── config/
│   └── db.php
│
├── sesiones/
│   ├── login.php
│   ├── logout.php
│   └── perfil.php
│
├── public/
│   ├── index.php
│   ├── login_form.php
│   └── usuarios.php
│
└── assets/
    └── style.css


---

## Funcionalidades

1. **Inicio de Sesión**: Los usuarios pueden iniciar sesión utilizando sus credenciales de nombre de usuario y correo electrónico. Solo se permiten tres cuentas predefinidas.
2. **Perfil de Usuario**: Después de iniciar sesión, el usuario es redirigido a su perfil donde puede ver su información.
3. **Ver Usuarios Registrados**: Los usuarios pueden ver los nombres de otros usuarios registrados en la base de datos.
4. **Cerrar Sesión**: Los usuarios pueden cerrar sesión en cualquier momento.


---

## Requisitos

- Visual Studio
- PHP
- MySQL
- XAMPP
- Navegador

---

## Instalación

1. **Configura la Base de Datos**:
    - Crea una base de datos llamada `lab2` en XAMPP.
    - Ejecútalo con el siguiente script SQL:

    ```sql
    CREATE DATABASE IF NOT EXISTS lab2 CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
    USE lab2;

    CREATE TABLE IF NOT EXISTS usuarios (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(100) NOT NULL,
        correo VARCHAR(100) NOT NULL
    );

    -- Insertar usuarios de ejemplo
    INSERT INTO usuarios (nombre, correo) VALUES
    ('Ana Pérez', 'ana@example.com'),
    ('Juan Ramírez', 'juan@example.com'),
    ('Laura Gutiérrez', 'laura@example.com');
    ```

2. **Configura la Conexión a la Base de Datos**:
    - Abre el archivo `config/db.php` y ajusta los valores de conexión si es necesario.

3. **Sube los Archivos al Servidor**:
    - Si estás utilizando un servidor local como XAMPP
---

## Cuentas Permitidas

Las siguientes cuentas están habilitadas para iniciar sesión:

- **Usuario**: Ana Pérez  
  **Correo**: ana@example.com

- **Usuario**: Juan Ramírez  
  **Correo**: juan@example.com

- **Usuario**: Laura Gutiérrez  
  **Correo**: laura@example.com
