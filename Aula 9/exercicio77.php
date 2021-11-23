<?php

class Usuario {

    private $nome, $cpf, $telefone, $matricula;

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    

    /**
     * Get the value of matricula
     */ 
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set the value of matricula
     *
     * @return  self
     */ 
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * Get the value of telefone
     */ 
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set the value of telefone
     *
     * @return  self
     */ 
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get the value of cpf
     */ 
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     *
     * @return  self
     */ 
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }
}

class Emprestimo {

    private $dataDeEmprestimo, $dataPrevistaDeDevolucao, $dataDeEntradaReal, $situacao;

    

    /**
     * Get the value of dataDeEmprestimo
     */ 
    public function getDataDeEmprestimo()
    {
        return $this->dataDeEmprestimo;
    }

    /**
     * Set the value of dataDeEmprestimo
     *
     * @return  self
     */ 
    public function setDataDeEmprestimo($dataDeEmprestimo)
    {
        $this->dataDeEmprestimo = $dataDeEmprestimo;

        return $this;
    }

    /**
     * Get the value of dataPrevistaDeDevolucao
     */ 
    public function getDataPrevistaDeDevolucao()
    {
        return $this->dataPrevistaDeDevolucao;
    }

    /**
     * Set the value of dataPrevistaDeDevolucao
     *
     * @return  self
     */ 
    public function setDataPrevistaDeDevolucao($dataPrevistaDeDevolucao)
    {
        $this->dataPrevistaDeDevolucao = $dataPrevistaDeDevolucao;

        return $this;
    }

    /**
     * Get the value of dataDeEntradaReal
     */ 
    public function getDataDeEntradaReal()
    {
        return $this->dataDeEntradaReal;
    }

    /**
     * Set the value of dataDeEntradaReal
     *
     * @return  self
     */ 
    public function setDataDeEntradaReal($dataDeEntradaReal)
    {
        $this->dataDeEntradaReal = $dataDeEntradaReal;

        return $this;
    }

    /**
     * Get the value of situacao
     */ 
    public function getSituacao()
    {
        return $this->situacao;
    }

    /**
     * Set the value of situacao
     *
     * @return  self
     */ 
    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;

        return $this;
    }
}

class Exemplar {
    private $codigo, $cativa, $emprestada;

    

    /**
     * Get the value of codigo
     */ 
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set the value of codigo
     *
     * @return  self
     */ 
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get the value of cativa
     */ 
    public function getCativa()
    {
        return $this->cativa;
    }

    /**
     * Set the value of cativa
     *
     * @return  self
     */ 
    public function setCativa($cativa)
    {
        $this->cativa = $cativa;

        return $this;
    }

    /**
     * Get the value of emprestada
     */ 
    public function getEmprestada()
    {
        return $this->emprestada;
    }

    /**
     * Set the value of emprestada
     *
     * @return  self
     */ 
    public function setEmprestada($emprestada)
    {
        $this->emprestada = $emprestada;

        return $this;
    }
}

class Livro {
    private $titulo, $autor, $ano, $edicao, $editora, $ISBN;

    

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of autor
     */ 
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     *
     * @return  self
     */ 
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of ano
     */ 
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set the value of ano
     *
     * @return  self
     */ 
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get the value of edicao
     */ 
    public function getEdicao()
    {
        return $this->edicao;
    }

    /**
     * Set the value of edicao
     *
     * @return  self
     */ 
    public function setEdicao($edicao)
    {
        $this->edicao = $edicao;

        return $this;
    }

    /**
     * Get the value of editora
     */ 
    public function getEditora()
    {
        return $this->editora;
    }

    /**
     * Set the value of editora
     *
     * @return  self
     */ 
    public function setEditora($editora)
    {
        $this->editora = $editora;

        return $this;
    }

    /**
     * Get the value of ISBN
     */ 
    public function getISBN()
    {
        return $this->ISBN;
    }

    /**
     * Set the value of ISBN
     *
     * @return  self
     */ 
    public function setISBN($ISBN)
    {
        $this->ISBN = $ISBN;

        return $this;
    }
}