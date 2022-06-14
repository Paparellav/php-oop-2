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

$Vitantonio = new User("Vitantonio", "vitopap@gmail.com", 121545459865, true, true);
$Vitantonio->addToCart($pet_accessory);
$Vitantonio->addToCart($pet_food);
$Vitantonio->addToCart($pet_food);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-commerce fasullo</title>
  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <main>
    <div class="container">
      <section class="section_1">
        <h2>Prodotti disponibili:</h2>
        <small>
          <?php echo $pet_food->getSomeInfo(); ?>
        </small>
        <small>
          <?php echo $pet_toy->getSomeInfo(); ?>
        </small>
        <small>
          <?php echo $pet_accessory->getSomeInfo(); ?>
        </small>
        <small>
          <?php echo $pet_accessory2->getSomeInfo(); ?>
        </small>
      </section>

      <section class="section_2">
        <h2>Ciao <?php echo $Vitantonio->name; ?>. Ecco il tuo carrello:</h2>
        <ul>
          <?php foreach ($Vitantonio->cart as $item) { ?>
            <li>
              <small>
                <?php echo $item->getSomeInfo(); ?>
              </small>
            </li>
            <br>
          <?php } ?>
        </ul>
      </section>
      
    </div>
    <section class="section_3">
      <h2>Totale: € <?php echo $Vitantonio->getTotalPrice(); ?></h2>
      <h3>
        <?php echo $Vitantonio->checkCDC(); ?>
      </h3>
    </section>
  </main>
</body>

</html>