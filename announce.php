<!DOCTYPE html>

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
                <li class="active"><a href="announce.php">Anunciar<span class="sr-only">(current)</span></a></li>
                <li><a href="list.php">Vizualizar Anúncios</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<form method="POST">

    <div style="width: 30%; position: absolute; top:20%; bottom: 0; left: 0; right: 0; margin: 0 auto;">
        <table class="table table-striped" align="center">
            <thead>
            <tr>

                <br>
                <br>
                <td align="right"><b>Atributos</b></td>
                <td align="left"><b>Valores</b></td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td align="right">Código:</td>
                <td align="left"><input type="text" id="id" name="id" title="id"/></td>
            </tr>
            <tr>
                <td align="right">Tipo:</td>
                <td align="left"><input type="text" id="type" name="type" title="type"/></td>
            </tr>
            <tr>
                <td align="right">Nome:</td>
                <td align="left"><input type="text" id="name" name="name" title="name"/></td>
            </tr>
            <tr>
                <td align="right">Quantidade:</td>
                <td align="left"><input type="text" id="quantity" name="quantity" title="quantity"/></td>
            </tr>
            <tr>
                <td align="right">Preço:</td>
                <td align="left"><input type="text" id="price" name="price" title="price"/></td>
            </tr>
            <tr>
                <td align="right">Tipo do Negócio:</td>
                <td align="left"><input type="text" id="business" name="business" title="business"/></td>
            </tr>
            <tr>
                <td align="right"><a href="index.html"><button type="button" class="btn btn-warning btn-block" >Voltar</button></a></td>
                <td align="left"><button type="submit" class="btn btn-success btn-block" >Salvar</button></td>
            </tr>
            </tbody>
        </table>
    </div>
</form>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    require_once 'controller/ProductController.php';

    $product = new ProductController();
    $insert = $product->newProduct();
    if ($insert){
        echo '<div class="alert alert-success">';
        echo 'Anúncio submetido com sucesso!';
        echo '</div>';

    } else{
        echo '<div class="alert alert-danger">';
        echo 'Erro! Falha ao submeter anúncio ao BD';
        echo '</div>';
    }
}
?>


</body>
</html>



