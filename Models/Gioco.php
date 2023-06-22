<?php 

    class Gioco extends Prodotto {

        public $colore;

        public function __construct($nome, $prezzo, $categoria, $img, $colore)
        {
            parent::__construct($nome, $prezzo, $categoria, $img);

            $this->colore = $colore;
        }
    }

?>