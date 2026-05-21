<?php

class persona {
    public $nombre;
    public $edad;
    public $nacionalidad;
    public $cedula;
    public $tipo_musical;

    public function __construct($nombre, $edad, $nacionalidad, $cedula, $tipo_musical) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->nacionalidad = $nacionalidad;
        $this->cedula = $cedula;
        $this->tipo_musical = $tipo_musical;
    }

    public function presentarse() {
        return "Hola, soy {$this->nombre}, mi edad es {$this->edad} y soy de {$this->nacionalidad}.";
    }
}

class persona_consejal extends persona {
    public $partido_politico;
    public $presupuesto;
    public $parroquia_asignada;

    // Añadimos los parámetros necesarios para el padre y para el hijo
    public function __construct($nombre, $edad, $nacionalidad, $cedula, $tipo_musical, $partido_politico, $presupuesto, $parroquia_asignada) {
        // Pasamos al padre exactamente lo que necesita en el orden correcto
        parent::__construct($nombre, $edad, $nacionalidad, $cedula, $tipo_musical);
        
        // Asignamos las propiedades exclusivas del concejal
        $this->partido_politico = $partido_politico;
        $this->presupuesto = $presupuesto;
        $this->parroquia_asignada = $parroquia_asignada;
    }

    public function dar_discurso() {
        return "Como su próximo concejal de la parroquia {$this->parroquia_asignada}, asfaltaré la vía pública.";
    }

    public function ejecutar_campaña() {
        // Corregido: tipo_musical (con 'l' al final)
        return "Reproduciendo música de género: {$this->tipo_musical}.";
    }
}

#crear objeto

$alumnocandidato = new persona_consejal("cesar palencia","22","maracaibo","loba","primero justicia","1000$$"),
echo"perfil del candidato";
echo $alumnocandidato->dar_discurso();
?>