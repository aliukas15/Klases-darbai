<?php

//"1. ekrane atvaizduokite teksta 'Sios dienos data - ' ir su php atvaizduokite sios dienos data"

//"2. ekrane atvaizduokite sakini is 5<zodziu. Po kiekvie"
$string = 'Sios dienos data - ';
$data = date('Y/m/d');

$result = $string . $data;

print $result;
