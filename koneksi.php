<?php
$h = 'localhost';
$u = 'root';
$p = '';
$db = 'tes_ulangan';

$conn = mysqli_connect("localhost","root","","tes_ulangan");

if(!$conn){
  die("koneksi error" . mysqli_connect_error());
}
?>