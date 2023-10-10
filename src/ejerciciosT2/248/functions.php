<?php
function generateRandomBill($amount)
{
    $dishes = round($amount * 0.7, 2);
    $drinks = round($amount * 0.2, 2);
    $desserts = round($amount * 0.1, 2);
    return ['dishes' => $dishes, 'drinks' => $drinks, 'desserts' => $desserts];
}

function prepareOrder($amount, $menu)
{
    $dishes = $amount["dishes"];
    $drinks = $amount["drinks"];
    $desserts = $amount["desserts"];

    $menu = $menu == "breakfast" ? "Desayuno" : $menu;
    $menu = $menu == "lunch" ? "Comida" : $menu;
    $menu = $menu == "dessert" ? "Postre" : $menu;

    echo " Menú selecionado: $menu.";
    echo "<p> Platos: $dishes €<br> Bebidas: $drinks € <br> Postres: $desserts €";
    echo "<p>";

    return ["dishes" => $dishes, "drinks" => $drinks, "desserts" => $desserts];
}

function generateProducts($type, $amount, $menu)
{
    $total_of_generate = 0;
    $total_of_elements = [];
    while ($total_of_generate <= $amount) {
        $random_element = array_rand($menu[$type], 1);
        $nombre = $menu[$type][$random_element]['nombre'];
        $precio = $menu[$type][$random_element]['precio'];

        if (isset($total_of_elements[$nombre])) {
            // Si la bebida ya existe, incrementa la cantidad y recalcula el total
            $total_of_elements[$nombre]["cantidad"] += 1;
            $total_of_elements[$nombre]["total"] += $precio;
        } else {
            // Si la bebida no existe, añade una nueva entrada
            $total_of_elements[$nombre] = [
                "nombre" => $nombre,
                "cantidad" => 1,
                "total" => $precio
            ];
        }

        $total_of_generate += $precio;

        // Si ya hemos superado el monto, sal del bucle
        if ($total_of_generate > $amount) {
            foreach ($total_of_elements as $element) {
                echo "{$element['nombre']} - Cantidad: {$element['cantidad']} - Total: {$element['total']} €<br>";
            }
            break;
        }


    }
    $type = $type == "drinks" ? "Bebidas" : $type;
    $type = $type == "dishes" ? "Platos" : $type;
    $type = $type == "desserts" ? "Postres" : $type;

    echo "<p>Total de $type : $total_of_generate €</p>";

    return ["elementos" => $total_of_elements, "total" => $total_of_generate];
}