<?php 

    class Cibo extends Prodotto {

        public $gusto;

        public function __construct($nome = 'Croccantini', $prezzo = '0', $categoria, $img, $gusto = 'Pollo')
        {
            parent::__construct($nome, $prezzo, $categoria, $img);

            $this->gusto = $gusto;
        }
    }

?>