<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$email = novoEmail(2, " mail.host.com", "your@email.com", "seu passe", "segura smtp (tls / ssl)", "porta (587)",
 "de @ email .com", "do nome");

$email->sendEmail ("SUbject" , "Conteúdo" , "reply@email.com" , "Nome da Repetição" , "endereço@email.com" , "Nome do Endereço");

var_dump($novoEmail);