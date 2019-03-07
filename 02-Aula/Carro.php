<?php
class Carro {
    public $modelo;
    public $marca;
    public  $cor;
    public  $combustivel;
    protected $ligado;


  public function dirigir() {
		if($this->ligado == true) {
			echo "<p>Carro em Movimento</p></br></br></br>";
			echo "<img src='_fig/carro.gif'>";
		} else {
		    echo "<p>  Carro desligado para abastercer </p>";
		}
		
    }

    public function abastecer() {
        $this->ligado = false; 
        echo "<p>Abastecendo! Motor desligado</p></br></br></br> ";
        echo "<img src='_fig/abastecendo.gif'>";
    }
     
  public function ligar() {
        $this->ligado = true;
        $this->dirigir();
    }


}
 


?>