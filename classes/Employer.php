<?php

require_once __DIR__ . '/../traits/Hired.php';

    class Employer extends Details {
        use Hire;
        public $level;
        public $department;
        private $hourlyWages = 30;

        public function __construct($_name, $_surname, $_number,  $_level, $_department, $_hiringDate) {
            parent::__construct($_name, $_surname,$_number);

            if (!is_int($_level)) {
                die('non hai passato un valore di tipo int, errore');
            }

            $this->level = $_level;
            $this->department = $_department;
            $this->hiringDate = $_hiringDate;
        }

        public function setLevel($_level){
            if (!is_int($_level)) {
                throw new Exception('Is not a number');
            }
            $this->level = $_level;

        }

        public function getLevel(){
            return $this->level;
        }
        public function getDepartment(){
            return $this->department;
        }



    }
 ?>
