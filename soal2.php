<?php
abstract class Boat implements BoatFunction
{
    private $name;
    private $capacity;

    protected function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }

    protected function getCapacity()
    {
        return $this->capacity;
    }
    protected function setName($name)
    {
        $this->name = $name;
    }

    protected function getName()
    {
        return $this->name;
    }

    public function getBoat()
    {
        echo "\n{$this->getName()} : This type of boat is a {$this->getName()} with a capacity {$this->getCapacity()}\n";
    }
}

interface BoatFunction
{
    public function getBoat();
}


class MotorBoat extends Boat
{
    public function __construct($name, $capacity)
    {
        $this->setName($name);
        $this->setCapacity($capacity);
        $this->getBoat();
    }
}
class SailBoat extends Boat
{
    public function __construct($name, $capacity)
    {
        $this->setName($name);
        $this->setCapacity($capacity);
        $this->getBoat();
    }
}
class CruiseShip extends Boat
{
    public function __construct($name, $capacity)
    {
        $this->setName($name);
        $this->setCapacity($capacity);
        $this->getBoat();
    }
}

// class SailBoat extends boat implements BoatFunction {

// }

$motorBoat = new MotorBoat("Motor Boat", 20);
$sailBoat = new SailBoat("Sail Boat", 20);
$cruiseShip = new CruiseShip("Cruise Ship", 20);
