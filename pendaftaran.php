<!DOCTYPE html>
<html>
<head>
    <title>Data Pendaftaran Siswa</title>
</head>
<body>
    <h2>Data Pendaftaran Siswa</h2>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Usia</th>
            <th>Asal Sekolah</th>
        </tr>

        <?php
        // Koneksi ke database
        $host = 'localhost'; // Ganti sesuai dengan host database Anda
        $username = 'root'; // Ganti dengan username database Anda
        $password = ''; // Ganti dengan password database Anda
        $dbname = 'pendaftaran_siswa'; // Ganti dengan nama database yang sudah dibuat

        $connection = mysqli_connect($host, $username, $password, $dbname);

        // Cek koneksi
        if (!$connection) {
            die("Koneksi database gagal: " . mysqli_connect_error());
        }

        // Mengambil data dari tabel "siswa"
        $sql = "SELECT * FROM siswa";
        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) > 0) {
            // Menampilkan data ke dalam tabel
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['alamat'] . "</td>";
                echo "<td>" . $row['jenis_kelamin'] . "</td>";
                echo "<td>" . $row['agama'] . "</td>";
                echo "<td>" . $row['usia'] . "</td>";
                echo "<td>" . $row['asal_sekolah'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>Tidak ada data pendaftaran siswa.</td></tr>";
        }

        // Menutup koneksi database
        mysqli_close($connection);
        ?>
    </table>
</body>
</html>
