<?php

require_once "vendor/autoload.php";

use App\Email;

$email = new Email("lana@karmaoui.com");

echo $email->getDomain();

//Gestion de spams

$spamChecker = new SpamChecker();
var_dump($spamChecker->isSpam->($email));


