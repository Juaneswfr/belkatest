<?php

require( $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');
use TijsVerkoyen\CssToInlineStyles\CssToInlineStyles;
$cssToInlineStyles = new CssToInlineStyles();

// Create the Transport
$transport = (new Swift_SmtpTransport('in-v3.mailjet.com', 587 ))
  ->setUsername('4366ea07ce257b7ab8f45c2a46a0e6a6')
  ->setPassword('a83007501e3005688255c434bbd340f5');
// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

$main_url =  'https://test-mas-que-partners.herokuapp.com/';
$title = 'Nuevo Lead';
$bg_header= '#000000';
$bg_footer = '#000000';
$text_color_footer = 'white';

ob_start();
include $_SERVER['DOCUMENT_ROOT'].'/mail/new_contact.php';
$html = ob_get_clean();

$html =  $cssToInlineStyles->convert($html);
// Create a message
$message = (new Swift_Message('Nuevo lead'))
  ->setFrom(['juanestebanramirezavila@gmail.com' => 'Support - Masquepartners'])
  ->setTo([ 'juanestebanramirezavila@gmail.com' => 'Masquepartners'])
  ->setBody($html , 'text/html');

//$result = $mailer->send($message);
if($result){

    echo 'Se envio correctamente';

}else{

    echo $html;
}

?>