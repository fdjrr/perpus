<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/style.css">
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary p-3">
        <div class="container">
            <a class="navbar-brand fw-bold" href="<?= BASEURL; ?>">PHP MVC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
                    <a class="nav-link" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a>
                    <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
                </div>
            </div>
        </div>
    </nav>