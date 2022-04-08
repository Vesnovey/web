<?php
if (isset($_GET["email"])) {

    $email = $_GET["email"];
    $file = $email . '.txt';

    if (file_exists($file)) {
        $file = @fopen($_GET['email'] . ".txt", "r");
    } else {
        echo('file not found');
    }
    if ($file) {
        while (($buffer = fgets($file, 4096)) !== false) {
            echo $buffer;
            echo "<br>";
        }
        if (!feof($file)) {
            echo "Error";
        }
        fclose($file);
    }
}