<!DOCTYPE html>

<?php

require_once 'model/Product.php';
require_once 'controller/ProductController.php';
$product = new ProductController();
$products = $product->listPs();
?>

<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Meu Mercado</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>



<h1><center>Meu Mercado</center></h1>
<br>
<br>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Mercado</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="announce.php">Anunciar</a></li>
                <li class="active"><a href="list.php">Vizualizar Anúncios<span class="sr-only">(current)</span></a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<table class="table table-striped">
    <thead>
    <tr>
        <th>Código</th>
        <th>Tipo</th>
        <th>Nome</th>
        <th>Quantidade</th>
        <th>Preço</th>
        <th>Tipo do Negócio</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $product): ?>
    <tr>
        <td> <?php echo ($product['id']); ?> </td>
        <td> <?php echo ($product['type']); ?> </td>
        <td> <?php echo ($product['name']); ?> </td>
        <td> <?php echo ($product['quantity']); ?> </td>
        <td> <?php echo ($product['price']); ?> </td>
        <td> <?php echo ($product['business']); ?> </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>