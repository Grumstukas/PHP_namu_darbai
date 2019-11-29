<?php
/*jei lips per langą, lips šitoje vietoje*/

defined('DIR') or die();

if(!empty($_POST)){

    _d($_POST);

    if(isset($_POST['sum'])){
        $_SESSION['ats'] = 'Atsakymas: '.((float)$_POST['X'] + (float)$_POST['Y']);
    } elseif (isset($_POST['skir'])){
        $_SESSION['ats'] = 'Atsakymas: '.((float)$_POST['X'] - (float)$_POST['Y']);
    }

    $_SESSION['Y'] = (float)$_POST['Y'];
    $_SESSION['X'] = (float)$_POST['X'];
    header('Location: http://localhost/_pamoka1/PHP_namu_darbai/dalimis/sesijos.php');/*po posto reikia puslapį persiųsti */
    die(); //naršykle daugiau kieko negaus - tegu eina dirbti

}