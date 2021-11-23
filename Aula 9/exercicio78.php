<?php

use Usuario as GlobalUsuario;

class Biblioteca {
    private $usuarios, $livros;

    public function emprestar(Usuario $usuario, Livro $livro){
        
    }

    public function devolver(Usuario $usuario, Livro $livro){

    }

    public function reservar(Usuario $usuario, Livro $livro){

    }

    public function renovar (Usuario $usuario, Livro $livro){

    }

    public function punirAtraso(Usuario $usuario, Livro $livro){

    }

    public function limpaReservas(Usuario $usuario, Livro $livro){

    }

}

class Usuario {
    private $nome, $login, $senha, $maxEmprestimo, $listaEmprestimo, $listaReservas;

    public function estaPunido(){

    }

}

class UsuarioComum extends Usuario {

}

class UsuarioEspecial extends Usuario {

}

class Item {
    private $id, $nome, $autores, $ano, $penalidadeAtraso, $tempoReserva, $listaEmprestimo, $listaReserva;

    public function estaEmprestado(){

    }

    public function estaReservado(){

    }

}

class Livro extends Item {

}

class Periodico extends Item {

}

class Midia extends Item {

}

class Monografia extends Item {

}

class Emprestimo {
    private $usuario, $item, $qtdRenovado, $dataExpiracao,  $status;


}

class Reserva {
    private $usuario, $livro, $status;

}