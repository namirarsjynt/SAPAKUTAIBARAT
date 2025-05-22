<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Kirim email atau simpan pesan ke database
    // Contoh pengiriman email (disesuaikan dengan konfigurasi server email)
    $to = "info@kutaibarat.go.id";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Pesan berhasil dikirim!";
    } else {
        echo "Terjadi kesalahan, pesan tidak dapat dikirim.";
    }
}
?>
