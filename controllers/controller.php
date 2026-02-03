<?php
class Controller {

    private iGestor $gestor;

    public function __construct(iGestor $gestor) {
        $this->gestor = $gestor;
    }

    public function index() {
        $pagina = $_GET['page'] ?? 1;
        $porPagina = 5;

        $entidades = $this->gestor->obtenerTodos();
        $total = count($entidades);

        $inicio = ($pagina - 1) * $porPagina;
        $entidadesPagina = array_slice($entidades, $inicio, $porPagina);

        include 'views/listar.php';
    }

    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $id = uniqid();
            $tipo = $_POST['tipo'];
            $nombre = $_POST['nombre'];
            $planeta = $_POST['planeta'];
            $estabilidad = (int)$_POST['estabilidad'];

            if ($tipo === 'vida') {
                $entidad = new FormaDeVida(
                    $id, $nombre, $planeta, $estabilidad, $_POST['dieta']
                );
            } elseif ($tipo === 'mineral') {
                $entidad = new MineralRaro(
                    $id, $nombre, $planeta, $estabilidad, $_POST['dureza']
                );
            } else {
                $entidad = new ArtefactoAntiguo(
                    $id, $nombre, $planeta, $estabilidad, $_POST['antiguedad']
                );
            }

            $this->gestor->guardar($entidad);
            header("Location: index.php");
            exit;
        }

        include 'views/form.php';
    }

    public function eliminar() {
        $id = $_GET['id'];
        $this->gestor->eliminar($id);
        header("Location: index.php");
        exit;
    }
}
