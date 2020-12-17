<?php

$dbhost = "localhost";
$dbname = "loginform";
$dbuser = "root";
$dbpassword = "";

$koneksi = mysqli_connect($dbhost,$dbuser,$dbpassword) or die ("Koneksi ke server error!");
$db_select = mysqli_select_db($koneksi, $dbname) or die ("Koneksi ke Database error!");

?>
