<!-- doctors.php -->
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
                <li><a href="login.php">Login</a></li>
                <li><a href="index.html">Beranda</a></li>
                <li><a href="doctors.php">Dokter</a></li>
                <li><a href="appointment.php">Janji Temu</a></li>
            </ul>
        </nav>
    </header>

    <section id="doctors">
        <h2 align = "center">Daftar Dokter</h2>
        <table>
            <tr>
                <th>Nama</th>
                <th>Spesialis</th>
                <th>Jadwal</th>
            </tr>
            <?php
            // Simulasi data dokter dari database atau file
            $doctors = [
                ['Dr. Hasan', 'Umum', 'Senin, Rabu, Jumat, Minggu'],
                ['Dr. Abil', 'Umum', 'Selasa, Kamis, Sabtu'],
                ['Dr. Vita', 'Anak', 'Selasa, Kamis, Sabtu'],
                ['Dr. Jenny', 'Kandungan', 'Kamis, Jumat, Minggu'],
                ['Dr. Jonny', 'Mata', 'Senin, Rabu'],
                ['Dr. Sinta', 'Gigi', 'Selasa, Sabtu'],

                // Data lainnya
            ];

            foreach ($dokter as $doctor) {
                echo "<tr>";
                echo "<td>" . $doctor[0] . "</td>";
                echo "<td>" . $doctor[1] . "</td>";
                echo "<td>" . $doctor[2] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </section>

    <footer>
        <p>&copy; 2024 Sehat Sentosa Hospital.</p>
    </footer>
</body>
</html>