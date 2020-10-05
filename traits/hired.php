<?php
    trait Hire {
        public $hiringDate;
        public $firingDate;

        public function hireOrFire($_hiringDate, $_firingDate) {
            if (empty($_firingDate)){
                echo "ancora assunto";
            } else {
                echo "licenziato il" . $_firingDate;
            }
        }

    }
 ?>
