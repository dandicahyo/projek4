<?php
// Load file koneksi.php
include "koneksi.php";
session_start();
// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$p= $_SESSION['uid'];
// Ambil Data yang Dikirim dari Form
$nama = $_POST['nama'];
$role= $_POST['role'];
$password = $_POST['password'];
$email = $_POST['email'];

    // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
    $query = "SELECT * FROM user WHERE id='".$p."'";
    $sql = mysqli_query($host, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
    
    // Proses ubah data ke Database
    $query = "UPDATE user SET name='".$nama."', role='".$role."', password='".$password."', email='".$email."' WHERE uid='".$p."'";
    $sql = mysqli_query($host, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: editprofile.php"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='form_ubahuser.php'>Kembali Ke Form</a>";
    }
?>