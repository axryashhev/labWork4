<!DOCTYPE html>
<html lang="en">
<head>

    <title>Главная страница</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-md">
        <a class="navbar-brand" href="#">I like move it!</a>
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Главная страница</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="CatalogVIew.php">Каталог</a>
                </li>
            </ul>
        </div>
    </nav>

    <header class="page-header header container-fluid">
        <div class="overlay">
            <div class="description">
                <h1>Интернет-магазин для каждого, кто любит зажигать!</h1>
                <p>Наш магазин создан для тех, кто любит отжигать на полную катушку,
                    у нас есть все от dance, до relax medley.</p>
            </div>
        </div>
    </header>

<!--    <div class="container features">-->
<!--        <div class="row">-->
<!---->
<!--            --><?php
//
//            require_once('Controller.php');
//            error_reporting(E_ERROR | E_PARSE);
//
//                $controller = new Controller();
//                $listProduct = $controller->getListProduct();
//                echo $listProduct[0]->get;
//                foreach ($listProduct as $product) {
//
//                    $text = '<div class="col-lg-4 col-md-4 col-sm-12">
//                            .<h3 class="feature-title">'.$product->getName().'</h3>'
//                            .'<img src="'.$product->getPhoto().'" class="img-fluid">'
//                            .'<p>'.$product->getDescription().'</p>'
//                            .'</div>';
//
//                    echo $text;
//                }
//             ?>
<!---->
<!--        </div>-->
<!--    </div>-->

    <script src="../js/main.js"></script>
</body>

</html>
