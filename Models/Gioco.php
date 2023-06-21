<?php 

    class Gioco extends Prodotto {

        public $colore;

        public function __construct($nome = 'Gioco', $prezzo = '0', $categoria, $img, $colore = 'Bianco')
        {
            parent::__construct($nome, $prezzo, $categoria, $img);

            $this->colore = $colore;
        }
    }

?>