<!DOCTYPE html>
<html>
<head>
    <title>Input Data</title>
</head>
<body>
    <h2>Data</h2>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Merk</th>
            <th>Warna</th>
            <th>Jumlah</th>
        </tr>

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

        // Query untuk mengambil data dari database
        $sql = "SELECT * FROM data";
        $result = $conn->query($sql);

        // Tampilkan data
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['no'] . "</td>";
                echo "<td>" . $row['nama_merk'] . "</td>";
                echo "<td>" . $row['warna'] . "</td>";
                echo "<td>" . $row['jumlah'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Tidak ada data.</td></tr>";
        }

        // Tutup koneksi
        $conn->close();
        ?>
    </table>

    <br>

    <a href="int_data.php">Tambah Data</a>
</body>
</html>
