<?php

class Produto{
    private string $nome;
    private float $preco;
    private int $estoque;

    public function __construct($nome, $preco, $estoque){
        $this->nome=$nome;
        $this->preco=$preco;
        $this->estoque=$estoque;
    }
    public function vender($quantidade){
        if($this->estoque>=$quantidade){
            $this->estoque-=$quantidade;
            echo "Venda de ". $quantidade. "unidade(s) de ".$this->nome." realizada! <br>";
        }
        else{
            echo "Estoque insuficiente!";
        }
    }
    public function reajustarPreco($percentual){
        $this->preco+=(($percentual/100)*$this->preco);
    }
    public function exibirInfo(){
        echo $this->nome. "-> R$ ". $this->preco. "| Estoque: ". $this->estoque. "<br>";
    }
}

$produto1= new Produto('Teclado Gamer', 250.00, 10);

$produto1->vender(2);
$produto1->reajustarPreco(10);
$produto1->exibirInfo();
