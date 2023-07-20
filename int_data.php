<!DOCTYPE html>
<html>
<head>
    <title>Input Data</title>
</head>
<body>
    <h2>Input Data</h2>

    <?php
    // Tampilkan pesan kesalahan jika ada
    if(isset($_GET['error'])) {
        echo "<p style='color: red;'>{$_GET['error']}</p>";
    }
    ?>

    <form action="insert_data.php" method="post">
        <label for="no">No:</label>
        <input type="text" name="no" id="no"><br><br>

        <label for="nama_merk">Nama Merk:</label>
        <input type="text" name="nama_merk" id="nama_merk"><br><br>

        <label for="warna">Warna:</label>
        <input type="text" name="warna" id="warna"><br><br>

        <label for="jumlah">Jumlah:</label>
        <input type="text" name="jumlah" id="jumlah"><br><br>

        <input type="submit" name="submit" value="Simpan">
        <input type="reset" value="Ulangi">
    </form>

    <br>

    <a href="index.php">Kembali</a>
</body>
</html>
