<?php
global $comidas;
include_once("./menus.php");
include_once("./functions.php");

if (isset($_POST["amount"], $_POST["menu"])) {
    $amount = htmlspecialchars($_POST["amount"]);
    $user_menu = htmlspecialchars($_POST["menu"]);

    if (!is_numeric($amount)) {
        echo "Amount is not a number!";
        exit();
    }

    $total = generateRandomBill($amount);

    $totalDrinks = generateProducts("bebidas", $total["drinks"], $comidas);
    $totalDishes = generateProducts("platos", $total["dishes"], $comidas);
    $totalDesserts = generateProducts("postres", $total["desserts"], $comidas);

    $totalOfPrepared = $totalDrinks["total"] + $totalDishes["total"] + $totalDesserts["total"];

    printTicket($totalDrinks, $totalDishes, $totalDesserts);
} else {
    echo "Form data is incomplete!";
}
