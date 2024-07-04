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
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sehat Sentosa Hospital</title>
    <link rel='stylesheet' type='text/css' href='style.css'>
</head>
<body>
    <header>
        <h1>Sehat Sentosa Hospital</h1>
        <nav>
            <ul>
                <li><a href="login.php">Login</a></li>
                <li><a href="index.html">Beranda</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="login">
            <h2 align="center">Login</h2>
            <?php
            if (isset($error)) {
                echo "<p class='error'>$error</p>";
            }
            ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br><br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br><br>

                <input type="submit" value="Login">
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Sehat Sentosa Hospital. All rights reserved.</p>
    </footer>
</body>
</html>
