<?php
$host = "localhost";
$user = "root";     // ganti sesuai user mysql kamu
$pass = "";         // ganti sesuai password mysql kamu
$db   = "ecommers_31";

$koneksi =  mysqli_connect($host,$user,$pass,$db) ;

if (!$koneksi) {
    die("koneksi gagal : " . mysqli_connect_eror()) ;
}
?>