<?php 

    class Cibo extends Prodotto {

        public $gusto;

        public function __construct($nome = 'Croccantini', $prezzo = '0', $gusto = 'Pollo')
        {
            parent::__construct($nome, $prezzo);

            $this->gusto = $gusto;
        }
    }

?>