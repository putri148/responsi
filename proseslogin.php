<?php
// Simulasi proses autentikasi sederhana
session_start();

$allowed_username = 'admin';
$allowed_password = 'admin123';

// Jika pengguna sudah login, redirect ke halaman dashboard atau halaman lain yang sesuai
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php"); // Ganti dengan halaman yang sesuai
    exit;
}

// Jika ada data POST dari form login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek username dan password (contoh sederhana, bisa diganti dengan validasi sesuai kebutuhan)
    if ($username === $allowed_username && $password === $allowed_password) {
        // Simpan informasi login ke dalam session
        $_SESSION['username'] = $username;

        // Redirect ke halaman dashboard atau halaman lain yang sesuai
        header("Location: dashboard.php"); // Ganti dengan halaman yang sesuai
        exit;
    } else {
        $error = "Invalid username or password";
    }
    header("Location: login.php");
}
?>
