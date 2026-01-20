<?php

use src\classes\Pessoa;
use src\classes\Funcionario;

$pessoa = new Pessoa(nome: 'Pedro', cpf: '12315853412',);
dump($pessoa->dados());

$func = new Funcionario(nome: 'Joaquim', cpf: '12345678910', salario: 2679.90, cargo: 'Peão');
dump($func->dados());
