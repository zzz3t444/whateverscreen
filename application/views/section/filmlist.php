<!DOCTYPE html>
<html>

<head>
    <title>Daftar Film</title>
</head>

<body>
    <h1>Daftar Film</h1>
    <div class="film-list">
        <?php foreach ($films as $film) : ?>
            <div class="film-card">
                <h2><?php echo $film->title; ?></h2>
                <p><?php echo $film->description; ?></p>
                <a href="<?php echo site_url('film/detail/' . $film->id); ?>">Lihat Detail</a>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>