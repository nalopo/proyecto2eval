<?php
class mineralraro extends claseabstracta {
    private $dureza;

    public function __construct($id, $nombre, $planeta, $estabilidad, $dureza) {
        parent::__construct($id, $nombre, $planeta, $estabilidad);
        $this->dureza = $dureza;
    }

    public function reaccionar() {
        return "Brillo azul";
    }

    public function getExtra() {
        return $this->dureza;
}    
}
