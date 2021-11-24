<?php

interface Arma {
    public function usarArma();
}

interface Personagem {
    public function lutar();
}

abstract class Reinado implements Personagem {
    public function lutar(){}
}

class Machado implements Arma{
    public function usarArma(){
        echo "está usando machado";
    }
}

class Espada implements Arma{
    public function usarArma(){
        echo "está usando espada";
    }
}

class Faca implements Arma{ 
    public function usarArma(){
        echo "está usando faca";
    }
}

class ArcoEFlexa{
    public function usarArma(){
        echo "está usando arco e flexa";
    }
}


class Rei extends Reinado implements Personagem{
    public function lutar(){ 
        echo "está usando o personagem REI";
    }    
}

class Duende implements Personagem{
    public function lutar(){ 
        echo "está usando o personagem duende";
    }
}

class Guerreiro implements Personagem {
    public function lutar(){ 
        echo "está usando um guerreiro";
    }
}

class Rainha extends Reinado implements Personagem{
    public function lutar(){ 
        echo "está usando personagem rainha";

    }
}


?>