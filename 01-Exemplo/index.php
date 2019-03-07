<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<link rel="stylesheet" href="_css/estilo.css"/>
	<title>Curso de PHP - Orientados a Objetos</title>
	<h1> Curso básico de php - OO </h1>
</head>
<body>
<img  src="_css/php-logo.png">
<div>
<pre>
    <?php
        require_once 'Carro.php';
        $c1 = new Carro;
        $c1 ->modelo = "Palio";
        $c1 ->marca = "FIAT";
        $c1 ->cor = "Vermelha";
        $c1 ->combustivel ="Flex";
        $c1 ->ligado = true;  #ao mudar para false o comportamento será alterado.
        print_r($c1);
        $c1->dirigir();
    ?>
    </pre>
	</div>
</body>
</html>
