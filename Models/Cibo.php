<?php 

    class Cibo extends Prodotto {

        public $gusto;

        public function __construct($nome = 'Croccantini', $prezzo = '0', $gusto = 'Pollo', $categoria)
        {
            parent::__construct($nome, $prezzo, $categoria);

            $this->gusto = $gusto;
        }
    }

?>