<!DOCTYPE html>
<html>
<head>
    <title>Penyetoran Tabungan Bank Mini</title>
</head>
<body>

    <h2>Form Penyetoran Tabungan</h2>

    <!-- Form input -->
    <form method="post" action="">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Kelas:</label><br>
        <input type="text" name="kelas" required><br><br>

        <label>Jurusan:</label><br>
        <input type="text" name="jurusan" required><br><br>

        <label>Tanggal Penyetoran:</label><br>
        <input type="date" name="tanggal_penyetoran" required><br><br>

        <label>Jumlah Uang Disetor (Rp):</label><br>
        <input type="number" name="jumlah_uang" required><br><br>

        <label>Terbilang:</label><br>
        <input type="text" name="terbilang" required><br><br>

        <input type="submit" name="submit" value="Kirim">
    </form>

    <br><br>

    <?php
    if (isset($_POST['submit'])) {
        // Ambil data dari form
        $nama = htmlspecialchars($_POST['nama']);
        $kelas = htmlspecialchars($_POST['kelas']);
        $jurusan = htmlspecialchars($_POST['jurusan']);
        $tanggal = htmlspecialchars($_POST['tanggal_penyetoran']);
        $jumlah = $_POST['jumlah_uang'];
        $terbilang = htmlspecialchars($_POST['terbilang']);

        // Simulasi saldo awal (bisa nanti ambil dari database)
        $saldo_awal = 50000; // Misalnya saldo sebelumnya Rp 50.000

        // Validasi jumlah uang
        if (!is_numeric($jumlah)) {
            echo "<p style='color:red;'>Jumlah uang harus berupa angka!</p>";
            exit;
        }

        // Hitung saldo akhir
        $saldo_akhir = $saldo_awal + $jumlah;

        // Tampilkan bukti penyetoran
        echo "<hr>";
        echo "<h3>Bukti Penyetoran</h3>";
        echo "Nama: $nama <br>";
        echo "Kelas: $kelas <br>";
        echo "Jurusan: $jurusan <br>";
        echo "Tanggal Penyetoran: $tanggal <br>";
        echo "Saldo Awal: Rp " . number_format($saldo_awal, 0, ',', '.') . "<br>";
        echo "Jumlah Disetor: Rp " . number_format($jumlah, 0, ',', '.') . "<br>";
        echo "Jumlah Saldo Sekarang: Rp " . number_format($saldo_akhir, 0, ',', '.') . "<br>";
        echo "Terbilang: $terbilang <br>";
    }
    ?>

</body>
</html>