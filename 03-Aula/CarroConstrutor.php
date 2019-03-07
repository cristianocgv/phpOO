<?php 
        class Carro 
        {
            private  $modelo;
            private  $marca;
            private $cor;
            private $combustivel;
        
/*  Exemplo de um construtor 
            public function __construct(){
                $this->cor = "Azul";
                $this->combustível = "Flex";
            }
            
  */
  
  public function Carro($mo, $ma, $c , $cb) {    // Exemplo método constutor;

    $this->modelo = $mo;
    $this->marca = $ma;
    $this->cor = $c;
    $this->combustivel=$cb;
  
}




	    public function  getModelo()
	{
		return $this->modelo;
	}

	public function  setModelo($mo)
	{
		$this->modelo = $mo;
	}

	public function  getMarca()
	{
		return $this->marca;
	}

	public function setMarca($ma)
	{
		$this->marca = $ma ;
	}
   
    }
        

        

    ?>