<?php 

    class Gioco extends Prodotto {

        public $colore;

        public function __construct($nome = 'Gioco', $prezzo = '0', $colore = 'Bianco', $categoria)
        {
            parent::__construct($nome, $prezzo, $categoria);

            $this->colore = $colore;
        }
    }

?>