<?php

use src\classes\Email;
use src\classes\Notificacao;
use src\classes\SMS;

function executar(Notificacao $notificacao): void
{
    dump($notificacao->enviar());
}

executar(new SMS('999999999', 'Suas férias começarão na segunda-feiraSuas férias começarão na segsmeçarão na segunda-feira'));
