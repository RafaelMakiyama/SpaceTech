<?php 

class Cliente{
    private $id, $name;

   private $codigos = [ 1,2,3,4,5];
    

    function procurarCliente($id){
       
        foreach($this->codigos as $codigo){
            if($codigo === $id){
                $email = new Email();
                $email->enviarEmail($id);
            } 
        }

    }
    
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}

class Email {
    
    public function enviarEmail($id){
        echo "Seu email para o Cliente de  {$id} foi enviado";
    }


}


$cliente = new Cliente;
$cliente->setName('Rafael');
$cliente->setId(1);
$cliente->procurarCliente(1);


?>