<?php
abstract class Animal {

    public $id;
    public $name;
    public abstract function getProduction();

}

class Cow extends Animal {

    function __construct()
    {
        $this->id = uniqid();
        $this->name = "Cow";

    }

    public function getProduction()
    {
        return rand(8, 12);
    }
}

class Chicken extends Animal {

    function __construct()
    {
        $this->id = uniqid();
        $this->name = "Chicken";

    }

    public function getProduction()
    {
        return rand(0, 1);
    }
}

class addAnimals {

    public function createCow(): cow
    {
        return new cow;
    }

    public function createChicken(): chicken
    {
        return new chicken;
    }
}

$addAnimals = new addAnimals();

for ($i = 1; $i <= 10; $i++) {
    $animals[] = $addAnimals->createCow();
}

for ($i = 1; $i <= 20; $i++) {
    $animals[] = $addAnimals->createChicken();
}

$totalMilk=0;
$totalEggs=0;

foreach ($animals as $animal){

    if ($animal->name =='Cow') {
        $totalMilk +=$animal->getProduction();
    } else if ($animal->name =='Chicken') {
        $totalEggs +=$animal->getProduction();
    }
}
echo $totalMilk."литров"."\n";
echo $totalEggs."штук"."\n";
