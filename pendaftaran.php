<!DOCTYPE html>
<html>
<head>
    <title>Data Pendaftaran Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f5e6cc;
        }
        .data-container {
            background-color: #654321;
            color: #fff;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
        }
        .data-container th {
            background-color: #ffd700;
        }
        .data-container a {
            color: #fff;
            text-decoration: none;
        }
        .data-container a:hover {
            color: #ffd700;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="data-container">
            <h2>Data Pendaftaran Siswa</h2>
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Usia</th>
                    <th>Asal Sekolah</th>
                    <th>Aksi</th>
                </tr>

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

                // Mengambil data dari tabel "siswa"
                $sql = "SELECT * FROM siswa";
                $result = $connection->query($sql);

                if ($result->num_rows > 0) {
                    // Menampilkan data ke dalam tabel
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['nama'] . "</td>";
                        echo "<td>" . $row['alamat'] . "</td>";
                        echo "<td>" . $row['jenis_kelamin'] . "</td>";
                        echo "<td>" . $row['agama'] . "</td>";
                        echo "<td>" . $row['usia'] . "</td>";
                        echo "<td>" . $row['asal_sekolah'] . "</td>";
                        echo "<td>
                                <a href='edit.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Edit</a>
                                <a href='hapus.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm'>Hapus</a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>Tidak ada data pendaftaran siswa.</td></tr>";
                }

                // Menutup koneksi database
                $connection->close();
                ?>
            </table>
        </div>
    </div>
</body>
</html>
