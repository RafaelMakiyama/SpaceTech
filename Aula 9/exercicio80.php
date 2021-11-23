<?php 

abstract class Produto {
    private $codigo, $preco;

    public function __construct($codigo, $preco){
        $this->codigo = $codigo;
        $this->preco = $preco;
    }

}

interface Perecivel {
    public function estaVencido();
}

class Leite extends Produto implements Perecivel  {

    private $marca, $volume, $dataValidade;
    
    public function __construct($codigo, $preco, $marca, $volume, $dataValidade )
    {
        parent::__construct($codigo,$preco);
        $this->marca = $marca;
        $this->volume = $volume;
        $this->dataValidade = $dataValidade;
    }

    public function estaVencido()
    {
        if($this->validade === true){
            echo "validade em dia ";
        } else {
            echo "fora do prazo de validade";
        }
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    public function getAno()
    {
        return $this->ano;
    }

    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    public function getVolume()
    {
        return $this->volume;
    }

    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    public function getDataValidade()
    {
        return $this->dataValidade;
    }

    public function setDataValidade($dataValidade)
    {
        $this->dataValidade = $dataValidade;

        return $this;
    }
    
}

class DVD extends Produto{
    private $titulo, $ano;

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getAno()
    {
        return $this->ano;
    }

    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }
}

$produto = new Produto('123123','123');
$leite = new Leite($produto->codigo, $produto->preco, 'todinho','123123','131231');
$leite->getDataValidade();

