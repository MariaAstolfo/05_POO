<?php

class Carro{
    private string $modelo;
    private float $consumo;
    private float $tanque;

    public function __construct($modelo, $consumo=10, $tanque=0){
        $this->modelo=$modelo;
        $this->consumo=$consumo;
        $this->tanque=$tanque;
    }
    public function abastecer($litros){
        if($litros>=0){
            $this->tanque+=$litros;
             echo "Abastecidos". $litros. "Litro(s) no ". $this->modelo.".<br>";
        }
        else{
            echo "Erro!";
        }
        
    }
    public function dirigir($km){
        $gasto=$km/$this->consumo;
        if ($this->tanque>$gasto){
            $this->tanque-=$gasto;
            echo "O carro ". $this->modelo. " percorreu ". $km. " Km e consumiu ". $gasto. " Litros. <br>";
        }
        else{
            echo "Não é possível percorrer a distância! <br>";
        }
    }
    public function exibirInfo(){
        echo "Modelo: ". $this->modelo. " | Consumo: ".$this->consumo." Km/L | Tanque: ". $this->tanque. "L <br>";
    }
}

$carro1= new Carro("Honda Civic", 12, 20);

$carro1->exibirInfo();
$carro1->dirigir(60);
$carro1->abastecer(10);
$carro1->exibirInfo();