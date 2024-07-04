<?php
// Mulai session untuk akses informasi pengguna yang sudah login
session_start();

// Periksa apakah pengguna sudah login atau belum
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Jika belum login, redirect ke halaman login
    exit;
}

// Ambil informasi username dari session
$username = $_SESSION['username'];

// Fungsi untuk membaca data janji temu dari file
function readReservations() {
    $file = 'reservations.txt';
    if (file_exists($file)) {
        return file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    }
    return [];
}

$reservations = readReservations();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sehat Sentosa Hospital</title>
    <link rel='stylesheet' type='text/css' href='style.css'>
</head>
<body>
    <header>
        <h1>Selamat, <?php echo $username; ?>!</h1>
        <nav>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <section id="main">
        <h2>Daftar Janji Temu</h2>
        <p>Ini adalah halaman ini menampilkan daftar pasien yang membuat janji temu dengan dokter Sehat Sentosa Hospital <?php echo $username; ?>.</p>

        <h3>Jadwal Janji Temu</h3>
        <?php if (!empty($reservations)): ?>
            <ul>
                <?php foreach ($reservations as $reservation): ?>
                    <li><?php echo nl2br(htmlspecialchars($reservation)); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Tidak Ada Jadwal Janji Temu</p>
        <?php endif; ?>
    </section>

    <footer>
        <p>&copy; 2024 Sehat Sentosa Hospital.</p>
    </footer>
</body>
</html>
