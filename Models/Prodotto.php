<?php 

    require_once __DIR__ . '/../traits/Weightable.php';
    require_once __DIR__ . '/Categoria.php';
    class Prodotto {

        use Weightable;

        public $nome;
        public $prezzo;
        public $categoria;
        public $img;

        public function __construct($nome, $prezzo, Categoria $categoria, $img = './img/placeholder.jpg')
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

        public function getPrezzo(){
            
            if(!is_numeric($this->prezzo) || $this->prezzo < 0){
                throw new Exception('Il dato non è numerico o è minore di 0');
            }

            return "$this->prezzo €";
        }
    }

?>