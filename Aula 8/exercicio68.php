<?php

class Pessoa{
    private $nome, $cpf, $endereco, $nomePai, $nomeMae, $rg, $serialIdentificacao;


    public function __construct($nome, $cpf, $endereco, $nomePai, $nomeMae, $rg, $serialIdentificacao)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
        $this->nomePai = $nomePai;
        $this->nomeMae = $nomeMae;
        $this->rg = $rg;
        $this->serialIdentificacao = $serialIdentificacao;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getNomePai()
    {
        return $this->nomePai;
    }

    /**
     * @param mixed $nomePai
     */
    public function setNomePai($nomePai)
    {
        $this->nomePai = $nomePai;
    }

    /**
     * @return mixed
     */
    public function getNomeMae()
    {
        return $this->nomeMae;
    }

    /**
     * @param mixed $nomeMae
     */
    public function setNomeMae($nomeMae)
    {
        $this->nomeMae = $nomeMae;
    }

    /**
     * @return mixed
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * @param mixed $rg
     */
    public function setRg($rg)
    {
        $this->rg = $rg;
    }

    /**
     * @return mixed
     */
    public function getSerialIdentificacao()
    {
        return $this->serialIdentificacao;
    }

    /**
     * @param mixed $serialIdentificacao
     */
    public function setSerialIdentificacao($serialIdentificacao)
    {
        $this->serialIdentificacao = $serialIdentificacao;
    }

    public function __toString()
    {
        return json_encode("Meu nome é {$this->nome}, minha mãe se chama {$this->nomeMae} e meu pai {$this->nomePai}, meu cpf é {$this->cpf} e meu rg {$this->rg}");
    }


}

class Secretaria  extends Pessoa {

    private $id, $funcao, $horaTrabalhada, $horasExtras;

    /**
     * @param $id
     * @param $funcao
     * @param $horaTrabalhada
     * @param $horasExtras
     */
    public function __construct($nome, $cpf, $endereco, $nomePai, $nomeMae, $rg, $serialIdentificacao, $id, $funcao, $horaTrabalhada, $horasExtras)
    {
        parent::__construct($nome, $cpf, $endereco, $nomePai, $nomeMae, $rg, $serialIdentificacao);
        $this->id = $id;
        $this->funcao = $funcao;
        $this->horaTrabalhada = $horaTrabalhada;
        $this->horasExtras = $horasExtras;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFuncao()
    {
        return $this->funcao;
    }

    /**
     * @param mixed $funcao
     */
    public function setFuncao($funcao)
    {
        $this->funcao = $funcao;
    }

    /**
     * @return mixed
     */
    public function getHoraTrabalhada()
    {
        return $this->horaTrabalhada;
    }

    /**
     * @param mixed $horaTrabalhada
     */
    public function setHoraTrabalhada($horaTrabalhada)
    {
        $this->horaTrabalhada = $horaTrabalhada;
    }

    /**
     * @return mixed
     */
    public function getHorasExtras()
    {
        return $this->horasExtras;
    }

    /**
     * @param mixed $horasExtras
     */
    public function setHorasExtras($horasExtras)
    {
        $this->horasExtras = $horasExtras;
    }

    public function __toString()
    {
        return json_encode("Meu nome é {$this->getNome()}, minha mãe se chama {$this->getNomeMae()} e meu pai {$this->getNomePai()}, meu cpf é {$this->getCpf()} e meu rg {$this->getRg()}, trabalho como {$this->funcao}, entro  as {$this->horaTrabalhada} e saio as {$this->horasExtras}");
    }

}
$obj  =  new Secretaria('Rafael','123123','ASDA','FRancisco','Sueli','1312','123213','1231','Dev,','20','20');
echo $obj->__toString();