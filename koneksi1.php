<?php
$host = "localhost";
$user = "id15797194_admin";
$pass = "3&k\x&)H?&REt-Xf";
$db = "id15797194_dbakademik";

$con = mysqli_connect($host,$user,$pass); mysqli_select_db($con, $db);
// Cek koneksi
if (mysqli_connect_error()){
echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>
