<?php
$host = "localhost"; //alamat server
$user = "root";     // user ke db
$pass = "";         // password ke db
$dbnm = "kkp_project_kantor"; //nama database

$conn = mysqli_connect($host, $user, $pass, $dbnm);

if(!$conn){
    die('Koneksi DB Gagal');
}  

?>