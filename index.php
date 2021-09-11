
 <?php

include_once $_SERVER['DOCUMENT_ROOT'].'config/site.php';

?>

<!doctype html>
<html class="no-js" lang="es">
    <head>
        <!-- title -->
        <title><?= $title ?></title>
        <meta name="keywords" content="<?= $keywords?>">
        <meta charset="utf-8">
        <meta name="author" content="Jera Code">
        <meta name="robots" content= "index, follow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="description" content="<?= $description ?>">  
        
        <!-- METAS OPEN GRAPH -->
        <meta property="og:description" content="<?= $description ?>">
        <meta property="og:url" content="https://test-mas-que-partners.herokuapp.com/">
        <meta property="og:locale" content="es_CO" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="https://test-mas-que-partners.herokuapp.com/assets/media/svg/logo_dentiarte_text.svg">
        <meta property="og:site_name" content="<?= $title ?>" />
        
        <!-- favicon -->
        <link rel="icon" type="image/png" href="/assets/media/favicon.png">
        <link rel="apple-touch-icon" href="/assets/media/favicon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/assets/media/favicon.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/assets/media/favicon.png">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;600;700;900&display=swap" rel="stylesheet">


        <!-- Bootstrap --> 
        <link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.css" />

        <!-- animation --> 
        <link rel="stylesheet" href="/assets/css/animate.css" />

        <!-- PLUGINS -->
        <link href="/assets/plugins/select2/select2.min.css" rel="stylesheet" />
        <!-- general -->
        <link rel="stylesheet" href="/assets/css/general.css" />

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5WDQDS3');</script>
        <!-- End Google Tag Manager -->

        <script async src="https://www.googletagmanager.com/gtag/js?id=G-HL9MT5LPW2"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-HL9MT5LPW2');
        </script>
        
    </head>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5WDQDS3"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        

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
        <script src="/assets/plugins/select2/select2.min.js"></script>
        <script type="text/javascript" src="/assets/js/lazysizes.min.js"></script>
        <script type="text/javascript" src="/assets/js/wow.min.js"></script>

        <script>
              new WOW().init();
              </script>


        <!-- setting -->
        <script type="text/javascript" src="/assets/js/general.js"></script>

        
</body>



</html>
