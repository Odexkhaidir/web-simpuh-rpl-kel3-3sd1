<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Desa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
    <style>
        body {
            overflow-x: hidden; 
        }
        .hero-section {
            background-image: url('/path/to/background-image.jpg');
            background-size: cover;
            background-position: center;
            padding: 155px 0;
            color: white;
            text-align: center;
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
        
        .profile-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .profile-header {
            background-color: #004d40;
            color: white;
            padding: 10px 20px;
            border-radius: 10px 10px 0 0;
        }
        .profile-header h1 {
            font-size: 24px;
        }
        .profile-info {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }
        .profile-avatar {
            width: 150px;
            height: 150px;
            background-color: #004d40;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 50px;
            color: #ffffff;
            margin: 0 auto;
        }
        .contact-info span {
            font-weight: bold;
        }
        .btn-custom {
            background-color: #004d40;
            color: white;
        }
        .btn-custom:hover {
            background-color: #004d40;
        }
        .password-field {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 15px
        }
        .password-field i {
            margin-right: 5px;
        }
        .button-container button {
            margin-right: 30px;
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
            <div class="font-bold text-white text-lg flex items-center justify-between gap-x-2">
                <h5 style="font-weight: bold; color: yellow">DINPERKIM & LH</h5>
                <h6 style="margin-top: -5px; font-weight: bold; color: yellow">KABUPATEN PEKALONGAN</h6>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <a class="nav-link" href="#">
                        <i class="bi bi-person-circle" style="font-size: 2.5rem; color: white;"></i>
                    </a>
                </ul>
            </div>
        </div>
        </div>
    </header>

<div class="container my-5">
    <div class="profile-header text-center">
        <h1>Profil</h1>
    </div>
    <div class="profile-container mx-auto">
        <!-- Kolom 1 -->
        <div class="text-center">
            <div class="profile-avatar">
                <i class="bi bi-person-circle"></i>
            </div>
            <div class="password-field mt-3">
                <div class="role">
                    <i class="bi bi-person"></i> <span>Masyarakat</span>
                </div>
                <div class="password">
                    <i class="bi bi-lock ms-3"></i> <span>********</span> <i class="bi bi-eye"></i>
                </div>
            </div>
        </div>
        <!-- Kolom 2 -->
        <div>
            <div>
                <h4>Identitas</h4>
                <p><span>Nama Lengkap:</span> Very Dwi Prasetya</p>
                <p><span>Jenis Kelamin:</span> Laki-laki</p>
            </div>
            <div class="mt-4">
                <h4>Kontak</h4>
                <p><i class="bi bi-envelope-fill"></i> <span>Alamat Email:</span> Verydw08@gmail.com</p>
                <p><i class="bi bi-telephone-fill"></i> <span>Nomor Telepon:</span> 0812345678910</p>
            </div>
            <div class="d-flex justify-content-start button-container mt-4">
                <button class="btn btn-custom">Kembali</button>
                <button class="btn btn-custom">Edit Profil</button>
            </div>
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
</body>
</html>
