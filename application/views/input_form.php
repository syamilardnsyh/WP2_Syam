<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Siswa</title>
</head>
<body>
    <form action="proses.php" method="post">        
        <label for="nama">Nama Siswa:</label>
        <input type="text" name="nama" id="nama">
    
        <label for="nis">NIS:</label>
        <input type="text" name="nis" id="nis">
    
        <label for="kelas">Kelas:</label>
        <input type="text" name="kelas" id="kelas">
    
        <label for="tgl_lahir">Tanggal Lahir:</label>
        <input type="date" name="tgl_lahir" id="tgl_lahir">
    
        <label for="tempat_lahir">Tempat Lahir:</label>
        <input type="text" name="tempat_lahir" id="tempat_lahir">
    
        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" id="alamat">
    
        <label>Jenis Kelamin:</label>
        <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
        <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
    
        <label for="agama">Agama:</label>
        <select name="agama" id="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Budha">Budha</option>
            <option value="Hindu">Hindu</option>
            <option value="Protestan">Protestan</option>
            <option value="Khonghucu">Khonghucu</option>
        </select>
    
        <input type="submit" value="Submit">
</form>
</body>
</html>