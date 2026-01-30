<?php
class formadevida extends claseabstracta {
    private $dieta;

    public function __construct($id, $nombre, $planeta, $estabilidad, $dieta) {
        parent::__construct($id, $nombre, $planeta, $estabilidad);
        $this->dieta = $dieta;
    }

    public function reaccionar() {
        return "Pulso electromagnético";
    }

    public function getExtra() {
        return $this->dieta;
    }
}
