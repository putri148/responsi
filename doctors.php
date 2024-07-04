<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokter - Sehat Sentosa Hospital</title>
    <link rel='stylesheet' type='text/css' href='style.css'>
</head>
<body>
    <header>
        <h1>Sehat Sentosa Hospital</h1>
        <nav>
            <ul>
                <li><a href="dashboard.php">Beranda</a></li>
                <li><a href="doctors.php">Dokter</a></li>
                
                <!-- <?php
                session_start();
                if (isset($_SESSION['username'])) {
                    echo '<li><a href="logout.php">Logout</a></li>';
                } else {
                    echo '<li><a href="login.php">Login</a></li>';
                }
                ?> -->
            </ul>
        </nav>
    </header>

    <section id="dokter">
        <h2 align = "center">Daftar Dokter</h2>
        <table>
            <tr>
                <th>Nama</th>
                <th>Spesialis</th>
                <th>Jadwal</th>
            </tr>
            <tr>
                <td>Dr. Hasan</td>
                <td>Umum</td>
                <td>Senin, Rabu, Jumat, Minggu</td>
            </tr>
            <tr>
                <td>Dr. Abil</td>
                <td>Umum</td>
                <td>Selasa, Kamis, Sabtu</td>
            </tr>
            <tr>
                <td>Dr. Vita</td>
                <td>Anak</td>
                <td>Selasa, Kamis, Sabtu</td>
            </tr>
            <tr>
                <td>Dr. Jenny</td>
                <td>Kandungan</td>
                <td>Kamis, Jumat, Minggu</td>
            </tr>
            <tr>
                <td>Dr. Jonny</td>
                <td>Mata</td>
                <td>Senin, Rabu</td>
            </tr>
            <tr>
                <td>Dr. Sinta</td>
                <td>Gigi</td>
                <td>Selasa, Sabtu</td>
            </tr>
        </table>
    </section>

    <footer>
        <p>&copy; 2024 Sehat Sentosa Hospital.</p>
    </footer>
</body>
</html>