<?php
// Mengatur koneksi ke basis data MySQL menggunakan PDO
$dsn = 'mysql:host=localhost;dbname=bukudb';
$username = 'username';
$password = '';

try {
    $dbh = new PDO($dsn, $username, $password);
    echo "Koneksi sukses";
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}
  
?>