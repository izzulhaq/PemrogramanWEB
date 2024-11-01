<?php
namespace Traits;

trait CanFly {
    public function fly() {
        return "{$this->name} is flying!";
    }
}
?>
