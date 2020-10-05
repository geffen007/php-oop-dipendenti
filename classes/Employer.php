<?php


require_once __DIR__ . '/../traits/Hired.php';

    class Employer extends Details {
        use Hire;
        public $level;
        public $department;
        public $hourlyWages;


    }
 ?>
