<?php 
    if(!isset($text_color_footer)){ $text_color_footer = 'dark';}
?>
<!-- FOOTER -->
<table width="100%" cellspacing="0" cellpadding="0" border="0" role="presentation">
    <tbody>
        <tr>
            <td class="o_bg-main o_px-xs o_pb-lg" align="center">
                <!--[if mso]><table width="632" cellspacing="0" cellpadding="0" border="0" role="presentation"><tbody><tr><td><![endif]-->
                <table class="o_block o_bg-tone_footer" width="100%" cellspacing="0" cellpadding="0" border="0" role="presentation">
                        <tbody>
    
                            <tr>                           
                                <td class="o_sans o_text-xs o_px-xs o_py-md o_text-<?= $text_color_footer ?>" style="vertical-align: middle;" align="center">
                                    <p class="o_f-w-300" style="letter-spacing:1.4px">© Copyright <?= date('Y') ?>  <a style="color:#FFEF20" target="_blank" href="<?=$main_url ?>">Mas que partners</a> Todos los derechos reservados.</p>
                                </td>
                            </tr>
                        </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>