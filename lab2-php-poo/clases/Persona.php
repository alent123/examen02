<?php
class Persona {
    public $nombre;
    public $correo;

    public function __construct($nombre, $correo) {
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function mostrarInfo() {
        return "Nombre: $this->nombre, Correo: $this->correo";
    }

    public function saludar() {
        return "Hola, soy $this->nombre.";
    }
}
?>
