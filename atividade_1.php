<?php

class Livro{
    public string $titulo;
    public string $autor;
    public int $paginas;
    public string  $ano_publicacao;

    public function __construct($titulo, $autor, $pagina, $ano_publicacao='Desconhecido'){
        $this->titulo= $titulo;
        $this->autor= $autor;
        $this->pagina= $pagina;
        $this->ano_publicacao= $ano_publicacao;
    }
    public function exibirDetalhes(){
        echo "Título: ". $this->titulo. ", Autor: ". $this->autor. ", Páginas: ". $this->pagina. ". Publicado em: ". $this->ano_publicacao. "<br>";
    }
}

$livro1= new Livro('Dom Casmurro', 'Machado de Assis', 20);

$livro1->exibirDetalhes();