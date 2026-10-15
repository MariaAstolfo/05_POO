<?php

class Funcionario{
    private string $nome;
    private float $salario;

    public function __construct($nome, $salario=1000){
        $this->nome=$nome;
        $this->salario=$salario;
    }
    public function aumentarSalario($percentual){
        if ($percentual<=10){
            $this->salario+=(($percentual/100)*$this->salario); 

        }
        else{
            echo "Erro!";
        }
        
    }
    public function mostrarSalario(){
        echo "Funcionário: ". $this->nome." - Salário: R$". $this->salario;
    }
}

$funcionario1= new Funcionario('Maria', 3000);
$funcionario1->aumentarSalario(10);
$funcionario1->mostrarSalario();