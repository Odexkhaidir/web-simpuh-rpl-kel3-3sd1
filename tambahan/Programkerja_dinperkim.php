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
            color: orange !important;
        }

        .navbar-nav .nav-link.dropdown-toggle {
            color: yellow !important;
        }

        .navbar-nav .nav-link.dropdown-toggle:hover,
        .navbar-nav .nav-link.dropdown-toggle:focus {
            color: yellow !important;
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

        footer {
            background-color: #004d40;
            color: white;
            padding: 20px 0;
        }

        .profile-box {
            background-color: rgba(0, 77, 64, 0.1);
            border: 2px solid #004d40;
            font-size: 14px;
            line-height: 1.5;
            border-radius: 8px;
            padding: 20px;
            text-align: justify;
            margin: 0 auto;
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

        .info-box {
            background-color: #004d40;
            padding: 8px 15px;
            border-radius: 8px;
            margin-bottom: 0;
            text-align: left;
            max-width: 800px;
            margin: 0 auto;
        }

        .info-title {
            color: white;
            font-size: 20px;
            font-weight: bold;
            text-align: left;
        }

        #photoSlider {
            display: flex;
            gap: 10px;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
            margin: 0 50px;
        }

        .slide {
            flex: 0 0 auto;
            width: 270px;
            height: 180px;
            scroll-snap-align: start;
            border-radius: 8px;
            overflow: hidden;
            border: 3px solid #004d40; /* Frame Hijau */
        }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .controls {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
            width: 100%;
        }

        .btn {
            background-color: transparent;
            color: white;
            border: none;
            font-size: 24px;
        }

        .btn i {
            color: black;
        }

        .slider-container {
            position: relative;
            width: 100%;
            max-width: 900px;
            margin: 0 auto;
            overflow: hidden;
        }

        /* Menyesuaikan gambar dalam slider jika layar kecil */
        @media (max-width: 768px) {
            .slide {
                width: 200px;
                height: 150px;
            }
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
                    <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="Tabelstatistik_dinperkim.php">Tabel Statistik</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profil Dinperkim</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="Informasiumum_dinperkim.php">Informasi Umum</a></li>
                            <li><a class="dropdown-item" href="Visimisi_dinperkim.php">Visi Misi</a></li>
                            <li><a class="dropdown-item" href="Programkerja_dinperkim.php">Program Kerja</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="Masuk.php">Masuk</a></li>
                </ul>
            </div>
        </div>
    </header>

    <main class="container my-5">
        <section class="text-center">
            <h2 class="profile-title">PROGRAM DINPERKIM</h2>
            <div class="profile-box">
                <h4>Bidang Perumahan</h4>
                <ul>
                    <li>Pendataan Penyediaan dan Rehabilitasi Rumah Korban Bencana atau Relokasi Program Kabupaten/Kota</li>
                    <li>Sosialisasi dan Persiapan Penyediaan dan Rehabilitasi Rumah Korban Bencana atau Relokasi Program Kabupaten/Kota</li>
                    <li>Pembangunan dan Rehabilitasi Rumah Korban Bencana atau Relokasi Program Kabupaten/Kota</li>
                    <li>Pembinaan Pengelolaan Rumah Susun Umum dan/atau Rumah Khusus</li>
                    <li>Pencegahan Perumahan dan Kawasan Permukiman Kumuh pada Daerah Kabupaten/Kota</li>
                    <li>Urusan Penyelenggaraan PSU Perumahan</li>
                </ul>

                <h4>Program Permukiman</h4>
                <ul>
                    <li>Penerbitan Izin Pembangunan dan Pengembangan Kawasan Permukiman</li>
                    <li>Penataan dan Peningkatan Kualitas Kawasan Permukiman Kumuh dengan Luas di Bawah 10 (Sepuluh) Ha</li>
                    <li>Peningkatan Kualitas Kawasan Permukiman Kumuh dengan Luas di Bawah 10 (Sepuluh) Ha</li>
                    <li>Penyelesaian Masalah Ganti Kerugian dan Santunan Tanah untuk Pembangunan oleh Pemerintah Daerah Kabupaten/Kota</li>
                    <li>Penetapan Subjek dan Objek Redistribusi Tanah serta Ganti Kerugian Tanah Kelebihan Maksimum dan Tanah Absentee dalam 1 (Satu) Daerah Kabupaten/Kota</li>
                </ul>
            </div>
        </section>

        <section class="my-5 slider-container">
            <div id="photoSlider">
                <!-- Slider akan dimuat di sini -->
            </div>
            <div class="controls">
                <button onclick="moveSlider(-1)" class="btn"><i class="bi bi-arrow-left-circle"></i></button>
                <button onclick="moveSlider(1)" class="btn"><i class="bi bi-arrow-right-circle"></i></button>
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

    <footer style="padding: 20px 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h5 style="font-weight: bold;color: yellow">DINPERKIM & LH</h5>
                    <h6 style="margin-top: -5px; font-weight: bold; color: yellow">KABUPATEN PEKALONGAN</h6>
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
    <script>
        let currentIndex = 0;
        const slidesPerView = 3;
        const images = [
            "https://disperakim.jatengprov.go.id/foto/1727660608610-IMG-20240925-WA0017.jpg",
            "https://disperakim.jatengprov.go.id/foto/1727659785675-IMG-20240922-WA0005.jpg",
            "https://disperakim.jatengprov.go.id/foto/1727660608610-IMG-20240925-WA0017.jpg",
            "https://disperakim.jatengprov.go.id/foto/1727659673887-IMG-20240923-WA0027.jpg",
            "https://disperakim.jatengprov.go.id/foto/1727144371946-IMG-20240924-WA0014.jpg",
            "https://disperakim.jatengprov.go.id/foto/1727659785675-IMG-20240922-WA0005.jpg",
            "https://disperakim.jatengprov.go.id/foto/1725492502455-IMG-20240905-WA0014.jpg",
            "https://disperakim.jatengprov.go.id/foto/1724056788030-IMG-20240819-WA0064.jpg"
        ];

        const totalSlides = images.length;
        const slider = document.getElementById("photoSlider");

        function createSlides() {
            slider.innerHTML = '';
            for (let i = currentIndex; i < currentIndex + slidesPerView; i++) {
                const index = i % totalSlides;
                let imgElement = document.createElement('div');
                imgElement.classList.add('slide');
                imgElement.innerHTML = `<img src="${images[index]}" alt="Proker ${index + 1}" class="img-fluid">`;
                slider.appendChild(imgElement);
            }
        }

        function moveSlider(direction) {
            currentIndex += direction;

            if (currentIndex < 0) currentIndex = totalSlides - slidesPerView;
            if (currentIndex >= totalSlides) currentIndex = 0;

            createSlides();
        }

        createSlides();
    </script>
</body>
</html>
