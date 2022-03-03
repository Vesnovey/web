<?php

    $string = $_GET['password'];
    if (empty($string)) {
        echo("ОшИБКАААА! Нет пароля");
}
    else{
        $strength = 4*length($string);
        $count  = strlen(preg_replace('/[^\d]/','',$string));
        $strength = $strength + $count;


}
