<?php
require_once 'Animal/Unggas.php';
require_once 'Traits/CanFly.php';
require_once 'Animal/Bird.php';

use Animal\Bird;

$bird = new Bird("Parrot", 3);

echo $bird->getName();
echo "\n";
echo $bird->sound();
echo "\n";
echo $bird->fly();
echo "\n";
echo $bird;
?>
