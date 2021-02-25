<?php


class Cow {
    public $milk;
    public function getId() {

        $this-> id = uniqid();
}
public function __construct() {

$this-> milk = rand(8,12);
$this->getId();
}

}

$cow = new Cow();


class Chicken {
public $eggs;
public $id;


public function getId() {

$this-> id = uniqid();
}

public function __construct() {

$this-> eggs = rand(0,1);
$this->getId();
}

}

$chicken = new Chicken();





class Farm {
public $totalMilk;
public $cows;
public $totalEggs;
public $chicken;

public function __construct(){
$this->cows =[];
$this->addCows();
$this->chickens =[];
$this->addChickens();


for ($index = 0; $index<count($this->cows); $index++) {
$cow = $this->cows[$index];


$this->totalMilk += $cow->milk;
}

for ($index = 0; $index<count($this->chickens); $index++) {
$chicken = $this->chickens[$index];


$this->totalEggs += $chicken->eggs;
}

}


public function addCows()
{
for ($index=0; $index < 10; $index++) {
array_push($this->cows, new Cow());
}
}

public function addChickens()
{
for ($index=0; $index < 10; $index++) {
array_push($this->chickens, new Chicken());
}
}
}

$farm = new Farm();
echo $farm -> totalMilk.' литров.  ';
echo $farm -> totalEggs.' штук';