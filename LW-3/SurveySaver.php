<?php


if (isset($_GET["email"])) {

    $email = $_GET["email"];
    $first_name = $_GET["first_name"];
    $last_name = $_GET["last_name"];
    $age = $_GET["age"];
    $file = $email . '.txt';

    if (file_exists($file)) {
        $file = fopen($_GET['email'] . ".txt", "r+");
    } else {
        $file = fopen($_GET['email'] . ".txt", "w+");
    }
    rewind($file);

    if (!empty($email)) {
        fputs($file, "Email: ");
        fputs($file, $email);
        fwrite($file, $_POST['info'] . PHP_EOL);
    } else {
        fgets($file, 4096);
    }


    if (!empty($first_name)) {
        fputs($file, "First Name: ");
        fputs($file, $first_name);
        fwrite($file, $_POST['info'] . PHP_EOL);
    } else {
        fgets($file, 4096);
    }


    if (!empty($last_name)) {
        fputs($file, "Last Name: ");
        fputs($file, $last_name);
        fwrite($file, $_POST['info'] . PHP_EOL);
    } else {
        fgets($file, 4096);
    }


    if (!empty($age)) {
        fputs($file, "Age: ");
        fputs($file, $age);
        fwrite($file, $_POST['info'] . PHP_EOL);
    } else {
        fgets($file, 4096);
    }

    fclose($file);
    readfile("file.txt");

}
else{
    echo ('email not found');
}
//?email=ivan.ivanov@gmail.com&first_name=Ivan&last_name=Ivanov&age=20