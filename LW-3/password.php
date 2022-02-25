<?php
    header("Content-Type: text/plain");

    $string = $_GET['password'];
    if (empty($string)) {
        echo("ОшИБКАААА! Нет пароля");
    }
    else {
        $strength = 0;
        $strength += 4 * strlen($string);
        $count_digit = strlen(preg_replace('/[^\d]/', '', $string));
        $strength += $count_digit * 4;
        if (ctype_upper($string)) {
            $high = 0;
            for ($i = 0; $i < strlen($string); $i++) {
                if (ctype_upper(substr($string, $i, 1))) {
                    $high++;
                }
            }
            $strength += (strlen($string) - $high) * 2;
        }

        if (ctype_alpha($string) or ctype_digit($string)){
            $strength -= strlen($string);
            }
        $c = 0;
        for ($i = 0; $i < strlen($string); $i++) {
            for ($m = 0; $m < strlen($string); $m++){
                if ((substr($string, $i, 1)) == (substr($string, $m, 1))){
                    $c++;
                }
            }
        }
        $strength -= $c;
        echo "Cила пароля: ", $strength;


    }