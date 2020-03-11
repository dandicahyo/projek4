<?php
 session_start(); // memulai session
 session_destroy(); // menghapus session
 header("location:adminetrash/login-register.html"); // mengambalikan ke form_login.php
 ?>