<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            overflow-x: hidden;
        }

        header {
            background-color: #004d40;
        }
        .edit-header {
            background-color: #004d40;
            color: white;
            padding: 10px 20px;
            border-radius: 20px 20px 0 0;
        }
        .edit-profile-container {
            background-color: #ffffff;
            border: 2px solid #ddd;
            border-radius: 40px;
            padding: 20px;
            width: 400px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .btn-save {
            background-color: #004d40;
            color: white;
            border: none;
        }
        .btn-back {
            margin-top: 10px;
            background-color: rgb(163, 4, 4);
            color: #ffffff;
            border: none;
        }
        .btn-back:hover {
            background-color: red;
        }

        .btn-save:hover {
            background-color: #218838;
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
        </div>
        </div>
    </header>

<div class="container d-flex justify-content-center my-5">
    <div class="edit-profile-container">
        <h4 class="edit-header text-center mb-4">Edit Profil</h4>
        <form>
            <div class="mb-3">
                <label for="uploadPhoto" class="form-label">Upload Photo</label>
                <input type="file" class="form-control" id="uploadPhoto">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password">
            </div>
            <div class="mb-3">
                <label for="fullName" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="fullName">
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                        <label class="form-check-label" for="male">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                        <label class="form-check-label" for="female">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="phoneNumber" class="form-label">Nomor</label>
                <input type="text" class="form-control" id="phoneNumber">
            </div>
            <button type="submit" class="btn btn-save w-100">Simpan</button>
            <button type="button" class="btn btn-back w-100">Kembali</button>
        </form>
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
