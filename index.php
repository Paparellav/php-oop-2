<?php
require_once __DIR__ . "/Product.php";

$pet_food = new Product("PetFood", "Mangime di alta qualità per gli animali", 5);
var_dump($pet_food);
?>