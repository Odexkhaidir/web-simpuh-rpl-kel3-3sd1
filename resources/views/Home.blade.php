<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPUH Kabupaten Pekalongan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <style>
        body {
            overflow-x: hidden; 
        }
        .hero-section {
            position: relative; /* Untuk memungkinkan overlay berada di atas */
            background-image: url('/images/BGKabPekalongan.jpeg'); /* Gambar latar */
            background-size: cover; /* Menutupi area sepenuhnya */
            background-position: center; /* Menyesuaikan posisi */
            padding: 200px 0;
            color: white;
            text-align: center;
            overflow: hidden; /* Mencegah elemen overlay keluar dari batas */
        }

        .hero-section::before {
            content: "";
            position: absolute; /* Membuat layer overlay */
            top: 0;
            left: 0;
            width: 100%; /* Menutupi seluruh lebar */
            height: 100%; /* Menutupi seluruh tinggi */
            background-color:  #004d40;
            opacity: 70%;
            z-index: 1; /* Memastikan berada di atas gambar */
        }

        .hero-section .container {
            position: relative; /* Supaya teks berada di atas overlay */
            z-index: 2; /* Memastikan teks terlihat */
        } 
                
        header {
            background-color: #004d40;
            position: relative; /* Supaya elemen dalam container tetap di atas layer hijau */
            z-index: 2;
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
            color: white !important; /* Warna untuk menu aktif */
            position: relative; /* Dibutuhkan untuk pseudo-element */
            display: inline-block; /* Pastikan elemen tidak menggunakan width 100% */
        }

        .navbar-nav .nav-link.active::after {
            content: ''; /* Konten kosong untuk pseudo-element */
            position: absolute; /* Posisikan relatif terhadap elemen induk */
            bottom: 0; /* Tepat di bawah teks */
            left: 0;
            width: 100%; /* Panjang garis mengikuti teks */
            height: 3px; /* Ketebalan garis */
            background-color: orange; /* Warna garis */
        }

        .container.my-5 {
            margin-top: 2.2rem !important; 
        }
        .card {
            width: 18rem;
            border: none;
            border-radius: 10px;
            background-color: #f9f9f9;
          }
          
          .card-title {
            font-size: 1rem;
            font-weight: bold;
            color: #333;
          }
          
          .card-body {
            padding: 20px;
          }

          #iconBoxCarousel {
            margin-top: -140px; /* Sesuaikan nilai ini untuk menaikkan carousel */
            position: relative; /* Memastikan elemen tetap relatif */
            z-index: 2;
          }
          
        .carousel-control-prev,
        .carousel-control-next {
            position: absolute;
            top: 50%; /* Menempatkan tombol di tengah vertikal */
            transform: translateY(-50%);
            z-index: 2; /* Pastikan tombol berada di atas slide */
            width: 5%; /* Ukuran tombol */
            height: 100%; /* Sama tinggi dengan carousel */
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(0, 0, 0, 1); /* Background semi-transparan */
        }

        .carousel-control-prev {
            left: 0; /* Posisikan di kiri */
        }

        .carousel-control-next {
            right: 0; /* Posisikan di kanan */
        }

        .carousel-control-prev,
        .carousel-control-next {
            background-color:black; /* Ubah warna latar belakang tombol */
            border-radius: 100%; /* Membuat tombol berbentuk lingkaran */
            width: 40px; /* Ukuran tombol */
            height: 40px; /* Sama tinggi dengan lebarnya */
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); /* Tambahkan bayangan */
        }

            .carousel-control-prev:hover,
            .carousel-control-next:hover {
                background-color: #00695c; /* Warna tombol saat hover */
            }

            .carousel-control-prev-icon,
            .carousel-control-next-icon {
                background-color: transparent; /* Hilangkan latar belakang ikon default */
                background-image: none; /* Hilangkan ikon default */
                display: inline-block;
                width: 20px; /* Ukuran ikon */
                height: 20px; /* Sama tinggi dengan lebarnya */
                border: solid white; /* Tambahkan ikon kustom dengan border */
                border-width: 0 3px 3px 0; /* Set lebar sisi ikon */
            }

            .carousel-control-prev-icon {
                transform: rotate(135deg); /* Ikon panah ke kiri */
            }

            .carousel-control-next-icon {
                transform: rotate(-45deg); /* Ikon panah ke kanan */
            }

        @media (max-width: 768px) {
            .carousel-control-prev,
            .carousel-control-next {
                width: 10%; /* Perbesar area tombol untuk layar kecil */
            }
        }
                    
        .stats-section {
            padding: 50px 0;
        }
        .program-section {
            padding: 50px 0;
        }

        .custom-box {
            background-color:  #004d40;
            border-radius: 15px; 
            overflow: hidden; 
            padding: 10px; 
            margin-bottom: 20px; 
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); 
            color: #fff;
        }
        
        .custom-image {
            width: 100%; 
            height: auto; 
            border-radius: 10px; 
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
    </style>
</head>
<body>
    <header class="navbar navbar-expand-lg navbar-dark custom-navbar">
        <div class="container">
        <img src="images/logo_simpuh.png" alt="Logo" style="height: 50px; margin-right: 10px;">
            <div class="font-bold text-white text-lg flex items-center justify-between gap-x-2">
                <h5 style="font-weight: bold; color: yellow">DINPERKIM & LH</h5>
                <h6 style="margin-top: -5px; font-weight: bold; color: yellow">KABUPATEN PEKALONGAN</h6>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <!-- Menu -->
                    <li class="nav-item">
                        <a class="nav-link active" href="/home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tabel-statistik">Tabel Statistik</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profil Dinperkim
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Informasi Umum</a></li>
                            <li><a class="dropdown-item" href="#">Visi Misi</a></li>
                            <li><a class="dropdown-item" href="#">Program Dinperkim</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Masuk</a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </header>
    
    <div class="hero-section">
        <div class="container">
            <h1>Sistem Monitoring Penanganan Kumuh (SIMPUH)</h1>
            <h2>Kabupaten Pekalongan</h2>
            <div class="mt-4">
                <input type="text" class="form-control d-inline-block w-50" placeholder="Cari Desa atau Kecamatan">
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div id="iconBoxCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center">
                        <div class="card text-center mx-2 shadow-sm">
                            <div class="card-body">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4 0h8a2 2 0 0 1 2 2v14h-3v-4H5v4H2V2a2 2 0 0 1 2-2zM4 1a1 1 0 0 0-1 1v13h2v-4h6v4h2V2a1 1 0 0 0-1-1H4z"/>
                                    <path d="M6 4h1v1H6V4zm3 0h1v1H9V4zm-3 2h1v1H6V6zm3 0h1v1H9V6zm-3 2h1v1H6V8zm3 0h1v1H9V8zm-3 2h1v1H6v-1zm3 0h1v1H9v-1z"/>
                                </svg>
                                <h5 class="card-title">Bangunan Gedung</h5>
                                <h2 class="display-5">102,08</h2>
                                <p>November 2024</p>
                            </div>
                        </div>
                        <div class="card text-center mx-2 shadow-sm">
                            <div class="card-body">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-road-horizontal" viewBox="0 0 16 16">
                                    <rect x="0" y="5" width="16" height="6" fill="black" />
                                    <line x1="2" y1="8" x2="4" y2="8" stroke="white" stroke-width="1" />
                                    <line x1="6" y1="8" x2="8" y2="8" stroke="white" stroke-width="1" />
                                    <line x1="10" y1="8" x2="12" y2="8" stroke="white" stroke-width="1" />
                                    <line x1="14" y1="8" x2="16" y2="8" stroke="white" stroke-width="1" />
                                </svg>
                                <h5 class="card-title">Jalan Lingkungan</h5>
                                <h2 class="display-5">1,55 Persen</h2>
                                <p>November 2024</p>
                            </div>
                        </div>
                        <div class="card text-center mx-2 shadow-sm">
                            <div class="card-body">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" viewBox="0 0 16 16">
                                    <rect x="4" y="4" width="8" height="8" fill="black" />
                                    <rect x="4.5" y="6" width="7" height="6" fill="white" />
                                    <path d="M12 6a2 2 0 0 1 2 2 2 2 0 0 1-2 2V6z" fill="black" />
                                </svg>                                                  
                                <h5 class="card-title">Penyediaan Air Minum</h5>
                                <h2 class="display-5">4,95 Persen</h2>
                                <p>Triwulan III 2024</p>
                            </div>
                        </div>
                        <div class="card text-center mx-2 shadow-sm">
                            <div class="card-body">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" viewBox="0 0 16 16">
                                    <rect x="3" y="4" width="10" height="8" fill="black" />
                                    <line x1="4" y1="7" x2="12" y2="7" stroke="white" stroke-width="0.5" />
                                    <line x1="4" y1="9" x2="12" y2="9" stroke="white" stroke-width="0.5" />
                                    <circle cx="6" cy="8" r="0.5" fill="white" />
                                    <circle cx="8" cy="8" r="0.5" fill="white" />
                                    <circle cx="10" cy="8" r="0.5" fill="white" />
                                </svg>                    
                                <h5 class="card-title">Drainase Lingkungan</h5>
                                <h2 class="display-5">9,03 Persen</h2>
                                <p>Maret 2024</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <div class="card text-center mx-2 shadow-sm">
                            <div class="card-body">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M4 2h8v10H4z" fill="black" />
                                    <path d="M7.5 5a1 1 0 1 1 2 0 1 1 0 1 1-2 0z" fill="white" />
                                    <path d="M7.5 7c0 .828.448 1.5 1 1.5s1-.672 1-1.5-.448-1-1-1-1 .172-1 1z" fill="white" />
                                </svg>                          
                                <h5 class="card-title">Pengelolaan Air Limbah</h5>
                                <h2 class="display-5">4,82 Persen</h2>
                                <p>Februari 2024</p>
                            </div>
                        </div>
                        <div class="card text-center mx-2 shadow-sm">
                            <div class="card-body">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" viewBox="0 0 16 16">
                                    <rect x="4" y="2" width="8" height="1" fill="black" />
                                    <rect x="5" y="3" width="6" height="10" fill="black" />
                                    <line x1="6" y1="4" x2="6" y2="12" stroke="white" stroke-width="0.5" />
                                    <line x1="8" y1="4" x2="8" y2="12" stroke="white" stroke-width="0.5" />
                                    <line x1="10" y1="4" x2="10" y2="12" stroke="white" stroke-width="0.5" />
                                </svg>
                                <h5 class="card-title">Pengelolaan Persampahan</h5>
                                <h2 class="display-5">4,82 Persen</h2>
                                <p>Februari 2024</p>
                            </div>
                        </div>
                        <div class="card text-center mx-2 shadow-sm">
                            <div class="card-body">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" viewBox="0 0 16 16">
                                    <rect x="4" y="2" width="8" height="1" fill="black" />
                                    <rect x="5" y="3" width="6" height="10" fill="black" />
                                    <line x1="6" y1="4" x2="6" y2="12" stroke="white" stroke-width="0.5" />
                                    <line x1="8" y1="4" x2="8" y2="12" stroke="white" stroke-width="0.5" />
                                    <line x1="10" y1="4" x2="10" y2="12" stroke="white" stroke-width="0.5" />
                                </svg>
                                <h5 class="card-title">Pengelolaan Persampahan</h5>
                                <h2 class="display-5">4,82 Persen</h2>
                                <p>Februari 2024</p>
                            </div>
                        </div>
                        <div class="card text-center mx-2 shadow-sm">
                            <div class="card-body">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" viewBox="0 0 16 16">
                                    <rect x="4" y="2" width="8" height="1" fill="black" />
                                    <rect x="5" y="3" width="6" height="10" fill="black" />
                                    <line x1="6" y1="4" x2="6" y2="12" stroke="white" stroke-width="0.5" />
                                    <line x1="8" y1="4" x2="8" y2="12" stroke="white" stroke-width="0.5" />
                                    <line x1="10" y1="4" x2="10" y2="12" stroke="white" stroke-width="0.5" />
                                </svg>
                                <h5 class="card-title">Pengelolaan Persampahan</h5>
                                <h2 class="display-5">4,82 Persen</h2>
                                <p>Februari 2024</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            <button class="carousel-control-prev" type="button" data-bs-target="#iconBoxCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#iconBoxCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <section class="stats-section bg-light my-5">
        <div class="container">
            <h2 class="text-center mb-4">Statistik Informasi Persebaran Kawasan Kumuh</h2>
            <div class="row">
                <div class="col-md-4 text-center">
                <h3> <strong>{{ $totalKumuh ?? 0 }}</strong></h3>
                <p>
                    @if($latestYear)
                        <p>Jumlah Kawasan Kumuh <br> pada Tahun {{ $latestYear }}</p>
                    @else
                        <p>Data kawasan kumuh belum tersedia</p>
                    @endif
                </p>
                </div>
                <div class="col-md-4 text-center">
                    <section class="chart-section">
                        @if($latestYear)
                            <div style="width: 50%; margin: auto;">
                                <canvas id="pieChart"></canvas>
                            </div>
                            <p class="text-center">Data Tahun: {{ $latestYear }}</p>
                        @else
                            <p class="text-center">Tidak ada data tersedia.</p>
                        @endif
                    </section>
                </div>
                <div class="col-md-4 text-center">
                        <div style="width: 70%; margin: auto;">
                            <p><strong> Jumlah Kawasan Kumuh <br> dalam Lima Tahun Terakhir</strong></p>
                            <canvas id="kekumuhanChart"></canvas>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <section class="program-section">
        <div class="container">
            <h2 class="text-center mb-4">Program Kerja DINPERKIM & LH Kabupaten Pekalongan</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="custom-box">
                        <img src="/path/to/image1.jpg" alt="Program 1" class="img-fluid custom-image">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="custom-box">
                        <img src="/path/to/image2.jpg" alt="Program 2" class="img-fluid custom-image">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="custom-box">
                        <img src="/path/to/image3.jpg" alt="Program 3" class="img-fluid custom-image">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="custom-box">
                        <img src="/path/to/image4.jpg" alt="Program 4" class="img-fluid custom-image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    

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
            <div>
            <img src="images/logo_simpuh.png" alt="Logo" style="height: 50px; margin-right: 10px;">
                <div class="d-flex-column">
                    <h5 style="font-weight: bold;color: yellow">DINPERKIM & LH</h5>
                    <h6 style="margin-top: -5px; font-weight: bold; color:yellow">KABUPATEN PEKALONGAN</h6>
                </div>
            </div>
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


    <script>
        // Data untuk Pie Chart
        const piedata = {
            labels: {!! json_encode(array_keys($chartData)) !!},
            datasets: [{
                label: 'Status Kumuh',
                data: {!! json_encode(array_values($chartData)) !!},
                backgroundColor: [
                    'rgba(75, 192, 192, 0.2)', // Tidak Kumuh
                    'rgba(255, 206, 86, 0.2)', // Ringan
                    'rgba(54, 162, 235, 0.2)', // Sedang
                    'rgba(255, 99, 132, 0.2)'  // Berat
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 99, 132, 1)'
                ],
                borderWidth: 1
            }]
        };

        // Konfigurasi Chart
        const config = {
            type: 'pie',
            data: piedata,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    }
                }
            }
        };

        // Render Pie Chart
        const pieChart = new Chart(
            document.getElementById('pieChart'),
            config
        );
    </script>
    <script>
        // Data dari controller
        const labels = {!! json_encode($years) !!};
        const linedata = {!! json_encode($totals) !!};

        const ctx = document.getElementById('kekumuhanChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Jumlah Kawasan',
                    data: linedata,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    fill: false,
                    tension: 0.1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Tahun'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Jumlah Kawasan'
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>
