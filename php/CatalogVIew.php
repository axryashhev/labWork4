<!DOCTYPE html>
<html lang="en">
<head>

    <title>Каталог</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/catalog.css">
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
    <div class="container bg-light rounded">
        <div class="h4 font-weight-bold text-center py-3">Каталог</div>
        <div class="row">

            <?php
            $catalog = array("Dance", "Trance", "Medley", "Relax", "Dram&Bass", "Pop");

            for ($i = 0; $i < 6; $i++) {
                $text = '<div class="col-lg-4 col-md-6 my-lg-0 my-3">
                        <div class="box bg-white">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle mx-3 text-center d-flex align-items-center justify-content-center blue"> <img src="https://freepngimg.com/thumb/microphone/11-microphone-png-image-thumb.png" alt=""> </div>
                                <div class="d-flex flex-column"> <b>'.$catalog[$i].'</b> <a href="ProductListView.php">
                                        <p class="text-muted">'.$i. " items". '</p>
                                    </a> </div>
                            </div>
                        </div>
            </div>';
                echo $text;
            }
            ?>
        </div>
    </div>
</header>

</body>

</html>
