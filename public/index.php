<?
require '../vendor/autoload.php';

$cupa = new \App\Cupa();

for($i=0;$i<=10;$i++){
	$cupa->addWater();
}

//print_r($cupa->getData());
//print_r($cupa->isFull());