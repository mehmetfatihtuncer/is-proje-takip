<?php


try {
    $db = new PDO("mysql:host=localhost;dbname=istakip;charset=UTF8", "root", "");
} catch (PDOException $error) {
    echo "Connection error <br/>", $error->getMessage();
}


?>