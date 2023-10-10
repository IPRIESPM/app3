<?php
function generateRandomBill($amount)
{
    return [
        'dishes' => round($amount * 0.7, 2),
        'drinks' => round($amount * 0.2, 2),
        'desserts' => round($amount * 0.1, 2)
    ];
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
            $total_of_elements[$nombre]["cantidad"] += 1;
            $total_of_elements[$nombre]["total"] += $precio;
        } else {
            $total_of_elements[$nombre] = [
                "nombre" => $nombre,
                "cantidad" => 1,
                "total" => $precio
            ];
        }

        $total_of_generate += $precio;
    }

    return ["elementos" => $total_of_elements, "total" => $total_of_generate];
}

function printSection($title, $data, $lineWidth, $frame, $widthNombre, $widthCantidad, $widthTotal)
{
    $titleFormatted = sprintf("  [%s] ", $title);
    echo $frame . str_pad($titleFormatted, $lineWidth + 1, " ", STR_PAD_RIGHT) . $frame . "\r";
    foreach ($data['elementos'] as $element) {
        $formatted = sprintf("  %-{$widthNombre}s %{$widthCantidad}d %{$widthTotal}.2f € ",
            $element['nombre'],
            $element['cantidad'],
            $element['total']);
        echo $frame . str_pad($formatted, $lineWidth, " ", STR_PAD_RIGHT) . $frame . "\r";
    }
    echo "***** ------------------------------------  *****\r";
}

function printTicket($totalDrinks, $totalDishes, $totalDesserts)
{
    $lineWidth = 38;
    $widthNombre = 22;
    $widthCantidad = 2;
    $widthTotal = 8;
    $frame = "*****";

    echo "<pre>
*************************************************
*************************************************
*****            Bar Tanuki                 *****
*****          Av. mapaches, 25             *****
*****                                       *****
*****  Concepto              Uds    Total   *****
*****  -----------------------------------  *****\r";

    printSection('Bebidas', $totalDrinks, $lineWidth, $frame, $widthNombre, $widthCantidad, $widthTotal);
    printSection('Platos', $totalDishes, $lineWidth, $frame, $widthNombre, $widthCantidad, $widthTotal);
    printSection('Postres', $totalDesserts, $lineWidth, $frame, $widthNombre, $widthCantidad, $widthTotal);

    $totalAmount = $totalDrinks['total'] + $totalDishes['total'] + $totalDesserts['total'];
    $formattedTotal = sprintf("  Total: %-{$widthTotal}.2f €   ", $totalAmount);
    echo $frame . str_pad($formattedTotal, $lineWidth + 3, " ", STR_PAD_RIGHT) . $frame . "\r";

    echo "*****                                       *****
***** La atendió Mariano                    *****
***** Gracias por su visita                 *****
*************************************************
*************************************************
</pre>";
}
