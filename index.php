<?php

//"1. ekrane atvaizduokite teksta 'Sios dienos data - ' ir su php atvaizduokite sios dienos data"

//"2. ekrane atvaizduokite sakini is 5<zodziu. Po kiekvie"
//$string = 'Sios dienos data - ';
//$data = date('Y/m/d');

//$result = $string . $data;

//print $result;
//"2. sukurti sakini is 5< zodziu. po kiekvieno zodzio yra padetas taskas. jums reikia naudoti bazines php funkcijas tuos taskus pakeisti i tarpus."


//"3. Sukurti stringa kuris susidarytu is sakinio. Turi jame egzistuoti didziosios ir mazosios raides. Panaudoti php default'ine funkcija kuri visas stringo raides paverstu didziosiomis arba mazosiomis"
$targetUp = 'Pirmadienis';

switch (strtoupper($targetUp)) {
	case 'PIRMADIENIS':
		PRINT 'Pirmadienis';
		break;
	case 'ANTRADIENIS':
		PRINT 'Antradienis';
		break;
	case 'TRECIADIENIS':
		PRINT 'Treciadienis';
		break;
	case 'KETVIRTADIENIS':
		PRINT 'Ketvirtadienis';
		break;
	case 'PENKTADIENIS':
		PRINT 'Penktadienis';
		break;
	case 'SESTADIENIS':
		PRINT 'Sestadienis';
		break;
	case 'SEKMADIENIS':
		PRINT 'Sekmadienis';
		break;
default:
	print 'Nera tokios savaites dienos';
	break;
}