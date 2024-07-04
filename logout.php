<?php
// Mulai session untuk mengakses atau menghapus data session
session_start();

// Hapus semua data session
session_unset();

// Hancurkan session
session_destroy();

// Redirect ke halaman login setelah logout
header("Location: login.php");
exit;
?>