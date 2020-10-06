<?php
    class Details {
        protected $name;
        protected $surname;
        protected $number;


        protected function __construct($_name, $_surname, $_number) {

            if (empty($_name)) {
                die('nome mancante');
            } elseif (!is_string($_name)) {
                 die('non hai passato un valore di tipo stringa, errore');
            }

            if (empty($_surname)) {
                die('cognome mancante');
            } elseif (!is_string($_name)) {
                die('non hai passato un valore di tipo stringa, errore');
            }

            if (empty($_number)) {
                die('matricola mancante');
            }elseif (!is_int($_number)) {
                die('non hai passato un valore di tipo int, errore');
            }


            $this->name = $_name;
            $this->surname = $_surname;
            $this->number = $_number;
        }

        public function setName($_name){
            if(!is_string($_name)){
                die('non hai passato un valore di tipo stringa, errore');
            }
            $this->name = $_name;
        }
        public function setSurname($_surname){
            if(!is_string($_surname)){
                die('non hai passato un valore di tipo stringa, errore');
            }
            $this->surname = $_surname;
        }
        public function setNumber($_number){
            if (!is_int($_number)) {
                die('non hai passato un valore di tipo int, errore');
            }
            $this->number = $_number;
        }

        public function getName(){
            return $this->name;
        }
        public function getSurname(){
            return $this->surname;
        }
        public function getNumber(){
            return $this->number;
        }
    }
 ?>
