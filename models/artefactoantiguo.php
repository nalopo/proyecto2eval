<?php
class artefactoantiguo extends claseabstracta {
    private $antiguedad;

    public function __construct($id, $nombre, $planeta, $estabilidad, $antiguedad) {
        parent::__construct($id, $nombre, $planeta, $estabilidad);
        $this->antiguedad = $antiguedad;
    }

    public function reaccionar() {
        return "Mensaje antiguo";
    }

    public function getExtra() {
        return $this->antiguedad;
    }
}
