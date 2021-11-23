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


      $obj = new Pessoa('Rafael','123123123','RU a renato GRanadeiro','FRanscico','Sueli', 'AAA12312', '123123');
      var_dump( $obj->__toString());