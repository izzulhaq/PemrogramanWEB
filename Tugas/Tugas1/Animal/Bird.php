<?php
namespace Animal;

use Traits\CanFly;

class Bird extends Unggas {
    use CanFly;

    public function sound() {
        return "Chip chip!";
    }

    public function __toString() {
        return "This is a bird named {$this->name}, aged {$this->age}.";
    }
}
?>
