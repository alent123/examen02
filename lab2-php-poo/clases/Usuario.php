<?php
require_once 'Persona.php';

class Usuario extends Persona {
    public $rol;

    public function __construct($nombre, $correo, $rol = 'Usuario') {
        parent::__construct($nombre, $correo);
        $this->rol = $rol;
    }

    public function saludar() {
        return "Hola, soy $this->nombre y tengo el rol de $this->rol.";
    }
}
?>
