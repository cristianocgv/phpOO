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
        require_once 'Carro.php';
        $c1 = new Carro;
        $c1->setModelo("Duster");
        $c1->setMarca("Renault");
        print_r($c1);
        print "Eu tenho  um carro de modelo  {$c1->getModelo()} \n e marca {$c1->getMarca()}"
       
    ?>
    </pre>
	</div>
</body>
</html>