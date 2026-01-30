<?php
class controller implements iGestor {

    public function obtenerTodos() {
        return $_SESSION["datos"];
    }

    public function guardar($obj) {
        $_SESSION["datos"][$obj->getId()] = $obj;
    }

    public function eliminar($id) {
        unset($_SESSION["datos"][$id]);
    }
}
