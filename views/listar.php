<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Expedición Nova</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #0f172a;
            color: #e5e7eb;
        }

        header {
            background: linear-gradient(90deg, #111827, #1f2933);
            padding: 20px;
            text-align: center;
            border-bottom: 3px solid #f59e0b;
        }

        header h1 {
            margin: 0;
            color: #fbbf24;
            letter-spacing: 2px;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: 30px auto;
        }

        .acciones {
            text-align: right;
            margin-bottom: 15px;
        }

        .acciones a {
            background: #f59e0b;
            color: #111827;
            padding: 10px 15px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
        }

        .acciones a:hover {
            background: #fbbf24;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #020617;
            border-radius: 8px;
            overflow: hidden;
        }

        th {
            background: #1f2937;
            padding: 12px;
            text-transform: uppercase;
            font-size: 13px;
            color: #fbbf24;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #1f2937;
            text-align: center;
        }

        tr:hover {
            background: #020617cc;
        }

        .peligro {
            background: #7f1d1d;
            color: #fee2e2;
        }

        .btn-eliminar {
            color: #f87171;
            text-decoration: none;
            font-weight: bold;
        }

        .btn-eliminar:hover {
            color: #fecaca;
        }

        .paginador {
            text-align: center;
            margin-top: 20px;
        }

        .paginador a {
            color: #fbbf24;
            text-decoration: none;
            margin: 0 5px;
            padding: 6px 10px;
            border: 1px solid #f59e0b;
            border-radius: 4px;
        }

        .paginador a:hover {
            background: #f59e0b;
            color: #111827;
        }
    </style>
</head>
<body>

<header>
    <h1>EXPEDICIÓN NOVA</h1>
</header>

<div class="container">

    <div class="acciones">
        <a href="index.php?accion=crear">➕ Nuevo expediente</a>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Planeta</th>
            <th>Estabilidad</th>
            <th>Reacción</th>
            <th>Acción</th>
        </tr>

        <?php foreach ($entidadesPagina as $e): ?>
        <tr class="<?= $e->getNivelEstabilidad() < 3 ? 'peligro' : '' ?>">
            <td><?= $e->getId() ?></td>
            <td><?= $e->getNombre() ?></td>
            <td><?= $e->getPlanetaOrigen() ?></td>
            <td><?= $e->getNivelEstabilidad() ?></td>
            <td><?= $e->getReaccion() ?></td>
            <td>
                <a class="btn-eliminar" href="index.php?accion=eliminar&id=<?= $e->getId() ?>">
                    Eliminar
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <div class="paginador">
        <?php for ($i = 1; $i <= $totalPaginas; $i++): ?>
            <a href="index.php?page=<?= $i ?>"><?= $i ?></a>
        <?php endfor; ?>
    </div>

</div>

</body>
</html>
