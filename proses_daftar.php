<?php
// Koneksi ke database
$host = 'localhost'; // Ganti sesuai dengan host database Anda
$username = 'root'; // Ganti dengan username database Anda
$password = ''; // Ganti dengan password database Anda
$dbname = 'pendaftaran_siswa'; // Ganti dengan nama database yang sudah dibuat

// Buat koneksi
$connection = mysqli_connect($host, $username, $password, $dbname);

// Cek koneksi
if (mysqli_connect_errno()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Memproses data dari form pendaftaran
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $agama = $_POST["agama"];
    $usia = $_POST["usia"];
    $asal_sekolah = $_POST["asal_sekolah"];

    // Menyimpan data ke database
    $sql = "INSERT INTO siswa (nama, alamat, jenis_kelamin, agama, usia, asal_sekolah) 
            VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama', $usia, '$asal_sekolah')";

    if (mysqli_query($connection, $sql)) {
        echo "Pendaftaran berhasil! Terima kasih telah mendaftar.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
}

// Menutup koneksi database
mysqli_close($connection);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Proses Pendaftaran Siswa Baru</title>
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
    
</body>
</html>
