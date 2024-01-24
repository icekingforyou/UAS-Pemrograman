<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'uas_pem';

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die('Koneksi gagal: ' . mysqli_connect_error());
}
?>