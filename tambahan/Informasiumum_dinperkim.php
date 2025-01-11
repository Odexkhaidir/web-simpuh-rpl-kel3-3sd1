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
   .sticky-icon {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 9999;
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
        /* Hapus garis bawah dan atur warna aktif */
        .navbar-nav .nav-link.active {
            color: orange !important; /* Warna aktif yang oranye */
        }

        /* Menambahkan styling untuk dropdown menu */
        .navbar-nav .nav-link.dropdown-toggle {
            color: yellow !important; /* Mengubah warna Profil Dinperkim menjadi kuning */
        }

        .navbar-nav .nav-link.dropdown-toggle:hover,
        .navbar-nav .nav-link.dropdown-toggle:focus {
            color: yellow !important; /* Menjaga warna kuning saat hover atau fokus */
        }

        footer {
            background-color: #004d40;
            color: white;
            padding: 20px 0;
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
            margin-bottom: 10px;
        }

        .info-wrapper {
            border: 3px solid #004d40;
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 3cm;  /* Jarak 3cm antara kotak informasi dan footer */
            max-width: 800px;
            margin: 0 auto;
            margin-top: 1.5cm;
        }

        .info-wrapper .info-title {
            background-color: #004d40;
            color: white;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
            text-transform: uppercase;
            text-align: left;
            margin: 0;
        }

        .info-box {
            background-color: white;
            padding: 20px;
            font-size: 14px;
            line-height: 1.5;
            color: #004d40;
            text-align: justify;
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
                    <li class="nav-item"><a class="nav-link" href="Tabelstatistik_dinperkim.php">Tabel Statistik</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profil Dinperkim</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="Informasiumum_dinperkim.php">Informasi Umum</a></li>
                            <li><a class="dropdown-item" href="Visimisi_dinperkim.php">Visi Misi</a></li>
                            <li><a class="dropdown-item" href="Programkerja_dinperkim.php">Program Kerja</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Masuk</a></li>
                </ul>
            </div>
        </div>
    </header>

    <main class="container my-5">
        <section class="text-center">
            <h2 class="profile-title">PROFIL DINPERKIM</h2>

            <div class="info-wrapper">
                <div class="info-title">Informasi Umum</div>
                <div class="info-box">
                    <p>
                        Dinas Perumahan dan Permukiman (DINPERKIM) merupakan instansi pemerintah di tingkat provinsi dan kabupaten/kota di Indonesia yang berfokus pada penyediaan layanan di sektor perumahan dan permukiman. DINPERKIM bertujuan untuk menyediakan hunian yang layak, aman, dan terjangkau bagi masyarakat serta mengembangkan kawasan permukiman yang tertata rapi dan ramah lingkungan. Dalam pelaksanaannya, DINPERKIM juga bertanggung jawab atas penataan lingkungan, termasuk penyediaan infrastruktur dasar seperti sanitasi, air bersih, serta ruang terbuka hijau. Selain itu, instansi ini mengemban tugas penting dalam mendukung program pembangunan berkelanjutan melalui pengelolaan lingkungan yang bersih dan sehat. DINPERKIM bekerja sama dengan pemerintah pusat dan kementerian terkait untuk memastikan bahwa program-programnya sejalan dengan kebutuhan masyarakat, berdaya guna, dan mendukung kesejahteraan rakyat secara menyeluruh.
                    </p>
                </div>
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
                <div class="col-md-8">
                    <h5 style="font-weight: bold;color: yellow;">DINPERKIM & LH</h5>
                    <h6 style="margin-top: -5px; font-weight: bold; color:yellow;">KABUPATEN PEKALONGAN</h6>
                    <p>
                        Dinas Perumahan Rakyat dan Kawasan Permukiman dan Lingkungan Hidup (Dinperkim) Kabupaten Pekalongan<br>
                        Jl. Sindoro No.1<br>
                        Kabupaten Pekalongan, Jawa Tengah 51161
                    </p>
                </div>
                <div class="col-md-4 text-end">
                    <h5 style="font-weight: bold;">Kontak Kami</h5>
                    <hr style="width: 120px; border: 2px solid; color: yellow; opacity: 1; margin-left: auto;">
                    <p><i class="bi bi-instagram"></i> @Dinasperkimlhpekalongankab</p>
                    <p><i class="bi bi-whatsapp"></i> (+62) 285 3320587</p>
                    <p><i class="bi bi-envelope"></i> perkimlhkabpkl@gmail.com</p>
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

