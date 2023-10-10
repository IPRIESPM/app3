<?php
global $comidas;
include_once("./menus.php");
include_once("./functions.php");

// Get data from user
$amount = $_POST["amount"];
$user_menu = $_POST["menu"];

// Prepare order
$total = generateRandomBill($amount);
$order = prepareOrder($total, $user_menu);

echo "<p> Total pedido $amount €</p>";

// Prepare Drinks
$totalDrinks = generateProducts("bebidas", $order["drinks"], $comidas);

// Prepare Dishes
$totalDishes = generateProducts("platos", $order["dishes"], $comidas);

// Prepare Desserts
$totalDesserts = generateProducts("postres", $order["desserts"], $comidas);


$totalOfPrepared = $totalDrinks["total"] + $totalDishes["total"] + $totalDesserts["total"];
echo "<p> Total: $totalOfPrepared €";