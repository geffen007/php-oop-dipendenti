<?php
require_once 'classes/Details.php';
require_once 'classes/Employer.php';
require_once 'classes/Management.php';

$emp1 = new Employer('qwerty', 'uiop', 55, 2, 'marketing', '10/10/2020');
var_dump($emp1);


try {
echo $emp1->setLevel(2);
echo "il livello è il " . $emp1->getLevel();
} catch (Exception $e) {
echo 'Eccezione: ' . $e->getMessage();
}
