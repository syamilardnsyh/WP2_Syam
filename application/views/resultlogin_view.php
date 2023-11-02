<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Data Login</title>
</head>
<body>
    <h1>HASIL SUBMIT DATA LOGIN</h1>
    <p>Username: <?php echo $result['username']; ?></p>
    <a href="<?php echo site_url('login_view'); ?>">Kembali ke Form Input</a>
</body>
</html>