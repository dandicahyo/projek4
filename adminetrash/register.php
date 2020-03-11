<?php 


$host = mysqli_connect("localhost", "root", "", "itc");

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $role = $_POST['role'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM user WHERE email='$email'";
    
    // die(var_dump(mysqli_fetch_row(mysqli_query($host, $query))));
    if (mysqli_fetch_row(mysqli_query($host, $query)) == NULL) {
        $query = "INSERT INTO user (name, email, role, password) VALUES ('$name', '$email', '$role', '$password')";

        if (mysqli_query($host, $query))
            header('Location: login-register.html');
        else
            echo "Kesalahan Pada Sistem";
    } else {
        echo "Email Sudah Terdaftar";
        // header('Location: login-register.html');
    }
}