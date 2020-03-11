<?php
include('koneksi.php');
$id = $_POST['id'];
$berat = $_POST['berat'];
$harga = $_POST['harga'];
$UI = $_POST['userId'];


$query = mysqli_query($host, "INSERT into pembayaran values ('', '$id','$berat','$harga' )");
$query1 = mysqli_query($host, "UPDATE setor SET pembayaran = '1' where id_Setor = $id");

$query2 = mysqli_query($host, "SELECT * from uang where uid = $UI");

if (mysqli_num_rows($query2) > 0) {
    $data = mysqli_fetch_array($query2);
    $harga += $data['uang'];

    $query4 = mysqli_query($host, "UPDATE uang SET uang = $harga where uid=$UI");

} else {
    $query3 = mysqli_query($host, "INSERT INTO uang (uid,uang) values ($UI,$harga)");

}


header('location: datasetor.php');

?>
