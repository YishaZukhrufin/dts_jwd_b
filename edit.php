<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Siswa</title>
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
            <h2>Edit Data Siswa</h2>
            <?php
            // Koneksi ke database
            $host = 'localhost';
            $username = 'root';
            $password = '';
            $dbname = 'pendaftaran_siswa';

            $connection = new mysqli($host, $username, $password, $dbname);

            // Cek koneksi
            if ($connection->connect_error) {
                die("Koneksi database gagal: " . $connection->connect_error);
            }

            // Memproses data dari form edit
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $id = $_POST["id"];
                $nama = $_POST["nama"];
                $alamat = $_POST["alamat"];
                $jenis_kelamin = $_POST["jenis_kelamin"];
                $agama = $_POST["agama"];
                $usia = $_POST["usia"];
                $asal_sekolah = $_POST["asal_sekolah"];

                // Query untuk mengupdate data di database
                $sql = "UPDATE siswa SET 
                            nama='$nama', 
                            alamat='$alamat', 
                            jenis_kelamin='$jenis_kelamin', 
                            agama='$agama', 
                            usia=$usia, 
                            asal_sekolah='$asal_sekolah' 
                        WHERE id=$id";

                // Eksekusi query
                if ($connection->query($sql) === TRUE) {
                    echo "<div class='alert alert-success'>Data siswa berhasil diupdate.</div>";
                } else {
                    echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $connection->error . "</div>";
                }
            }

            // Mengambil data siswa berdasarkan ID
            if (isset($_GET['id'])) {
                $id_siswa = $_GET['id'];

                $sql = "SELECT * FROM siswa WHERE id=$id_siswa";
                $result = $connection->query($sql);

                if ($result->num_rows == 1) {
                    $row = $result->fetch_assoc();
                    $nama = $row['nama'];
                    $alamat = $row['alamat'];
                    $jenis_kelamin = $row['jenis_kelamin'];
                    $agama = $row['agama'];
                    $usia = $row['usia'];
                    $asal_sekolah = $row['asal_sekolah'];
                } else {
                    echo "<div class='alert alert-danger'>Data siswa tidak ditemukan.</div>";
                }
            } else {
                echo "<div class='alert alert-danger'>ID siswa tidak ditemukan.</div>";
            }

            // Menutup koneksi database
            $connection->close();
            ?>

            <form action="" method="post">
                <input type="hidden" name="id" value="<?php echo $id_siswa; ?>">
                <div class="form-group">
                    <label>Nama:</label>
                    <input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>" required>
                </div>

                <div class="form-group">
                    <label>Alamat:</label>
                    <textarea name="alamat" class="form-control" rows="4" required><?php echo $alamat; ?></textarea>
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin:</label>
                    <div class="form-check">
                        <input type="radio" name="jenis_kelamin" value="Laki-laki" class="form-check-input" <?php echo $jenis_kelamin == "Laki-laki" ? "checked" : ""; ?> required>
                        <label class="form-check-label">Laki-laki</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="jenis_kelamin" value="Perempuan" class="form-check-input" <?php echo $jenis_kelamin == "Perempuan" ? "checked" : ""; ?> required>
                        <label class="form-check-label">Perempuan</label>
                    </div>
                </div>

                <div class="form-group">
                    <label>Agama:</label>
                    <select name="agama" class="form-control" required>
                        <option value="Islam" <?php echo $agama == "Islam" ? "selected" : ""; ?>>Islam</option>
                        <option value="Kristen" <?php echo $agama == "Kristen" ? "selected" : ""; ?>>Kristen</option>
                        <option value="Katolik" <?php echo $agama == "Katolik" ? "selected" : ""; ?>>Katolik</option>
                        <option value="Hindu" <?php echo $agama == "Hindu" ? "selected" : ""; ?>>Hindu</option>
                        <option value="Buddha" <?php echo $agama == "Buddha" ? "selected" : ""; ?>>Buddha</option>
                        <option value="Konghucu" <?php echo $agama == "Konghucu" ? "selected" : ""; ?>>Konghucu</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Usia:</label>
                    <input type="number" name="usia" class="form-control" value="<?php echo $usia; ?>" required>
                </div>

                <div class="form-group">
                    <label>Asal Sekolah:</label>
                    <input type="text" name="asal_sekolah" class="form-control" value="<?php echo $asal_sekolah; ?>" required>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="pendaftaran.php" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</body>
</html>
