<?php
session_start();

$title = 'Fajitex';
$url = 'https://test-mas-que-partners.herokuapp.com';
$image = 'https://test-mas-que-partners.herokuapp.com/media/logo-black.png';
$keywords = 'Fajitex, fajas, mujer, hombre, Línea femenina, mujeres, fajitex, fajas, ropa femenina, ropa interior, post quirúrgicas, cinturilla';
$description = 'Encuentra las mejores fajas para mujer y hombre ideales para cualquier ocasión: de uso diario, para moldear, post quirúrgicas y mucho más.';

if($_GET['option'] == 'home' ){

    $title = 'Fajitex | ¡Qué bien te ves!';
}


if($_GET['option'] == 'blog' ){

    $title = 'Breve historia del nacimiento de las fajas';
    $keywords = 'Fajas,Faja, corsé, historia, moldear tu figura, historia de la faja';
    $description = 'La faja tiene más historia de la que crees. Haz un recorrido con nosotros y conoce cómo se relaciona con el corsé. Lee el artículo completo aquí.';
    $url = 'https://test-mas-que-partners.herokuapp.com/como-surgieron-las-fajas-y-cual-es-su-relacion-con-el-corse';
    $image = 'https://test-mas-que-partners.herokuapp.com/media/main-blog-1.jpg';
}

if($_GET['option'] == 'error' ){

    $title = 'Error 404 | ¡Qué bien te ves!';
}

?>