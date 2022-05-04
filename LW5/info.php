
<?php
if($_POST){
    $visitor_email = "";
    if(isset($_POST['visitor_email'])) {
        $visitor_email = $_POST['visitor_email'];
    }
    $file = $visitor_email.'.txt';
    if (file_exists($file)) {
        $file = @fopen($visitor_email.".txt", "r+");
    } else {

        echo 'File not found';

    }
    if ($file) {
        while (($buffer = fgets($file, 4096)) !== false) {
            echo $buffer;
            echo "<br>";
        }

        fclose($file);
    }

}else{
    echo '<p>Something went wrong</p>';
}