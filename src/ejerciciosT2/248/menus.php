<?php


$menu = [
    'platos' => [
        'bravas' => ['nombre' => 'Patatas Bravas', 'precio' => 3],
        'kebab' => ['nombre' => 'Kebab', 'precio' => 5],
        'Calamares-Romana' => ['nombre' => 'Calamares a la Romana', 'precio' => 5],
        'Croquetas' => ['nombre' => 'Croquetas', 'precio' => 3],
        'Ensaladilla' => ['nombre' => 'Ensaladilla', 'precio' => 5.50],
        'tostada' => ['nombre' => 'Tostada', 'precio' => 2],
        'pizza' => ['nombre' => 'Pizza', 'precio' => 2.50],
    ],
    'bebidas' => [
        'te' => ['nombre' => 'Té', 'precio' => 2],
        'cafe' => ['nombre' => 'Café', 'precio' => 2.50],
        'coca-cola' => ['nombre' => 'Coca-Cola', 'precio' => 2],
        'latino' => ['nombre' => 'Latino', 'precio' => 2.30],
        'hidromiel' => ['nombre' => 'Hidromiel', 'precio' => 4],
        'vino' => ['nombre' => 'Vino', 'precio' => 3],
        'Pinya-colada' => ['nombre' => 'Piña Colada', 'precio' => 5],
        'zumo' => ['nombre' => 'Zumo', 'precio' => 1],
    ],
    'postres' => [
        'tarta-queso' => ['nombre' => 'Tarta de Queso', 'precio' => 6],
        'brownie' => ['nombre' => 'Brownie', 'precio' => 7.50],
        'croissant' => ['nombre' => 'Croissant', 'precio' => 2],
        'gofre' => ['nombre' => 'Gofre', 'precio' => 4],
    ],
];

$desayunos = [
    'bebidas' => [
        $menu['bebidas']['te'],
        $menu['bebidas']['cafe'],
        $menu['bebidas']['coca-cola'],
        $menu['bebidas']['zumo'],
    ],
    'platos' => [$menu['platos']['tostada'],
        $menu['platos']['pizza'],
    ]
];

$comidas = [
    'bebidas' => [
        $menu['bebidas']['cafe'],
        $menu['bebidas']['coca-cola'],
        $menu['bebidas']['latino'],
        $menu['bebidas']['hidromiel'],
        $menu['bebidas']['vino'],
        $menu['bebidas']['Pinya-colada'],
    ],
    'platos' => [$menu['platos']['tostada'],
        $menu['platos']['pizza'],
    ],
    'postres' => [
        $menu['postres']['tarta-queso'],
        $menu['postres']['brownie'],
        $menu['postres']['croissant'],
        $menu['postres']['gofre']
    ]
];
?>