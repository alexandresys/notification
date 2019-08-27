<?php

require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email;
$novoEmail->sendMail("Assunto teste", "<p>essa é uma Mensagem de <b>teste</b>!</p>", "alexandresys@hotmail.com", "Alexandresys", "alexandresys@hotmail.com", "Alexandre teste");

var_dump($novoEmail);