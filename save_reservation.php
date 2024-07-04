<!-- save_reservation.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $doctor = $_POST['doctor'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $reservationData = "\nNama: $name\nEmail: $email\nDokter: $doctor\nTanggal: $date\nWaktu: $time\n\n---\n";
    // Simpan data ke dalam file txt
    $file = 'reservations.txt';
    file_put_contents($file, $reservationData, FILE_APPEND | LOCK_EX);

    // Redirect kembali ke halaman appointment.php atau halaman sukses
    header("Location: appointment.html");
    exit;
}
?>