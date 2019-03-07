    <?php 
        class Carro 
        {
            public $modelo;
            private  $marca;

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