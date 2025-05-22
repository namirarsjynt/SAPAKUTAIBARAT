<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SapaKutaiBarat</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>


    <header>
        <div class="logo">
            <img src="S.png" alt="Logo Kutai Barat">
        </div>
        <nav>
            <ul>
                <li><a href="index.php?page=home">Beranda</a></li>
                <li><a href="index.php?page=wisata">Wisata</a></li>
                <li><a href="index.php?page=kerajinan">Kerajinan</a></li>
                <li><a href="index.php?page=makanan">Makanan</a></li>
                <li><a href="index.php?page=contact">Kontak</a></li>
            </ul>
        </nav>
    </header>
    <section class="hero">
    <div class="hero-content">
        <h1>Selamat Datang di Kutai Barat - Surga di Bumi Borneo</h1>
        <a href="index.php?page=wisata" class="btn">Lihat Destinasi</a>
    </div>
</section>

<section class="news">
    <h2>Berita Terbaru</h2>
    <div class="news-item">
        <img src="news1.jpg" alt="Berita 1">
        <h3>Judul Berita 1</h3>
        <p>Ringkasan berita 1...</p>
    </div>
    <div class="news-item">
        <img src="news2.jpg" alt="Berita 2">
        <h3>Judul Berita 2</h3>
        <p>Ringkasan berita 2...</p>
    </div>
    <div class="news-item">
        <img src="news3.jpg" alt="Berita 3">
        <h3>Judul Berita 3</h3>
        <p>Ringkasan berita 3...</p>
    </div>
    <a href="#" class="btn">Lihat Semua Berita</a>
</section>

    <main>
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';
        switch ($page) {
            case 'wisata':
                include 'wisata.php';
                break;
            case 'kerajinan':
                include 'kerajinan.php';
                break;
            case 'makanan':
                include 'makanan.php';
                break;
            case 'contact':
                include 'contact.php';
                break;
            default:
                include 'home.php';
                break;
        }
        ?>
    </main>

    <footer>
        <div class="footer-column">
            <h3>Tentang Kami</h3>
            <p>Visi dan misi Kutai Barat...</p>
        </div>
        <div class="footer-column">
            <h3>Link Cepat</h3>
            <ul>
                <li><a href="index.php?page=home">Beranda</a></li>
                <li><a href="index.php?page=wisata">Wisata</a></li>
                <li><a href="index.php?page=kerajinan">Kerajinan</a></li>
                <li><a href="index.php?page=makanan">Makanan</a></li>
                <li><a href="index.php?page=contact">Kontak</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Sosial Media</h3>
            <ul>
                <li><a href="#">Instagram</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>
