<?php 

    class Tappetino extends Prodotto {

        public $dimensione;

        public function __construct($nome = 'Tappetino', $prezzo = '0', $categoria, $img, $dimensione = '60x60')
        {
            parent::__construct($nome, $prezzo, $categoria, $img);

            $this->dimensione = $dimensione;
        }
    }

?>