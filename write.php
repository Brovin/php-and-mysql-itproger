<?php
    if($_POST['message'] != ""){
        $mess = $_POST['message'] . "\n";
        $file = fopen('text.txt', 'a');
        fwrite($file, $mess);
        fclose($file);
    }
    header('Location: /');
    exit();
?>