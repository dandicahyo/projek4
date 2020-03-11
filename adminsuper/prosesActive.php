<?php
include('koneksi.php');
$id = $_GET['id'];

$query = mysqli_query($host, "UPDATE user SET status = 1 where uid = $id ");

header('Location: active.php');

?>