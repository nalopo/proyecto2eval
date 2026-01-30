<?php
session_start();

spl_autoload_register(function ($clase) {
    $rutas = [
        "models/$clase.php",
        "controllers/$clase.php"
    ];
    foreach ($rutas as $ruta) {
        if (file_exists($ruta)) {
            require_once $ruta;
        }
    }
});

if (!isset($_SESSION["datos"])) {
    $_SESSION["datos"] = [];
}
