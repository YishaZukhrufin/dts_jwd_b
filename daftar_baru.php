<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru</title>
</head>
<body>
    <h2>Form Pendaftaran Siswa Baru</h2>
    <form action="proses_daftar.php" method="post">
        <label>Nama:</label>
        <input type="text" name="nama" required><br>

        <label>Alamat:</label>
        <textarea name="alamat" rows="4" required></textarea><br>

        <label>Jenis Kelamin:</label>
        <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
        <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan<br>

        <label>Agama:</label>
        <select name="agama" required>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghucu">Konghucu</option>
        </select><br>

        <label>Usia:</label>
        <input type="number" name="usia" required><br>

        <label>Asal Sekolah:</label>
        <input type="text" name="asal_sekolah" required><br>

        <input type="submit" value="Daftar">
    </form>
</body>
</html>
