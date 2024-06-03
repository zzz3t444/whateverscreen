<!DOCTYPE html>
<html>

<head>
    <title>Detail Film</title>
</head>

<body>
    <h1><?php echo $film->title; ?></h1>
    <p><?php echo $film->description; ?></p>
    <a href="<?php echo site_url('film'); ?>">Kembali ke Daftar Film</a>
</body>

</html>