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

    public function __construct(){
            $this->name = "salgado";
    }

    function valor(){
        return 1.52;
    }

    function getNome(){
        return $this->name;
    }

}

class Doce extends Paes {
    
    public function __construct(){
        $this->name = "doce";
    }

    function valor(){
        return 3.25;
    }
    function getNome(){
        return $this->name;
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

    function getNome(){
        return $this->paes->getNome();
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

    function getNome(){
        return $this->paes->getNome();
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

    function getNome(){
        return $this->paes->getNome();
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

    function getNome(){
        return $this->paes->getNome();
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

    function getNome(){
        return $this->paes->getNome();
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

    function getNome(){
        return $this->paes->getNome();
    }

}
$lancheSalgado = new Sal();
echo "O valor de um pão salgado custa : R$ {$lancheSalgado->valor() } <br><br>";


$lancheDoce = new Doce();
echo "O valor de um pão doce custa : R$ {$lancheDoce->valor() } <br><br>";

echo "<strong> Segue as nossas combinações de lanches com seus respectivos preços. <br><br> </strong> ";

$combinacao1 = new Sal();
$combinacao1 = new Salame($combinacao1); 
$combinacao1 = new Mussarela($combinacao1);
echo "O valor do lanche {$combinacao1->paes->getNome() }  de <strong>Salame com Mussarela</strong> é o valor de: R$ " .$combinacao1->valor(). "<br><br>";

$combinacao2 = new Sal();
$combinacao2 = new Mussarela($combinacao2);
echo "O valor do lanche {$combinacao2->paes->getNome() } com recheio de <strong>Mussarela</strong> é de: R$ " .$combinacao2->valor(). "<br><br>";

$combinacao3 = new Sal();
$combinacao3 = new Salame($combinacao3);
echo "O valor do lanche {$combinacao3->paes->getNome() } com recheio de <strong>Salame</strong> é de: R$ " .$combinacao3->valor(). "<br><br>";

$combinacao4 = new Sal();
$combinacao4 = new Mussarela($combinacao4);
$combinacao4 = new Ovo($combinacao4);
echo "O valor do lanche  {$combinacao4->paes->getNome() } com recheio de <strong>Ovo e mussarela </strong>é de: R$ " .$combinacao4->valor().  "<br><br>";

$combinacao5= new Sal();
$combinacao5 = new Ovo($combinacao5);
$combinacao5 = new Margarina($combinacao5);
echo "O valor do lanche  {$combinacao4->paes->getNome() } com recheio de <strong>ovo com Margarina</strong> é de: R$ " .$combinacao5->valor(). "<br><br>";

$combinacao6= new Sal();
$combinacao6 = new Margarina ($combinacao6);
echo "O valor do lanche {$combinacao6->paes->getNOme() } com recheio de <strong>margarina</strong> é de: R$ " .$combinacao6->valor(). "<br><br>";

$combinacao7= new Sal();
$combinacao7 = new Ovo ($combinacao7);
echo "O valor do lanche {$combinacao7->paes->getNome() } com recheio de <strong>ovo </strong> é de: R$ " .$combinacao7->valor(). "<br><br>";

$combinacao8 = new Doce();
$combinacao8 = new Geleia($combinacao8);
echo "O valor do lanche {$combinacao8->paes->getNome() } com recheio de <strong>geleia </strong>é de: R$ " .$combinacao8->valor(). "<br><br>";

$combinacao9 = new Doce();
$combinacao9 = new Geleia($combinacao9);
$combinacao9 = new Salame($combinacao9);
echo "O valor do lanche {$combinacao8->paes->getNome() } com recheio de<strong> geleia e salame </strong> de: R$ " .$combinacao9->valor(). "<br><br>";

$combinacao10 = new Doce();
$combinacao10 = new PastaDeAmendoim($combinacao10);
$combinacao10 = new Geleia($combinacao10);
echo "O valor do lanche {$combinacao8->paes->getNome() }  com recheio de <strong>pasta de amendoim e geleia</strong> de: R$ " .$combinacao10->valor(). "<br><br>";

$combinacao11 = new Doce();
$combinacao11 = new Salame($combinacao11);
echo "O valor do lanche {$combinacao8->paes->getNome() } com recheio de <strong>salame </strong> de: R$ " .$combinacao11->valor(). "<br><br>";

$combinacao12 = new Doce();
$combinacao12 = new PastaDeAmendoim($combinacao12);
echo "O valor do lanche {$combinacao8->paes->getNome() } com recheio de <strong>pasta de amendoim e geleia</strong> de: R$ " .$combinacao12->valor(). "<br><br>";



?>
