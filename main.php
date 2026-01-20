<?php

use src\classes\Cachorro;
use src\classes\Gato;

$cachorro = new Cachorro('Rex', 2);
dump($cachorro->emitirSom());

$gato = new Gato('Tiquinho', 1);
dump($gato->emitirSom());
