<?php 

    class Prodotto {

        public $nome;
        public $prezzo;

        public function __construct($nome = 'Prodotto', $prezzo = '0')
        {
            $this->nome = $nome;
            $this->prezzo = $prezzo;
        }
    }

?>