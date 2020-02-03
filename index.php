<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Brendas, Modelis, Metai, 
$cars =
[
	[
		'brand' => 'audi',
		'model' => 'a4',
		'year' => 2002,
		'cost' => 22000,
	],
	[
		'brand' => 'bmw',
		'model' => 'e35',
		'year' => 2005,
		'cost' => 27000,
	],
	[
		'brand' => 'zigulys',
		'model' => '8',
		'year' => 1984,
		'cost' => 12000,
	],

];
foreach ($cars as $key => $value) {
var_dump($value['brand']);
}