<?php

if(!defined('P3BASE')) {
	define('P3BASE',  dirname(__FILE__) . '/');
}

if(!defined('P3_DEFAULT_LANG')) {
	define('P3_DEFAULT_LANG', 'en');
}


//Translator
require P3BASE . 'Language/Exception.php';
require P3BASE . 'Language/Translator.php';

P3Base_Language_Translator::setLang(P3_DEFAULT_LANG);
class Translator extends P3Base_Language_Translator{}


require P3BASE . 'Mailer/Exception.php';
require P3BASE . 'Mailer/Debugger.php';

require P3BASE . 'Mailer/Envelope.php';
require P3BASE . 'Mailer/Message.php';
require P3BASE . 'Mailer/Files.php';
require P3BASE . 'Mailer/Adresses.php';
require P3BASE . 'Mailer/Headers.php';

require P3BASE . 'Mailer/Handler/SMTP.php';
require P3BASE . 'Mailer/Handler/Exception.php';

require P3BASE . 'Mailer/Iterator/MailAdress.php';
require P3BASE . 'Mailer/Iterator/MailHeader.php';
require P3BASE . 'Mailer/Iterator/MailFile.php';

?>
