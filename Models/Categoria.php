<?php 

    class Categoria {

        public $nome;
        public $icon; 

        public function __construct($nome)
        {
            $this->nome = $nome;
            if($nome == 'Cane'){
                $this->icon = '<i class="fa-solid fa-dog"></i>';
            }else if($nome == 'Gatto'){
                $this->icon = '<i class="fa-solid fa-cat"></i>';
            }else{
                $this->icon = '';
            }
        }
    }

?>