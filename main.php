<?php

use src\classes\RepositorioArquivo;
use src\classes\RepositorioPostgreSQL;

$repo = new RepositorioPostgreSQL('usuarios');
$repo->salvar(['nome' => 'Sr. Pablo Melo', 'email' => 'MariaEduarda92@yahoo.com']);
$repo->salvar(['nome' => 'Hélio Melo', 'email' => 'Yago_Carvalho33@hotmail.com']);
$repo->salvar(['nome' => 'Mércia Melo', 'email' => 'PedroHenrique.Moreira53@yahoo.com']);
$repo->salvar(['nome' => 'Karla Xavier', 'email' => 'Luiza_Moreira@yahoo.com']);
$repo->salvar(['nome' => 'Emanuel Carvalho', 'email' => 'Alice.Batista@yahoo.com']);
$repo->salvar(['nome' => 'Sra. Natália Moreira', 'email' => 'Vicente.Braga@hotmail.com']);
$repo->salvar(['nome' => 'Beatriz Silva', 'email' => 'Vctor_Xavier@bol.com.br']);
$repo->salvar(['nome' => 'Vitor Batista', 'email' => 'Mrcia50@hotmail.com']);
$repo->salvar(['nome' => 'Fabrício Melo', 'email' => 'Dalila56@gmail.com']);
$repo->salvar(['nome' => 'Eduardo Costa', 'email' => 'Lavnia.Batista90@gmail.com']);

dump($repo->listar());
dump($repo->buscar(3));
dump($repo->atualizar(1, ['nome' => 'Dra. Benjamin Moreira', 'email' => 'Caio_Xavier32@hotmail.com']));
dump($repo->listar());
dump($repo->buscar(1));
