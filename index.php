
 <?php

include_once $_SERVER['DOCUMENT_ROOT'].'config/site.php';

?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- title -->
        <title><?= $title ?></title>
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="author" content="Jera Code">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="description" content="Dentiarte">  
        
        <!-- SEO -->
        <meta property="og:description" content="Dentiarte clinica y laboratorio dental">
        <meta property="og:url" content="https://dentiarte.com/">
        <meta property="og:locale" content="es_CO" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="https://dentiarte.com/assets/media/svg/logo_dentiarte_text.svg">
        <meta property="og:site_name" content="Detiarte Clinica Laboratorio" />
        
        <!-- favicon -->
        <link rel="icon" type="image/png" href="/assets/media/svg/favicon.svg">
        <link rel="apple-touch-icon" href="/assets/media/svg/favicon.svg">
        <link rel="apple-touch-icon" sizes="72x72" href="/assets/media/svg/favicon.svg">
        <link rel="apple-touch-icon" sizes="114x114" href="/assets/media/svg/favicon.svg">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;600;700;900&display=swap" rel="stylesheet">


        <!-- Bootstrap --> 
        <link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.css" />

        <!-- animation --> 
        <link rel="stylesheet" href="/assets/css/animate.css" />

        <!-- PLUGINS -->
        <!-- general -->
        <link rel="stylesheet" href="/assets/css/general.css" />
    </head>
<body>

        <?php


        include_once $_SERVER['DOCUMENT_ROOT'].'/layout/_header.php';

        include_once $_SERVER['DOCUMENT_ROOT'].'/views/'.$_GET['template_url'];

        include_once $_SERVER['DOCUMENT_ROOT'].'/layout/_footer.php';

        ?>


        <!-- javascript libraries / javascript files set #1 --> 
        <script type="text/javascript" src="/assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="/assets/plugins/bootstrap/js/bootstrap.js"></script> 
        
        <!-- PLUGINS -->
        <script type="text/javascript" src="/assets/js/wow.js"></script>
        <!-- setting -->
        <script type="text/javascript" src="/assets/js/general.js"></script>
</body>

</html>
