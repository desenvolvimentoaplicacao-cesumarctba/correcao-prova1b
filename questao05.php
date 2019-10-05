<?php

class Pessoa 
{
  public $nome;
  public $idade;
  private $rg;
  private $cpf;
  
  // public function Pessoa()
  public function __construct($nome, $idade, $rg, $cpf)
  {
    $this->nome = $nome; 
    $this->idade = $idade;
    $this->rg = $rg;
    $this->cpf = $cpf;
    echo $nome;
  }

}

$pessoa = new Pessoa("Maycon", "22", "000000", "1234567912");

