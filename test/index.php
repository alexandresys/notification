<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email(2, "mail.valesistem.com.br", "adm@valesistem.com.br", "adm1234adm1234", "ssl", "465", "adm@valesistem.com.br", "Alexandresys");
$novoEmail->sendMail("Assunto teste", "<p>essa é uma Mensagem de <b>teste</b>!</p>", "alexandresys@hotmail.com", "Alexandresys", "alexandresys@hotmail.com", "Alexandre teste");

var_dump($novoEmail);