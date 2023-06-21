<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>PHP-OOP2</title>
    </head>
    <body>

        <?php 

            // foreach(glob("Models/*.php") as $class){
            //     require __DIR__ . $class;
            // }

            require __DIR__ . '/Models/Categoria.php';
            require __DIR__ . '/Models/Prodotto.php';
            require __DIR__ . '/Models/Cibo.php';
            require __DIR__ . '/Models/Gioco.php';
            require __DIR__ . '/Models/Tappetino.php';

            $categoriaCane = new Categoria('Cane');
            $categoriaGatto = new Categoria('Gatto');
            $categoriaGenerica = new Categoria('Generica');

            $spazzola = new Prodotto('Spazzola', '4.99', $categoriaGenerica, './img/spazzola.jpg');
            $croccantiniCanePollo = new Cibo('Croccantini al pollo', '9.99', $categoriaCane, 'https://baiuland.it/bianchi/wp-content/uploads/2019/09/croccantini.png', 'Pollo');
            $croccantiniGattoPesce = new Cibo('Croccantini al pesce', '11.99', $categoriaGatto, 'https://www.zooplanetvergato.it/wp-content/uploads/2023/06/07613035424937_Sterilizzato-Salmone_Verdure-1_VANB43426-1-1-1-1-1-1-1-1-1-1-1-1-1-1.png', 'Pesce');
            $osso = new Gioco('Osso', '3.99', $categoriaCane, 'https://static.zoomalia.com/prod_img/34858/la_98ed3d2c21991e3bef5e069713af9fa6ca1617356340.jpg', 'Marrone');
            $gomitolo = new Gioco('Gomitolo', '2.99', $categoriaGatto, 'https://img.pixers.pics/pho_wat(s3:700/FO/53/72/75/69/700_FO53727569_edb8527920a8714cb5ae28ba67b43c6d.jpg,700,700,cms:2018/10/5bd1b6b8d04b8_220x50-watermark.png,over,480,650,jpg)/adesivi-gatto-con-gomitolo-di-lana.jpg.jpg', 'Rosso');
            $tappetiniCarbone = new Tappetino('Tappetini al carbone', '8.99', $categoriaCane, 'https://m.media-amazon.com/images/I/81y8oTyF4HL._AC_UF1000,1000_QL80_.jpg', '60x90');
        
            $arrayProdotti = [$spazzola, $croccantiniCanePollo, $croccantiniGattoPesce, $osso, $gomitolo, $tappetiniCarbone];
        ?>
        
        <header>
            <div class="header-wrapper container text-center">
                <h1>NEGOZIO PER ANIMALI</h1>
            </div>
        </header>

        <main>
            <div class="main-wrapper container d-flex flex-wrap gap-2 justify-content-between">

                <?php foreach($arrayProdotti as $prodotto){ ?>
                    <div class="card w-25">
                        <h5 class="card-header text-center"><?php echo $prodotto->nome ?></h5>
                        <!-- Perdonatemi lo stile in linea ma è solo una proprietà -->
                        <div class="d-flex align-items-center" style="min-height: 350px;">
                            <img src=" <?php echo $prodotto->img ?> " class="card-img-top" alt="img">
                        </div>
                        <div class="card-body">
                            <p class="card-text m-0">Tipo: <?php echo get_class($prodotto) ?></p>
                            <p class="card-text m-0">Categoria: <?php echo $prodotto->categoria->icon; echo $prodotto->categoria->nome ?></p>
                            <p class="card-text m-0">Prezzo: <?php echo $prodotto->prezzo ?></p>

                            <?php if($prodotto instanceof Cibo){ ?>
                                <p class="card-text m-0">Gusto: <?php echo $prodotto->gusto ?></p>
                            <?php } ?>
                            <?php if($prodotto instanceof Gioco){ ?>
                                <p class="card-text m-0">Colore: <?php echo $prodotto->colore ?></p>
                            <?php } ?>
                            <?php if($prodotto instanceof Tappetino){ ?>
                                <p class="card-text m-0">Dimensione: <?php echo $prodotto->dimensione ?></p>
                            <?php } ?>
                        </div>
                    </div>
            
                <?php } ?>
            </div>
        </main>

        <footer>

        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>