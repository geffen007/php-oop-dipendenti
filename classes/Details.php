<?php
    class Details {
        protected $name;
        protected $surname;
        protected $number;


        protected function __construct($_name, $_surname, $_number) {
            if (empty($_name)) {
                die('nome mancante');
            }

            if (empty($_surname)) {
                die('cognome mancante');
            }

            if (empty($_number)) {
                die('matricola mancante');}
            // } elseif (!isnumeric($_number)){
            //     die('hai inserito la matricola in un fiormato sbagliato');
            // }

            $this->name = $_name;
            $this->surname = $_surname;
            $this->number = $_number;
        }
    }
 ?>
