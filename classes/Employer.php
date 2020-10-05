<?php


require_once __DIR__ . '/../traits/Hired.php';

    class Employer extends Details {
        use Hire;
        public $level;
        public $department;
        private $hourlyWages = 30;

        public function __construct($_name, $_surname, $_number,  $_level, $_department, $_hiringDate) {
            parent::__construct($_name, $_surname,$_number);
            $this->level = $_level;
            $this->department = $_department;
            $this->hiringDate = $_hiringDate;

        }
    }
 ?>
