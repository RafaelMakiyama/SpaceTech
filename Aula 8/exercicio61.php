<?php

class Nota{
    private $id, $nome, $descricao, $qtdComprada, $preco, $desconto;

    function __construct($id, $nome, $descricao, $qtdComprada = 0, $preco, $desconto)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->qtdComprada = $qtdComprada;
        $this->preco = $preco;
        $this->desconto = $desconto;   
    }

    function getId(){
        return $this->id;
    }
  
    function getNome(){
        return $this->nome;
    }

    function getDescricao(){
        return $this->descricao;
    }
    
    function getQtdComprada(){
        return $this->qtdComprada;
    }

    function getPreco(){
        return $this->preco;
    }

    function getDesconto(){
        return $this->desconto;
    }

    private function setPreco($preco) {
        $this->preco = $preco;
    }

    private function setDescricacoa($descricao){
        $this->descricao = $descricao;
    }

    public function calcularFatura(){
        $total = $this->qtdComprada * $this->preco;
        echo "O preço do item ". $this->getNome() . " com o desconto de : " . $this->getDesconto() . " no total é  ". $total;
    }

}


    $obj = new Nota(1,"Botão da CPU", "BOTAO DA CPU", 10, 10, 0);
    $obj->calcularFatura();
