<!DOCTYPE html>
<html>
<head>
    <title>Hasil Submit Data Siswa</title>
</head>
<body>
    <h1>Hasil Submit Data Siswa</h1>
    <p>Nama Siswa: <?php echo $result['nama']; ?></p>
    <p>NIS: <?php echo $result['nis']; ?></p>
    <p>Kelas: <?php echo $result['kelas']; ?></p>
    <!-- Tampilkan field lainnya sesuai dengan data yang Anda inginkan -->

    <!-- Tambahkan link untuk kembali ke form input -->
    <a href="<?php echo site_url('siswaControllers/input_data'); ?>">Kembali ke Form Input</a>
</body>
</html>
