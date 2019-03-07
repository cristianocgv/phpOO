<!DOCTYPE html>
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
        require_once 'CarroConstrutor.php';
        /*$c1 = new Carro;  
         print_r($c1);
        */
        $c1 = new Carro("Frontier","Nissam","Prata","Diesel");
        print_r($c1);
    ?>
    </pre>
	</div>
</body>
</html>