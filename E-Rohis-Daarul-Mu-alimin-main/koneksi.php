<?php
$host="localhost";
$user="root";
$password="";
$db="db_erohis";
$konek=mysqli_connect($host,$user,$password,$db);

if(!$konek) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
