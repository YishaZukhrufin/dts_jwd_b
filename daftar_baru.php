<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f5e6cc;
        }
        .form-container {
            background-color: #654321;
            color: #fff;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
        }
        .form-container label {
            color: #fff;
        }
        .form-container input[type="text"],
        .form-container textarea,
        .form-container select {
            background-color: #fff;
            color: #000;
        }
        .form-container input[type="submit"] {
            background-color: #ffd700;
            color: #000;
        }
        .form-container input[type="submit"]:hover {
            background-color: #c0a080;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="form-container">
            <h2>Form Pendaftaran Siswa Baru</h2>
            <form action="proses_daftar.php" method="post">
                <div class="form-group">
                    <label>Nama:</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Alamat:</label>
                    <textarea name="alamat" class="form-control" rows="4" required></textarea>
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin:</label>
                    <div class="form-check">
                        <input type="radio" name="jenis_kelamin" value="Laki-laki" class="form-check-input" required>
                        <label class="form-check-label">Laki-laki</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="jenis_kelamin" value="Perempuan" class="form-check-input" required>
                        <label class="form-check-label">Perempuan</label>
                    </div>
                </div>

                <div class="form-group">
                    <label>Agama:</label>
                    <select name="agama" class="form-control" required>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Usia:</label>
                    <input type="number" name="usia" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Asal Sekolah:</label>
                    <input type="text" name="asal_sekolah" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Daftar</button>
            </form>
        </div>
    </div>
</body>
</html>
