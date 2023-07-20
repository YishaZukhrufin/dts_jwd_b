<?php
// Koneksi ke database
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'input_data';

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$no = $_POST['no'];
$nama_merk = $_POST['nama_merk'];
$warna = $_POST['warna'];
$jumlah = $_POST['jumlah'];

// Validasi input
if (empty($no) || empty($nama_merk) || empty($warna) || empty($jumlah)) {
    // Redirect kembali ke halaman input_data.php dengan pesan error
    header("Location: int_data.php?error=Semua field harus diisi");
    exit();
}

// Query untuk menyimpan data ke database
$sql = "INSERT INTO data (no, nama_merk, warna, jumlah) VALUES ('$no', '$nama_merk', '$warna', '$jumlah')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
