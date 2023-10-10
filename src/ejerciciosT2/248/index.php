<?php

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preparar Facturas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        :root {
            --text-color: #fbfbfe;
        }

        body {
            display: grid;
            place-items: center;
            margin: 0;
            padding: 0;
            width: 100vw;
            height: 100vh;
            background-color: #2b2a33;
            color: var(--text-color);
        }

        fieldset {
            padding-bottom: 10px;
        }


    </style>
</head>
<body>
<main>
    <form action="./248tickets.php" method="post" class="needs-validation
    ">
        <h1> Generar Tiket Restaurante</h1>
        <fieldset>
            <select class="form-select" name="menu" id="menu">
                <option value="breakfast">Desayuno</option>
                <option value="lunch">Comida</option>
            </select>
        </fieldset>
        <fieldset>
            <label for="amount">Precio</label>
            <input class="form-control" type="number" name="amount" id="amount" required
                   placeholder="Introduce un valor">

        </fieldset>
        <fieldset class="input-group mb-3">
            <input class="btn btn-primary" type="submit" value="Generar">
            <input class="btn btn-danger" type="reset" value="Cancelar">
        </fieldset>

    </form>
</main>
</body>
</html>