<?php
    header("Content-Type: text/plain");
    $first_name = $_GET['first_name'];
    $last_name = $_GET['last_name'];
    $email = $_GET['email'];
    $age = $_GET['age'];
    $text = $fp = fopen('$email.txt', 'r+');
    if (empty($first_name)){
        fwrite($text, 'First Name = ');
    }
    else {
        fwrite($text,'First Name = ', $first_name);
    }

    if (empty($last_name)){
        fwrite($text, 'Last Name = ');
    }
    else {
        fwrite($text,'Last Name = ', $first_name);
    }

    if (empty($email)){
        fwrite($text, 'Email = ');
    }
    else {
        fwrite($text,'Email = ', $email);
    }

    if (empty($age)){
        fwrite($text, 'Age = ');
    }
    else {
        fwrite($text,'Age = ', $age);
    }



