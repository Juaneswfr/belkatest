<?php
/**
 * @var $sales \app\models\Sales
 */
?>
<!doctype html>
    <html lang="en">

    <?php include $_SERVER['DOCUMENT_ROOT'].'/mail/layout/head.php';?>

    <body class="o_body o_bg-main">
         
    <?php include $_SERVER['DOCUMENT_ROOT'].'/mail/layout/header.php';?>

            
            <table width="100%" cellspacing="0" cellpadding="0" border="0" role="presentation">
                <tbody>
                    <tr>
                    <td class="o_bg-main o_px-xs" align="center" >
                        <!--[if mso]><table width="632" cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td><![endif]-->
                        <table class="o_block" width="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="max-width: 632px;margin: 0 auto;">
                        <tbody>
                            <tr>
                            <td class="o_bg-white o_px-md o_py-md o_pt-md o_xs-py-md o_sans o_text-md o_text-light" align="center">
                                <table role="presentation" cellspacing="0" cellpadding="0" border="0">
                                    <tbody>
                                        <tr>
                                            <td class="o_bb-primary" height="40" width="32">&nbsp; </td>
                                            <td rowspan="2" class="o_sans o_text o_text-secondary o_px o_py" align="center">
                                                <img src="<?= $main_url ?>assets/media/email-icon-success.png" width="120" height="auto" alt="" style="max-width:48px;">
                                            </td>
                                            <td class="o_bb-primary" height="40" width="32">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td height="40">&nbsp; </td>
                                            <td height="40">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 8px; line-height: 8px; height: 8px;">&nbsp; </td>
                                            <td style="font-size: 8px; line-height: 8px; height: 8px;">&nbsp; </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <h2 class="o_heading o_text-dark o_mb-xxs o_text-big-md" style="letter-spacing:1px;">¡ Gracias por tu información !</h2>
                            </td>
                            </tr>
                        </tbody>
                        </table>
                        <!--[if mso]></td></tr></table><![endif]-->
                    </td>
                    </tr>
                </tbody>
            </table>

            <table width="100%" class="" cellspacing="0" cellpadding="0" border="0" role="presentation">
                <tbody>
                    <tr>
                        <td class="o_bg-main o_px-xs" align="center">
                            <!--[if mso]><table width="632" cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td><![endif]-->
                            <table class="o_block" width="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="max-width: 632px;margin: 0 auto;">
                                <tbody>
                                    <tr>
                                    <td class="o_bg-white o_px-md o_py o_pt-lg o_sans o_text o_text-secondary o_br-b" align="center">
                                        <h4 class="o_heading o_text-dark o_mb-md">Pronto nos pondremos en contacto contigo</h4>
                               

                                        <p class="o_text-xs o_mt-lg o_text-light">Enviada el <?= date('d \d\e M, Y', strtotime('today')) ?></p>
                                    </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--[if mso]></td></tr></table><![endif]-->
                        </td>
                    </tr>
                </tbody>
            </table>


    <?php include $_SERVER['DOCUMENT_ROOT'].'/mail/layout/footer.php';?>

    </body>
</html>