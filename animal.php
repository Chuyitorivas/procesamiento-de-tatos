<?php

class Ave {
    // Propiedades
    protected $nombre;
    protected $especie;
    protected $peso;
    protected $edad;

    // Constructor corregido
    public function __construct($nombre, $especie, $peso, $edad) {
        $this->nombre = $nombre;
        $this->especie = $especie;
        $this->peso = $peso;
        $this->edad = $edad;
    }

    // Método para obtener los datos
    public function obtenerDatos() {
        return [
            "nombre"  => $this->nombre,
            "especie" => $this->especie,
            "peso"    => $this->peso,
            "edad"    => $this->edad,
        ];
    }
}

// Creación del objeto (Instanciación)
$animalNuevo = new Ave("Jefe Pinguino", "Pinguino", "20kg", "5 años");

// Mostrar resultados
print_r($animalNuevo->obtenerDatos());

?>