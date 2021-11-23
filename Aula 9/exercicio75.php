<?php

class Aluno{
    private $matricula, $nome, $sobrenome, $cpf, $rg, $idade, $nivelEscolar;


    public function __construct($matricula, $nome, $sobrenome, $cpf, $rg, $idade, $nivelEscolar)
    {
        $this->matricula = $matricula;
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->idade = $idade;
        $this->nivelEscolar = $nivelEscolar;
    }


    public function realizaMatricula(){

    }

    public function realizaRequeimento(){

    }

    public function solicitaCertificado(){

    }

    /**
     * @return mixed
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * @param mixed $matricula
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
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
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    /**
     * @param mixed $sobrenome
     */
    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
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
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * @param mixed $idade
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    /**
     * @return mixed
     */
    public function getNivelEscolar()
    {
        return $this->nivelEscolar;
    }

    /**
     * @param mixed $nivelEscolar
     */
    public function setNivelEscolar($nivelEscolar)
    {
        $this->nivelEscolar = $nivelEscolar;
    }




}

class Turma{
    protected $ano, $nomeTurma, $alunos, $capacidade;

    public function adicionaAluno(Aluno $aluno){
        $this->alunos[] = $aluno;
    }

    public function  listarAlunos(){
        foreach ($this->alunos as $aluno){
            echo $aluno->getNome() . '<br>';
        }
    }

    public function exibeVagas(){

    }


}

$aluno1 = new Aluno('1','Rafael','Makiyama','123123','123123','25','Superior COmpleto');
$aluno2 = new Aluno('1','Francisco','Makiyama','123123','123123','68','Ensino médico COmpleto');

$turma = new Turma();
$turma->adicionaAluno($aluno1);
$turma->adicionaAluno($aluno2);
$turma->listarAlunos();