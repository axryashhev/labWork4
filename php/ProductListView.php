<!DOCTYPE html>
<html lang="en">
<head>

    <title>Каталог с товаром</title>
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

<header class="page-header container-fluid">
        <div class="row">

                <?php

                require_once('Controller.php');
                error_reporting(E_ERROR | E_PARSE);

                    $controller = new Controller();
                    $listProduct = $controller->getListProduct();
                    foreach ($listProduct as $product) {

                        $text = '<div class="block">
                                    <div class="top">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><span class="converse">'.$product->getName().'</span></li>
                                            <li><a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a></li>
                                        </ul>
                                    </div>
                            
                                    <div class="middle" data-toggle="modal" data-target="#glassAnimals">
                                        <img src="'.$product->getPhoto().'" alt="pic" />
                                    </div>
                            
                                    <div class="bottom">
                                        <div class="info">'.$product->getDescription().'</div>
                                        <div class="price">$'.$product->getPrice().' <span class="old-price">$'.strval($product->getPrice() * 3).'</span></div>
                                    </div>
                            
                                </div>';



                        echo $text;
                    }
                 ?>
            <div class="modal fade" id="glassAnimals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Информация о продукте (Name 1)</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="../css/images/shop1.jpg" alt="pic" />
                            Описание продукта
                            <div class="price">$10 <span class="old-price">$30</span></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                            <button type="button" class="btn btn-danger">Купить</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</header>



<script src="../js/main.js"></script>
</body>

</html>
