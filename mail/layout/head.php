
<?php 
    /* VALIDACIONES POR SI NO VIENEN VARIBALES*/
    if(!isset($title)){ $title = 'Email';}
    if(!isset($bg_header)){ $bg_header = '#1E1E2D';}
    if(!isset($bg_footer)){ $bg_footer = '#1E1E2D';}
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$title?></title>
    <!-- build:maincss -->
    <!--<link href="css/style.css" rel="stylesheet" type="text/css" />-->
    <!-- endbuild -->
    <!--[if mso]-->
    <style type="text/css">

    /* RESET CSS */
    a,abbr,acronym,address,applet,article,aside,audio,b,big,blockquote,body,canvas,caption,center,cite,code,dd,del,details,dfn,div,dl,dt,em,embed,fieldset,figcaption,figure,footer,form,h1,h2,h3,h4,h5,h6,header,hgroup,html,i,iframe,img,ins,kbd,label,legend,li,mark,menu,nav,object,ol,output,p,pre,q,ruby,s,samp,section,small,span,strike,strong,sub,summary,sup,table,tbody,td,tfoot,th,thead,time,tr,tt,u,ul,var,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:after,blockquote:before,q:after,q:before{content:'';content:none}table{border-collapse:collapse;border-spacing:0}
        p{ font-family: "Oswald",Lato,Tahoma,Verdana,Segoe,sans-serif;font-weight: 300; }
        table { border-collapse: collapse; }
        .o_col { float: left; }
        .text-p{  font-size: 20px !important; }
        .orden a{   padding: 8px 45px !important;    font-size: 20px !important; }
        .precio{  max-width: 130px !important;    }
        .cantidad{ max-width: 70px !important; }
        .bottom{  vertical-align: bottom !important; }
        .o_sans,  .o_heading {   font-family: Helvetica, Arial, sans-serif; }
        .o_heading { font-weight: bold; }

        .o_sans,
        .o_heading,
        .o_sans p,
        .o_sans li { margin-top: 0px; margin-bottom: 0px; }

        a { text-decoration: none;outline: none; }

        .o_underline { text-decoration: underline; }
        .o_linethrough { text-decoration: line-through; }
        .o_nowrap { white-space: nowrap; }
        .o_caps {  text-transform: uppercase; letter-spacing: 1px; }

        .o_text-xxs { font-size: 12px;line-height: 19px; }
        .o_text-xs {  font-size: 14px;line-height: 21px; }
        .o_text {  font-size: 16px; line-height: 24px; }
        .o_text-md {  font-size: 17px;line-height: 28px; }
        .o_text-lg {  font-size: 24px; line-height: 30px;}
        .o_text-xl {  font-size: 30px; line-height: 40px;letter-spacing: 3px;}
        .o_text-btn {  font-size: 20px;  letter-spacing:2px ; line-height: 30px; }
        .o_text-big{ font-size: 30px; line-height: 40px; letter-spacing:5px;}
        .o_text-big-xs{ font-size: 23px; line-height: 35px; letter-spacing:5px;}
        .o_text-big-md{ font-size: 40px; line-height: 60px; letter-spacing:10px;}
        .o_text-big-lg{ font-size: 60px; line-height: 90px; letter-spacing:15px;}

        h1.o_heading {
            font-size: 36px;
            line-height: 47px; }

        h2.o_heading {
            font-size: 30px;
            line-height: 39px; }

        h3.o_heading {
            font-size: 24px;
            line-height: 31px; }

        h4.o_heading {
            font-size: 18px;
            line-height: 23px; }

        body,
        .e_body {
            width: 100%;
            margin: 0px;
            padding: 0px;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%; }

        .o_re {
            font-size: 0;
            vertical-align: top; }

        .o_block {
            max-width: 632px;
            margin: 0 auto; }

        .o_block-lg {
            max-width: 800px;
            margin: 0 auto; }

        .o_block-xs {
            max-width: 432px;
            margin: 0 auto; }

        .o_col,
        .o_col_i {
            display: inline-block;
            vertical-align: top; }

        .o_col {
            width: 100%; }

        .o_col-1 {
            max-width: 100px; }

        .o_col-o {
            max-width: 132px; }

        .o_col-2 {
            max-width: 200px; }

        .o_col-3 {
            max-width: 300px; }

        .o_col-4 {
            max-width: 400px; }

        .o_col-oo {
            max-width: 468px; }

        .o_col-5 {
            max-width: 500px; }

        .o_col-6s {
            max-width: 584px; }

        .o_col-6 {
            max-width: 600px; }

        img {
            -ms-interpolation-mode: bicubic;
            vertical-align: middle;
            border: 0;
            line-height: 100%;
            height: auto;
            outline: none;
            text-decoration: none; }

        .o_img-full {
            width: 100%; }

        .o_inline {
            display: inline-block; }

        .o_btn { mso-padding-alt: 12px 24px; }
        .o_btn a { display: block; padding: 12px 24px;mso-text-raise: 3px; }
        .o_btn-o { mso-padding-alt: 8px 20px; }
        .o_btn-o a {display: block;  padding: 8px 20px; mso-text-raise: 3px; }
        .o_btn-xs { mso-padding-alt: 7px 16px; }
        .o_btn-xs a { display: block; padding: 7px 16px; mso-text-raise: 3px; }
        .o_btn-b { mso-padding-alt: 7px 8px; }
        .o_btn-b a {display: block;padding: 7px 8px;font-weight: bold; }
        .o_btn-b span { mso-text-raise: 6px; display: inline; }

        .img_fix { mso-text-raise: 6px;display: inline; }

        .o_bg-light {background-color: #dbe5ea; }
        .o_bg-ultra_light { background-color: #ebf5fa; }
        .o_bg-white { background-color: #ffffff; }
        .o_bg-dark {background-color: #231F20; }
        .o_bg-primary { background-color: #126de5; }
        .o_bg-secondary { background-color: #424651; }
        .o_bg-success {background-color: #0ec06e; }
        .o_bg-tone_header {background-color: <?= $bg_header ?>; }
        .o_bg-tone_footer {background-color: <?= $bg_footer ?>; }
        .o_bg-main {background-color: #fff35d; }
        
        .o_text-primary,
        a.o_text-primary span,
        a.o_text-primary strong,
        .o_text-primary.o_link a {  color: #126de5; }

        .o_text-secondary,
        a.o_text-secondary span,
        a.o_text-secondary strong,
        .o_text-secondary.o_link a { color: #424651; }

        .o_text-dark,
        a.o_text-dark span,
        a.o_text-dark strong,
        .o_text-dark.o_link a { color: #242b3d; }

        .o_text-dark_light,
        a.o_text-dark_light span,
        a.o_text-dark_light strong,
        .o_text-dark_light.o_link a { color: #a0a3ab; }

        .o_text-white,
        a.o_text-white span,
        a.o_text-white strong,
        .o_text-white.o_link a { color: #ffffff; }

        .o_text-light,
        a.o_text-light span,
        a.o_text-light strong,
        .o_text-light.o_link a { color: #82899a; }

        .o_text-success,
        a.o_text-success span,
        a.o_text-success strong,
        .o_text-success.o_link a { color: #0ec06e; }
        
        .o_text-tone_1,
        a.o_text-tone_1 span,
        a.o_text-tone_1 strong,
        .o_text-tone_1.o_link a { color: #729998; }

        .o_b-primary { border: 2px solid #126de5; }
        .o_bb-primary {border-bottom: 1px solid #126de5; }
        .o_b-secondary { border: 2px solid #424651; }

        .o_bx-secondary {  border: 1px solid #424651; }
        .o_bb-secondary { border-bottom: 1px solid #424651; }
        .o_b-dark { border: 2px solid #242b3d; }
        .o_b-light { border: 1px solid #d3dce0; }
        .o_bb-light {border-bottom: 1px solid #d3dce0; }
        .o_bt-light { border-top: 1px solid #d3dce0; }

        .o_br-light {border-right: 4px solid #d3dce0; }

        .o_bb-ultra_light {
            border-bottom: 1px solid #b6c0c7; }

        .o_bb-dark_light {
            border-bottom: 1px solid #4a5267; }

        .o_bt-dark_light {
            border-top: 1px solid #4a5267; }

        .o_b-white {
            border: 2px solid #ffffff; }

        .o_bb-white {
            border-bottom: 1px solid #ffffff; }

        .o_br {
            border-radius: 4px; }

        .o_br-t {
            border-radius: 4px 4px 0px 0px; }

        .o_br-b {
            border-radius: 0px 0px 4px 4px; }

        .o_br-l {
            border-radius: 4px 0px 0px 4px; }

        .o_br-r {
            border-radius: 0px 4px 4px 0px; }

        .o_br-max { border-radius: 96px; }

        .o_hide,
        .o_hide-lg {
            display: none;
            font-size: 0;
            max-height: 0;
            width: 0;
            line-height: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden; }

        .o_center { text-align: center; }

        table.o_center {
            margin-left: auto;
            margin-right: auto; }

        .o_left {
            text-align: left; }

        table.o_left {
            margin-left: 0;
            margin-right: auto; }

        .o_right {
            text-align: right; }

        table.o_right {
            margin-left: auto;
            margin-right: 0; }

        .o_pl-xs {  padding-left: 8px;}
        .o_pl-md { padding-left: 24px; }
        .o_pl-lg {  padding-left: 32px;}
        .o_pl-xl { padding-left: 64px; }
        .o_pl {  padding-left: 16px; }

        .o_pr-xs {  padding-right: 8px;}
        .o_pr-md { padding-right: 24px; }
        .o_pr-lg {  padding-right: 32px;}
        .o_pr-xl { padding-right: 64px; }
        .o_pr {  padding-right: 16px; }


        .o_px { padding-left: 16px; padding-right: 16px; }
        .o_px-xs { padding-left: 8px;padding-right: 8px; }
        .o_px-md { padding-left: 24px;  padding-right: 24px; }
        .o_px-lg {  padding-left: 32px;  padding-right: 32px; }
        .o_px-xl {   padding-left: 64px; padding-right: 64px; }
        .o_py {  padding-top: 16px; padding-bottom: 16px; }

        .o_py-xs {padding-top: 8px;  padding-bottom: 8px; }
        .o_py-md { padding-top: 24px;padding-bottom: 24px; }
        .o_py-lg { padding-top: 32px;  padding-bottom: 32px; }
        .o_py-xl {  padding-top: 64px;  padding-bottom: 64px; }

        .o_pt-none { padding-top: 0; }
        .o_pt-xs { padding-top: 8px; }
        .o_pt { padding-top: 16px; }
        .o_pt-md {padding-top: 24px; }
        .o_pt-lg {padding-top: 32px; }
        .o_pt-xl {padding-top: 64px; }

        .o_pb-xs {padding-bottom: 8px; }
        .o_pb {padding-bottom: 16px; }
        .o_pb-md { padding-bottom: 24px; }
        .o_pb-lg { padding-bottom: 32px; }
        .o_pb-xl { padding-bottom: 64px; }

        .o_p-icon { padding: 12px; }

        .o_body .o_mb-xxs { margin-bottom: 4px; }
        .o_body .o_mb-xs {  margin-bottom: 8px; }
        .o_body .o_mb {  margin-bottom: 16px; }
        .o_body .o_mb-md { margin-bottom: 24px; }
        .o_body .o_mb-lg { margin-bottom: 32px; }
        .o_body .o_mt { margin-top: 16px; }
        .o_body .o_mt-md { margin-top: 24px; }
        .o_body .o_mt-lg { margin-top: 32px; }

        .o_bg-center { background-position: 50% 0; background-repeat: no-repeat; }
        .o_bg-left {background-position: 0 0; background-repeat: no-repeat; }

        .bg_responsive{padding-bottom:70px;     }
    
        @media (max-width: 649px) {
            .o_col-full {
                max-width: 100% !important; }
            .o_col-half {
                max-width: 50% !important; }
            .o_hide-lg {
                display: inline-block !important;
                font-size: inherit !important;
                max-height: none !important;
                line-height: inherit !important;
                overflow: visible !important;
                width: auto !important;
                visibility: visible !important; }
            .o_hide-xs,
            .o_hide-xs.o_col_i {
                display: none !important;
                font-size: 0 !important;
                max-height: 0 !important;
                width: 0 !important;
                line-height: 0 !important;
                overflow: hidden !important;
                visibility: hidden !important;
                height: 0 !important; }
            .o_xs-center {
                text-align: center !important; }
            .o_xs-left {
                text-align: left !important; }
            .o_xs-right {
                text-align: right !important; }
            table.o_xs-left {
                margin-left: 0 !important;
                margin-right: auto !important;
                float: none !important; }
            table.o_xs-right {
                margin-left: auto !important;
                margin-right: 0 !important;
                float: none !important; }
            table.o_xs-center {
                margin-left: auto !important;
                margin-right: auto !important;
                float: none !important; }
            h1.o_heading {
                font-size: 32px !important;
                line-height: 41px !important; }
            h2.o_heading {
                font-size: 26px !important;
                line-height: 37px !important; }
            h3.o_heading {
                font-size: 20px !important;
                line-height: 30px !important; }
            .o_xs-py-md {
                padding-top: 24px !important;
                padding-bottom: 24px !important; }
            .o_xs-pt-xs {
                padding-top: 8px !important; }
            .o_xs-pb-xs {
                padding-bottom: 8px !important; } }


            @media (max-width: 450px) {
                .o_text-big-lg{font-size:50px}
                table tr.o_wrap_column > td{ display: table;  width: 100%;  }
                table tr.o_wrap_column > td{ margin-bottom:30px;  }
                table tr.o_wrap_column {  display: table-cell; }
                table.mobile_table_100{width: 100%;}
                .bg_responsive{padding-bottom:200px; background-position: 0 90%!important;}
            
            }
            
            @media (max-width: 375px) {
                .o_text-big-lg{font-size:45px}
            }

        @media screen {

            /*************************
                    - FONTS-
            **************************/


            /* cyrillic-ext */
            @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 200;
            src: url(https://fonts.gstatic.com/s/oswald/v36/TK3iWkUHHAIjg752FD8Ghe4.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            }
            /* cyrillic */
            @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 200;
            src: url(https://fonts.gstatic.com/s/oswald/v36/TK3iWkUHHAIjg752HT8Ghe4.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            }
            /* vietnamese */
            @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 200;
            src: url(https://fonts.gstatic.com/s/oswald/v36/TK3iWkUHHAIjg752Fj8Ghe4.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            }
            /* latin-ext */
            @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 200;
            src: url(https://fonts.gstatic.com/s/oswald/v36/TK3iWkUHHAIjg752Fz8Ghe4.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            }
            /* latin */
            @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 200;
            src: url(https://fonts.gstatic.com/s/oswald/v36/TK3iWkUHHAIjg752GT8G.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            }
            /* cyrillic-ext */
            @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 300;
            src: url(https://fonts.gstatic.com/s/oswald/v36/TK3iWkUHHAIjg752FD8Ghe4.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            }
            /* cyrillic */
            @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 300;
            src: url(https://fonts.gstatic.com/s/oswald/v36/TK3iWkUHHAIjg752HT8Ghe4.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            }
            /* vietnamese */
            @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 300;
            src: url(https://fonts.gstatic.com/s/oswald/v36/TK3iWkUHHAIjg752Fj8Ghe4.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            }
            /* latin-ext */
            @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 300;
            src: url(https://fonts.gstatic.com/s/oswald/v36/TK3iWkUHHAIjg752Fz8Ghe4.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            }
            /* latin */
            @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 300;
            src: url(https://fonts.gstatic.com/s/oswald/v36/TK3iWkUHHAIjg752GT8G.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            }
            /* cyrillic-ext */
            @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/oswald/v36/TK3iWkUHHAIjg752FD8Ghe4.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            }
            /* cyrillic */
            @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/oswald/v36/TK3iWkUHHAIjg752HT8Ghe4.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            }
            /* vietnamese */
            @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/oswald/v36/TK3iWkUHHAIjg752Fj8Ghe4.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            }
            /* latin-ext */
            @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/oswald/v36/TK3iWkUHHAIjg752Fz8Ghe4.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            }
            /* latin */
            @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/oswald/v36/TK3iWkUHHAIjg752GT8G.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            }
            /* cyrillic-ext */
            @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 500;
            src: url(https://fonts.gstatic.com/s/oswald/v36/TK3iWkUHHAIjg752FD8Ghe4.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            }
            /* cyrillic */
            @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 500;
            src: url(https://fonts.gstatic.com/s/oswald/v36/TK3iWkUHHAIjg752HT8Ghe4.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            }
            /* vietnamese */
            @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 500;
            src: url(https://fonts.gstatic.com/s/oswald/v36/TK3iWkUHHAIjg752Fj8Ghe4.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            }
            /* latin-ext */
            @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 500;
            src: url(https://fonts.gstatic.com/s/oswald/v36/TK3iWkUHHAIjg752Fz8Ghe4.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            }
            /* latin */
            @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 500;
            src: url(https://fonts.gstatic.com/s/oswald/v36/TK3iWkUHHAIjg752GT8G.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            }
            /* cyrillic-ext */
            @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 600;
            src: url(https://fonts.gstatic.com/s/oswald/v36/TK3iWkUHHAIjg752FD8Ghe4.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            }
            /* cyrillic */
            @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 600;
            src: url(https://fonts.gstatic.com/s/oswald/v36/TK3iWkUHHAIjg752HT8Ghe4.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            }
            /* vietnamese */
            @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 600;
            src: url(https://fonts.gstatic.com/s/oswald/v36/TK3iWkUHHAIjg752Fj8Ghe4.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            }
            /* latin-ext */
            @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 600;
            src: url(https://fonts.gstatic.com/s/oswald/v36/TK3iWkUHHAIjg752Fz8Ghe4.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            }
            /* latin */
            @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 600;
            src: url(https://fonts.gstatic.com/s/oswald/v36/TK3iWkUHHAIjg752GT8G.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            }
            /* cyrillic-ext */
            @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 700;
            src: url(https://fonts.gstatic.com/s/oswald/v36/TK3iWkUHHAIjg752FD8Ghe4.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            }
            /* cyrillic */
            @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 700;
            src: url(https://fonts.gstatic.com/s/oswald/v36/TK3iWkUHHAIjg752HT8Ghe4.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            }
            /* vietnamese */
            @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 700;
            src: url(https://fonts.gstatic.com/s/oswald/v36/TK3iWkUHHAIjg752Fj8Ghe4.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            }
            /* latin-ext */
            @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 700;
            src: url(https://fonts.gstatic.com/s/oswald/v36/TK3iWkUHHAIjg752Fz8Ghe4.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            }
            /* latin */
            @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 700;
            src: url(https://fonts.gstatic.com/s/oswald/v36/TK3iWkUHHAIjg752GT8G.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            }

             /* Weights */
            .o_f-w-100{font-weight: 100;}
            .o_f-w-200{font-weight: 200;}
            .o_f-w-300{font-weight: 300;}
            .o_f-w-400{font-weight: 400;}
            .o_f-w-500{font-weight: 500;}
            .o_f-w-600{font-weight: 600;}
            .o_f-w-700{font-weight: 700;}
            .o_f-w-800{font-weight: 800;}
            .o_f-w-900{font-weight: 900;}

            .o_f-oswald{font-family: "Oswald", sans-serif !important;}
            .o_sans,
            .o_heading { font-family: "Oswald", sans-serif !important; }
            .o_heading,
            strong,
            b { font-weight: 400 !important; }
            a[x-apple-data-detectors] {  color: inherit !important;text-decoration: none !important; } 
        }

    </style>
    <!--<xml>
        <o:OfficeDocumentSettings>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
</head>