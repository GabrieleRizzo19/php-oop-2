<?php 

    class Tappetino extends Prodotto {

        public $dimensione;

        public function __construct($nome, $prezzo, $categoria, $img, $dimensione)
        {
            parent::__construct($nome, $prezzo, $categoria, $img);

            $this->dimensione = $dimensione;
        }
    }

?>