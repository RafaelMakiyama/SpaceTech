<?php

abstract class Paes {
    protected $nome;

    abstract function valor();

    function getNome(){
        return $this->nome;
    }

}

abstract class PaesDecorator extends Paes{
//Métodos do pão decorator.
}

class Sal extends Paes{

    public function __construct()
        {
            $this->tipo = "salgado";
        }

    function valor(){
        return 1.00;
    }

    function getTipo(){
        return "salgado";
    }

}

class Doce extends Paes {
    

    function valor(){
        return 3.25;
    }

    function getTipo(){
        return "doce";
    }

}

class Salame extends PaesDecorator {

    public function __construct(Paes $paes)
    {
        $this->paes = $paes;
    }

    function valor(){
        return 4.00 + $this->paes->valor();
    }
    
}

class Mussarela extends PaesDecorator{
    
    public function __construct(Paes $paes)
    {
        $this->paes = $paes;
    }

    function valor(){
        return 2.00 + $this->paes->valor();
    }

}

class Ovo extends PaesDecorator{
    
    public function __construct(Paes $paes)
    {
        $this->paes = $paes;
    }

    function valor(){
        return 1.00 + $this->paes->valor();
    }

}

class Margarina extends PaesDecorator{
    
    public function __construct(Paes $paes)
    {
        $this->paes = $paes;
    }

    function valor(){
        return 2.00 + $this->paes->valor();
    }

    function nomeRecheio(){
        return "Mussarela";
    }

}

class Geleia extends PaesDecorator{
    
    public function __construct(Paes $paes)
    {
        $this->paes = $paes;
    }

    function valor(){
        return 0.50 + $this->paes->valor();
    }

}

class PastaDeAmendoim extends PaesDecorator{
    
    public function __construct(Paes $paes)
    {
        $this->paes = $paes;
    }

    function valor(){
        return 1.00 + $this->paes->valor();
    }

}
$lancheSalgado = new Sal();
echo "O valor de um lanche salgado custa : R$ {$lancheSalgado->valor() } <br><br>";


$lancheDoce = new Doce();
echo "O valor de um lanche doce custa : R$ {$lancheDoce->valor() } <br><br>";

$combinacao1 = new Sal();
$combinacao1 = new Salame($combinacao1); 
$combinacao1 = new Mussarela($combinacao1);
$combinacao1->paes->tipo;
echo "O valor da combinação de Salame com Mussarela é o valor de: " .$combinacao1->valor(). "<br><br>";

$combinacao2 = new Sal();
$combinacao2 = new Mussarela($combinacao2);
echo "O valor do lanche {$combinacao2->paes->getTipo() } com recheio de Mussarela é de: " .$combinacao2->valor(). "<br><br>";

$combinacao3 = new Sal();
$combinacao3 = new Salame($combinacao3);
echo "O valor do lanche {$combinacao3->paes->getTipo() } com recheio de Salame é de: " .$combinacao3->valor(). "<br><br>";

$combinacao4 = new Sal();
$combinacao4 = new Mussarela($combinacao4);
$combinacao4 = new Ovo($combinacao4);
echo "O valor do lanche  {$combinacao4->paes->getTipo() } com recheio de Ovo e mussarela é de: { $combinacao4->valor() } <br><br>";

$combinacao5= new Sal();
$combinacao5 = new Ovo($combinacao5);
$combinacao5 = new Margarina($combinacao5);
echo "O valor do lanche  com recheio de ovo com Margarina é de: " .$combinacao5->valor(). "<br><br>";

$combinacao6= new Sal();
$combinacao6 = new Margarina ($combinacao6);
echo "O valor do lanche {$combinacao6->paes->getTipo() } com recheio de margarina é de: " .$combinacao6->valor(). "<br><br>";

$combinacao7= new Sal();
$combinacao7 = new Ovo ($combinacao7);
echo "O valor do lanche {$combinacao7->paes->getTipo() } com recheio de ovo é de: " .$combinacao7->valor(). "<br><br>";

$combinacao8 = new Doce();
$combinacao8 = new Geleia($combinacao8);
echo "O valor do lanche {$combinacao8->paes->getTipo() } com recheio de geleia é de: " .$combinacao8->valor(). "<br><br>";

$combinacao9 = new Doce();
$combinacao9 = new Geleia($combinacao9);
$combinacao9 = new Salame($combinacao9);
echo "O valor do lanche  com recheio de geleia e salame de: " .$combinacao9->valor(). "<br><br>";

$combinacao10 = new Doce();
$combinacao10 = new PastaDeAmendoim($combinacao10);
$combinacao10 = new Geleia($combinacao10);
echo "O valor do lanche  com recheio de pasta de amendoim e geleia de: " .$combinacao10->valor(). "<br><br>";

$combinacao11 = new Doce();
$combinacao11 = new Salame($combinacao11);
echo "O valor do lanche  com recheio de salame de: " .$combinacao11->valor(). "<br><br>";

$combinacao12 = new Doce();
$combinacao12 = new PastaDeAmendoim($combinacao12);
echo "O valor do lanche  com recheio de pasta de amendoim e geleia de: " .$combinacao12->valor(). "<br><br>";



?>
