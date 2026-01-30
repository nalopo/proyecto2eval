<?php
abstract class claseabstracta implements interactuable {
    protected $id;
    protected $nombre;
    protected $planeta;
    protected $estabilidad;

    public function __construct($id, $nombre, $planeta, $estabilidad) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->planeta = $planeta;
        $this->estabilidad = $estabilidad;
    }

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getPlaneta() {
        return $this->planeta;
    }

    public function getEstabilidad() {
        return $this->estabilidad;
    }
}
