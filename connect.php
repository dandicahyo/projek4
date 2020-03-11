<?php 
$host = mysqli_connect("localhost", "root", "");

if ($host) {

} else {
    echo "koneksi gagal.<br/>";
}
$db = mysqli_select_db($host, "itc");

if ($db) {

} else {
    echo "koneksi database gagal.";
}
?>