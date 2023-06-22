<?php 

    class Cibo extends Prodotto {

        public $gusto;

        public function __construct($nome, $prezzo, $categoria, $img, $gusto)
        {
            parent::__construct($nome, $prezzo, $categoria, $img);

            $this->gusto = $gusto;
        }
    }

?>