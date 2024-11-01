<?php
namespace Animal;

abstract class Unggas {
    protected $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    abstract public function sound();

    public function getName() {
        return $this->name;
    }
}
?>
