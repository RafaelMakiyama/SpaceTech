<?php 


class Porta{
    private $aberta, $cor, $dimensaoX, $dimensaoZ;
    public function abre() : void{
       
    }

    public function fecha(): void {

    }

    public function pinta(String $cor){

    }


}
class Imovel {

    public function pinta(String $cor){

    }

    public function portasAbertas(){

    }

    public function totalDePortas(){

    }
}


class Casa extends Imovel{

    private $cor, $porta1, $porta2, $porta3;

    public function pinta(String $cor){
        
    }
    
    public function totalDePortas(){

    }

    public function quantasPortasEstaoAbertas(){

    }


}

class Edificio {

    private $cor, $totalDePortas, $totalDeAndares, $portas;

    public function pinta(String $cor){

    }

    public function portasAbertas(){

    }

    public function totalDePortas(){

    }

    public function adicionarAndar(){

    }

    public function totalDeAndares(){

    }


}