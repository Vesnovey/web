<?php
if($_POST) {

    $visitor_name = "";
    $visitor_email = "";
    $email_title = "";
    $activity = "";


    if(isset($_POST['visitor_name'])) {
        $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
    }

    if(isset($_POST['visitor_email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
    }


    if(isset($_POST['activity'])) {
        $activity = filter_var($_POST['activity'], FILTER_SANITIZE_STRING);
    }




    $file = $visitor_email . '.txt';


    if (file_exists($file)) {
        $file = fopen($visitor_email . ".txt", "r+");
    } else {
        $file = fopen($visitor_email . ".txt", "w+");
    }
    rewind($file);




    if (!empty($visitor_name)) {
        fputs($file, "Name: ");
        fputs($file, $visitor_name);
        fwrite($file, $_POST['info'] . PHP_EOL);
    } else {
        fgets($file, 4096);
    }


    if (!empty($visitor_email)) {
        fputs($file, "Email: ");
        fputs($file, $visitor_email);
        fwrite($file, $_POST['info'] . PHP_EOL);
    } else {
        fgets($file, 4096);
    }

    if (!empty($activity)) {
        fputs($file, "Activity: ");
        fputs($file, $activity);
        fwrite($file, $_POST['info'] . PHP_EOL);
    } else {
        fgets($file, 4096);
    }



        fclose($file);
        readfile("file.txt");

} else {
    echo '<p>Something went wrong</p>';
}