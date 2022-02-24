<?php
   $string = $_GET['text'];
   if (empty($string)) {
       echo("ОшИБКАААА! Нет данных");
   }
   else
       if (ctype_alpha(substr($string, 0, 1))) {
           echo "YES\n";
   }
       else {
           echo "NO\n";
   }

