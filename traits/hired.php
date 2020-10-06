<?php
    trait Hire {
        protected $hiringDate;
        protected $firingDate = null;



        public function setHiringDate($_hiringDate){
            $this->hiringDate = $_hiringDate;
        }
        public function setFiringDate($_firingDate){
            $this->firingDate = $_firingDate;
        }

        public function getHiringDate(){
            return $this->hiringDate;
        }
        public function getFiringDate(){
            return $this->firingDate;
        }





    }
 ?>
