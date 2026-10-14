<?php

class ContaBancaria{
    public string $titular;
    public float $saldo;

    public function __construct($titular, $saldo){
        $this->titular= $titular;
        $this->saldo= $saldo;
    }

    public function Depositar($valor){
        $this->saldo+=$valor;
    }
    public function Sacar($valor){
        $this->saldo-=$valor;
    }
    public function exibirSaldo(){
        echo "Titular: ". $this->titular. " - Saldo atual: ".$this->saldo. "<br>";
    }
}

$conta1= new ContaBancaria('Maria', 2000);

$conta1->exibirSaldo();
$conta1-> Depositar(1000);
$conta1->exibirSaldo();

