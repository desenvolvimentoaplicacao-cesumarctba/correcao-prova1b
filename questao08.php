<?php 

$pessoa = new Pessoa("joao", 100, 180);
$imc = Imc($pessoa);
$imc->calculaImc();

