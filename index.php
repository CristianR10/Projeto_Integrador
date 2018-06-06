<?php 

require "./lib/autoload.php";
/*use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$email = new PHPMailer();*/

$smarty = new template();
rotas::get_pagina();

//valores para o template
$smarty->assign('NOME','Cristian Renato');

//sempre tem que ser a ultima linha
$smarty->display('index.tpl');
 ?>