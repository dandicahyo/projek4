<?php 

 // memanggil file koneksi.php
 include "koneksi.php";
 // membuat variable dengan nilai dari form
 // variable password, dan nilainya sesuai yang dimasukkan di input name="password" tadi
 // md5 ada sebuah fungsi PHP untuk engkripsi. misalnya admin jadi 21232f297a57a5a743894a0e4a801fc3. untuk lengkapnya, silahkan googling tentang md5

if (isset($_POST['login'])) {
    $username = $_POST['email']; // variablenya = username, dan nilainya sesuai yang dimasukkan di input name="username" tadi
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE email='$username' AND password = '$password' ";
    $result = mysqli_query($host, $query);
    $result = mysqli_fetch_row($result);
    
    if (! empty($result)) {
        if ($result[2] === 'CUSTOMER' )
        {
            session_start(); 
            $_SESSION['uid']=$result[0];
            $_SESSION['username'] = $username;
            header('Location: ../index.php');
            
        }
        else if($result[2] === 'BANK_SAMPAH' && $result[3] == 1){

            session_start();
            $_SESSION['uid']=$result[0];
            
            $_SESSION['username'] = $username;
            header('Location: index.php');
            

        }
        else if($result[2] === 'ADMIN'){

            session_start();
            $_SESSION['uid']=$result[0];
            
            $_SESSION['username'] = $username;
            header('Location: ../adminsuper/index.php');
            

        }
        
        else
            echo "Belum Di Verifikasi";
    } else {
        header('Location: login-register.html');
    }
}


?>