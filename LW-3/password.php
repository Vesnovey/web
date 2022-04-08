<?php

    $Res = 0;
    $Password = $_GET["password"];
    $Length = strlen($_GET["password"]);
    $Res = 4 * $Length;

    $digits = preg_match_all("/[0-9]/", $Password);
    $Res += 4 * $digits;

    $UpperReg = preg_match_all("/[A-Z]/", $Password);
    if ($UpperReg !== 0){
        $Res += (2*($Length-$UpperReg));
    }

    $LowerReg = preg_match_all("/[a-z]/", $Password);
    if ($LowerReg !== 0){
        $Res += (2*($Length-$LowerReg));
    }

    if ($digits == 0) {
        $Res -= $Length;
    }

    if ($digits == $Length) {
    $Res -= $Length;
    }

    $Count = 0;
    $matches = count_chars($Password);


    for($i=0; $i < count($matches); $i++){
        if ($matches[$i] != 0)
            echo "\"", chr($i), "\" встречается в строке $matches[$i] раз(a). <br/>";
        if (($matches[$i] - 1) > 0)
            $Count += $matches[$i];

    }

    for($i = 0; $i < count($matches); $i++){
        //if ($matches[$i] != 0)
        if (($matches[$i] - 1) > 0){
            $Res -= $Count*($matches[$i]- 1);
            //echo $Res;
        }
    }

   echo $Res;
