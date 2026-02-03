<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo Expediente</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
            background: radial-gradient(circle at top, #1e293b, #020617);
            color: #e5e7eb;
        }

        .form-container {
            width: 420px;
            margin: 60px auto;
            background: #020617;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.6);
            border-top: 4px solid #f59e0b;
        }

        h1 {
            text-align: center;
            color: #fbbf24;
            margin-bottom: 25px;
            letter-spacing: 1px;
        }

        label {
            font-weight: bold;
            margin-top: 12px;
            display: block;
        }

        input, select {
            width: 100%;
            padding: 9px;
            margin-top: 5px;
            border-radius: 5px;
            border: none;
            background: #1f2937;
            color: #e5e7eb;
        }

        input:focus, select:focus {
            outline: 2px solid #f59e0b;
        }

        button {
            margin-top: 25px;
            width: 100%;
            padding: 12px;
            background: #f59e0b;
            color: #111827;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: #fbbf24;
        }

        .volver {
            text-align: center;
            margin-top: 15px;
        }

        .volver a {
            color: #9ca3af;
            text-decoration: none;
        }

        .volver a:hover {
            color: #fbbf24;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h1>Nuevo Expediente</h1>

    <form method="POST" action="index.php?accion=crear">

        <label>Tipo de entidad</label>
        <select name="tipo" required>
            <option value="vida">Forma de vida</option>
            <option value="mineral">Mineral raro</option>
            <option value="artefacto">Artefacto antiguo</option>
        </select>

        <label>Nombre</label>
        <input type="text" name="nombre" required>

        <label>Planeta de origen</label>
        <input type="text" name="planeta" required>

        <label>Nivel de estabilidad (1–10)</label>
        <input type="number" name="estabilidad" min="1" max="10" required>

        <label>Dieta (forma de vida)</label>
        <input type="text" name="dieta">

        <label>Dureza (mineral)</label>
        <input type="number" name="dureza">

        <label>Antigüedad (artefacto)</label>
        <input type="number" name="antiguedad">

        <button type="submit">Guardar expediente</button>
    </form>

    <div class="volver">
        <a href="index.php">← Volver al listado</a>
    </div>
</div>

</body>
</html>
