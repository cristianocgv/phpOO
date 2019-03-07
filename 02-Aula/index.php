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
        $c1 ->modelo = "Civic 1.6 Turbo";
        $c1 ->marca = "Honda";
        $c1 ->cor = "Chumbo";
        $c1 ->combustivel ="Flex";       
      #  $c1 ->ligado = true; 
         print_r($c1);
     $c1 ->abastecer();
      // $c1->ligar();
    //  $c1->dirigir();
       
    ?>
    </pre>
	</div>
</body>
</html>