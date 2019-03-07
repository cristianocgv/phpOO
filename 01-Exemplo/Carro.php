<?php
class Carro {
    var $modelo;
    var $marca;
    var $cor;
    var $combustivel;
    var $ligado;

	#<img  src="_css/php-logo.png">
	function dirigir() {
		if($this->ligado == true) {
			echo "<p>Carro em Movimento</p></br></br></br>";
			echo "<img src='_fig/carro.gif'>";
		} else {
		    echo "<p> Carro desligado </p>";
		}
		
	}
}
    


?>