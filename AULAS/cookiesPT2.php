<?php
$value = 'aluno';

setcookie ("Ocupacao", $value);
/*expira no final da sesssão (Quando o navegador fechar) */

setcookie ("Ocupacao", $value, time()+60);
/*expira em 1 minuto */



?>