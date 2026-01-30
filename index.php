<?php
require_once "autoload.php";

$c = new controller();

if (isset($_POST["guardar"])) {
    $id = $_POST["id"];
    $n = $_POST["nombre"];
    $p = $_POST["planeta"];
    $e = $_POST["estabilidad"];
    $x = $_POST["extra"];

    if ($_POST["tipo"] == "vida") {
        $obj = new formadevida($id,$n,$p,$e,$x);
    }
    if ($_POST["tipo"] == "mineral") {
        $obj = new mineralraro($id,$n,$p,$e,$x);
    }
    if ($_POST["tipo"] == "artefacto") {
        $obj = new artefactoantiguo($id,$n,$p,$e,$x);
    }
    $c->guardar($obj);
}

if (isset($_GET["del"])) {
    $c->eliminar($_GET["del"]);
}

$datos = $c->obtenerTodos();

include "views/form.php";
include "views/listar.php";
