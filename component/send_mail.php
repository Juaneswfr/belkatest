<?php

require( $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');
use TijsVerkoyen\CssToInlineStyles\CssToInlineStyles;
$cssToInlineStyles = new CssToInlineStyles();

$ReturnStatus = 0; 
$Msg = '';

$main_url =  'http://masquepartners.localhost/';

if($_GET['option'] != 'dev'){
  $main_url =  'https://test-mas-que-partners.herokuapp.com/';
}

$title = 'Nuevo Lead';
$bg_header= '#000000';
$bg_footer = '#000000';
$text_color_footer = 'white';



if($_GET['option'] != 'dev'){
# VALIDACION ---> EXISTENCIA DE LAS VARIABLES
if (!isset($_POST['nombre'])){include_once $_SERVER['DOCUMENT_ROOT'].'/component/hacker_alert_out.php';}
if (!isset($_POST['apellidos'])){include_once $_SERVER['DOCUMENT_ROOT'].'/component/hacker_alert_out.php';}
if (!isset($_POST['email'])){include_once $_SERVER['DOCUMENT_ROOT'].'/component/hacker_alert_out.php';}
if (!isset($_POST['celular'])){include_once $_SERVER['DOCUMENT_ROOT'].'/component/hacker_alert_out.php';}
if (!isset($_POST['curso'])){include_once $_SERVER['DOCUMENT_ROOT'].'/component/hacker_alert_out.php';}


#=================================================================================================
#===================================== CODIGO CAPTCHA GOOGLE V3 ==================================
#=================================================================================================
/*
    $url = "https://www.google.com/recaptcha/api/siteverify";
    $secret = "6LcwP1wcAAAAAKKC-9wEwPa3rWZdV4-DQDgDfsuI" ;
    $response = $_POST['token'];
    $remoteip = $_SERVER['REMOTE_ADDR'];
    $link ='secret='.$secret.'&response='.$response.'&remoteip='.$remoteip;
    $handle = curl_init();
    curl_setopt($handle, CURLOPT_POST, true);
    curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($handle, CURLOPT_URL,$url);
    curl_setopt($handle, CURLOPT_POSTFIELDS,$link);

    $response = curl_exec($handle);
    $res = json_decode($response, true);
    curl_close($handle);
    if ($res['success'] == false) {
    $ReturnStatus = 1;
    $Msg +=  '<br/> El sistema detecto actividad sospechosa <br/> <br/> No se identifico que sea una persona.'; 
    }

  */
#=================================================================================================
#=================================================================================================
#=================================================================================================


# VALIDACIÓN ---> INTEGRIDAD DE LAS VARIABLES
if (strlen($_POST['nombre'])< 3){ $Msg += "<br>Nombre no válido"; $ReturnStatus = 1; }
if (strlen($_POST['apellidos'])< 3){ $Msg += "<br>Apellidos no válido"; $ReturnStatus = 1; }
if (strlen($_POST['email']) < 3  || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL )) { $Msg += "<br>Email NO válido"; $ReturnStatus = 1; }
if (strlen($_POST['celular'])< 7){ $Msg += "<br>Celular NO válido";$ReturnStatus = 1;  }

}else{
  $_POST['nombre'] = 'Nombre';
  $_POST['apellidos'] = 'Apellidos';
  $_POST['email'] = 'Correo@correo.com';
  $_POST['celular'] = 'celular';
  $_POST['curso'] = 'curso';
}

// Create the Transport
$transport = (new Swift_SmtpTransport('in-v3.mailjet.com', 587 ))
  ->setUsername('4366ea07ce257b7ab8f45c2a46a0e6a6')
  ->setPassword('a83007501e3005688255c434bbd340f5');
// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);


ob_start();
include $_SERVER['DOCUMENT_ROOT'].'/mail/confirmation.php';
$html = ob_get_clean();
$html =  $cssToInlineStyles->convert($html);
ob_end_flush();


ob_start();
include $_SERVER['DOCUMENT_ROOT'].'/mail/lead_admin.php';
$html_admin = ob_get_clean();

$html_admin =  $cssToInlineStyles->convert($html_admin);

// Create a message
$message = (new Swift_Message($_POST['nombre'].', Gracias por tu información'))
  ->setFrom(['juanestebanramirezavila@gmail.com' => 'Support - Masquepartners'])
  ->setTo([ $_POST['email'] => $_POST['nombre'] ])
  ->setBody($html , 'text/html');
// Create a message
$message_admin = (new Swift_Message('Nuevo lead'))
  ->setFrom(['juanestebanramirezavila@gmail.com' => 'Support - Masquepartners'])
  ->setTo([ 'juanestebanramirezavila@gmail.com' => 'Masquepartners'])
  ->setBody($html_admin , 'text/html');


if($_GET['option'] != 'dev'){
  $result = $mailer->send($message);
  $result_admin = $mailer->send($message_admin);
}


if($result && $result_admin && $ReturnStatus == 0){

  $ReturnStatus = 0;
  $Msg = 'Tu información se ha enviado correctamente';

}else{
    echo $html;
    echo $html_admin;
}



if($ReturnStatus > 0){
  $title = 'Información enviada correctamente';
}else{
  $title = 'Error';
}


if($_GET['option'] != 'dev'){
  
  # MENSAJE DE ERROR/CONFIRMACION
  echo json_encode(['ReturnStatus'=>$ReturnStatus, 'Msg'=>$Msg]);

}

?>