<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPUH Kabupaten Pekalongan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<style>
    body {
        overflow-x: hidden; 
    }
    header {
        background-color: #004d40;
    }
    .navbar {
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }
    .custom-navbar {
        background-color: #004d40;
    }
    .navbar-brand img {
        vertical-align: middle;
    }
    .navbar-nav .nav-link {
        margin-right: 10px;
        font-weight: bold;
    }
    .navbar-nav .nav-link.active {
        color: orange !important; /* Warna aktif yang oranye */
    }

    /* Menambahkan CSS untuk membuat teks Profil Dinperkim berwarna kuning */
    .navbar-nav .nav-link.dropdown-toggle {
        color: yellow !important; /* Mengubah warna Profil Dinperkim menjadi kuning */
    }
    .navbar-nav .nav-link.dropdown-toggle:hover,
    .navbar-nav .nav-link.dropdown-toggle:focus {
        color: yellow !important; /* Menjaga warna kuning saat hover atau fokus */
    }

    .sticky-icon {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 1000;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .icon-content {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .text {
        font-size: 14px;
        font-weight: bold;
        color: orange;
        transform: rotate(-10deg);
        margin-bottom: 5px;
    }

    .icon {
        background: #fff;
        border-radius: 50%;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        padding: 8px;
    }

    .icon svg {
        display: block;
    }

    .icon-content::after {
        content: '';
        width: 50px;
        height: 2px;
        background-color: green;
        margin-top: 5px;
    }

    footer {
        background-color: #004d40;
        color: white;
        padding: 20px 0;
    }

    .profile-box {
        background-color: rgba(0, 77, 64, 0.1); /* Kotak transparan di belakang teks */
        border: 2px solid #004d40;
        font-size: 14px;
        line-height: 1.5;
        border-radius: 8px;
        padding: 20px;
        text-align: justify;
        margin: 0 auto; /* Menghilangkan jarak atas dan bawah */
        max-width: 800px;
    }

    .profile-title {
        background-color: #004d40;
        color: white;
        display: inline-block;
        padding: 10px 20px;
        border-radius: 8px;
        font-weight: bold;
        text-transform: uppercase;
        text-align: center;
        font-size: 24px; 
    }

    /* Styling untuk kotak Informasi Umum */
    .info-box {
        background-color: #004d40; /* Warna hijau yang sama dengan footer */
        padding: 8px 15px;  /* Mengurangi padding atas dan bawah */
        border-radius: 8px;
        margin-bottom: 0;  /* Menghilangkan jarak bawah */
        text-align: left; /* Memindahkan teks ke kiri */
        max-width: 800px; /* Menyesuaikan lebar kotak sama dengan profil */
        margin: 0 auto; /* Menyelaraskan kotak di tengah */
    }

    .info-title {
        color: white;
        font-size: 20px; /* Menyesuaikan ukuran font agar lebih kecil */
        font-weight: bold;
        text-align: left; /* Menyelaraskan judul ke kiri */
    }
</style>
</head>
<body>
    <header class="navbar navbar-expand-lg navbar-dark custom-navbar">
        <div class="container">
            <div class="font-bold text-white text-lg flex items-center justify-between gap-x-2">
                <h5 style="font-weight: bold; color: yellow">DINPERKIM & LH</h5>
                <h6 style="margin-top: -5px; font-weight: bold; color: yellow">KABUPATEN PEKALONGAN</h6>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Tabel Statistik</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profil Dinperkim</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Informasi Umum</a></li>
                            <li><a class="dropdown-item" href="#">Visi Misi</a></li>
                            <li><a class="dropdown-item" href="#">Program Dinperkim</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Masuk</a></li>
                </ul>
            </div>
        </div>
    </header>

    <main class="container my-5">
        <section class="text-center">
            <h2 class="profile-title">TABEL STATISTIK</h2>
            <div class="profile-box">
                <!-- Tabel untuk Desa/Kelurahan dan Status -->
                <table class="table table-striped table-custom">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Desa/Kelurahan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Baris kosong yang bisa diisi dengan data -->
                        <tr>
                            <td>1</td>
                            <td>Desa A</td>
                            <td>Aktif</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Desa B</td>
                            <td>Non-Aktif</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Kelurahan C</td>
                            <td>Aktif</td>
                        </tr>
                        <!-- Tambahkan baris sesuai data yang diperlukan -->
                    </tbody>
                </table>
            </div>
        </section>
    </main>

      <div class="sticky-icon">
        <div class="icon-content">
            <span class="text">LAPOR PUH !!</span>
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="orange" width="36px" height="36px">
                    <path d="M12 2C6.48 2 2 6.03 2 11c0 2.87 1.71 5.42 4.36 7.04-.08.64-.44 2.16-1.09 3.05 1.36-.15 2.92-.46 4.17-1.21.86.12 1.75.12 2.64.12 5.52 0 10-4.03 10-9S17.52 2 12 2zm-3 8h2v2H9v-2zm4 0h2v2h-2v-2zm4 0h2v2h-2v-2z"></path>
                </svg>
            </div>
        </div>
    </div>
	
    <footer style=" padding: 20px 0;">
        <div class="container">
          <div class="row">
            <!-- Left Section -->
            <div class="col-md-8">
              <h5 style="font-weight: bold;color: yellow">DINPERKIM & LH</h5>
              <h6 style="margin-top: -5px; font-weight: bold; color:yellow">KABUPATEN PEKALONGAN</h6>
              <p>
                Dinas Perumahan Rakyat dan Kawasan Permukiman dan Lingkungan Hidup (Dinperkim) Kabupaten Pekalongan<br>
                Jl. Sindoro No.1<br>
                Kabupaten Pekalongan, Jawa Tengah 51161
              </p>
            </div>
            <!-- Right Section -->
            <div class="col-md-4 text-end">
              <h5 style="font-weight: bold;">Kontak Kami</h5>
              <hr style="width: 120px; border: 2px solid; color: yellow; opacity: 1; margin-left: auto;">
              <p><i class="bi bi-instagram"></i> @Instagramnya</p>
              <p><i class="bi bi-whatsapp"></i> (+62)89 123 xxx</p>
              <p><i class="bi bi-envelope"></i> emailnyaaaa@gmail.com</p>
            </div>
          </div>
          <hr style="border-color: white;">
          <div class="text-center">
            Hak Cipta &copy;2024 Dinas Perumahan Rakyat dan Kawasan Permukiman Lingkungan Hidup Kabupaten Pekalongan
          </div>
        </div>
      </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
