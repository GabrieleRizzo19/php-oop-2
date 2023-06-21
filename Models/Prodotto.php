<?php 

    class Prodotto {

        public $nome;
        public $prezzo;
        public $categoria;

        public function __construct($nome = 'Prodotto', $prezzo = '0', Categoria $categoria)
        {
            $this->nome = $nome;
            $this->prezzo = $prezzo;
            if($categoria instanceof Categoria){
                $this->categoria = $categoria->nome;
            }else{
                die("La categoria deve appartenere alla classe categoria");
            }
        }
    }

?>