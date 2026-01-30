<?php
interface iGestor {
    public function obtenerTodos();
    public function guardar($obj);
    public function eliminar($id);
}
