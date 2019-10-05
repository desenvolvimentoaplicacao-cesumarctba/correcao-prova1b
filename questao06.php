</php

// metodo que retorna
public function getCor()
{
  return $this->cor;
}

// metodo que atribui
public function setCor($cor)
{
  $this->cor = $cor;
}

/*
* O conceito POO que exemplifica o trecho de codigo acima é o encapsulamento, o atributo cor
* está privado, então para setar um valor ou acessar o valor, é necessário escrever um metodo public 
* que retorna (get) e outro que atribua um valor (set).
*/
