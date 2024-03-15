<?php

try {

    $con = new PDO('mysql:host=localhost;dbname=bukudb', 'root', '', array(PDO::ATTR_PERSISTENT => true));
} catch (PDOException $e) {

    echo $e->getMessage();
}

include_once 'buku_class.php';

$buku = new buku($con);

?>