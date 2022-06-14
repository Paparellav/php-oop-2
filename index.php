<?php
require_once __DIR__ . "/Food.php";
require_once __DIR__ . "/Toy.php";
require_once __DIR__ . "/Accessory.php";
require_once __DIR__ . "/Utente.php";

$pet_food = new Food("PetFood", "Mangime di alta qualità per gli animali", 3.99, "20/02/2023");
$pet_toy = new Toy("Trixie", "Corda da masticare e tirare per cani", 5.99, 1250);
$pet_accessory = new Accessory("Localizzatore GPS", "Collare con CHIP di geolocalizzazione per cani", 49.99, "Huawei");
$pet_accessory2 = new Accessory("Targhetta", "Targhetta con incisione nome cane", 6.99, "Amici a quattro zampe");

// Utente

$Vitantonio = new User("Vitantonio", "vitopap@gmail.com", 121545459865, false, true);
$Vitantonio->addToCart($pet_accessory);
$Vitantonio->addToCart($pet_food);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2>Prodotti disponibili</h2>
  <small>
    <?php echo $pet_food->getSomeInfo(); ?>
  </small>
  <br>
  <br>
  <small>
    <?php echo $pet_toy->getSomeInfo(); ?>
  </small>
  <br>
  <br>
  <small>
    <?php echo $pet_accessory->getSomeInfo(); ?>
  </small>
  <br>
  <br>
  <small>
    <?php echo $pet_accessory2->getSomeInfo(); ?>
  </small>

  <h2>Ciao <?php echo $Vitantonio->name; ?>. Ecco il tuo carrello:</h2>
  <ul>
    <?php foreach ($Vitantonio->cart as $item) { ?>
      <li>
        <?php echo $item->getSomeInfo(); ?>
      </li>
      <br>
    <?php } ?>
  </ul>
  <h3>Totale: € <?php echo $Vitantonio->getTotalPrice(); ?></h3>
</body>

</html>