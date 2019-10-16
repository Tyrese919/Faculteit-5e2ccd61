<?php

echo "Van welk getal wil je de faculteit weten?".PHP_EOL;
$faculteit = readline();
$totaal = 1;

for ($i=1; $i <= $faculteit ; $i++) {
  $totaal = $i * $totaal;
}

echo "dit is jou andwoord ", $totaal;

 ?>
