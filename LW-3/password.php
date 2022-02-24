<?php
    $string = $_GET['password'];
    if (empty($string)) {
        echo("ОшИБКАААА! Нет пароля");
    }
    else {
        $strength = 0;
        $strength += 4 * length($string);
        $count_digit  = strlen(preg_replace('/[^\d]/','',$string));
        $strength += $count_digit * 4;
        if (ctype_upper($string)){
            $upper = 0;
            $lower = 0;
            foreach(preg_split('~~u', $string, -1, PREG_SPLIT_NO_EMPTY) as $item) {
                if (preg_match('~[A-ZА-ЯЁ]~u', $item)) ++$upper;
                else if (preg_match('~[a-zа-яё]~u', $item)) ++$lower;
                echo $upper;
            }
        }
    }