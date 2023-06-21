<?php 

    class Gioco extends Prodotto {

        public $colore;

        public function __construct($nome = 'Gioco', $prezzo = '0', $colore = 'Bianco')
        {
            parent::__construct($nome, $prezzo);

            $this->colore = $colore;
        }
    }

?>