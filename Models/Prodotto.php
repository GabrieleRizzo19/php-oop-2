<?php 

    class Prodotto {

        public $nome;
        public $prezzo;
        public $categoria;
        public $img;

        public function __construct($nome = 'Prodotto', $prezzo = '0', Categoria $categoria, $img = './img/placeholder.jpg')
        {
            $this->nome = $nome;
            $this->prezzo = $prezzo;
            if($categoria instanceof Categoria){
                $this->categoria = $categoria;
            }else{
                die("La categoria deve appartenere alla classe categoria");
            }
            $this->img = $img;
        }
    }

?>