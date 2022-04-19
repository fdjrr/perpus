<style>
.navbar-brand {
    letter-spacing: 3px;
}

.nav-link {
    font-size: 12px;
    margin-right: 15px;
}
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary p-3">
    <div class="container">
        <a class="navbar-brand text-uppercase fw-bold" href="<?= BASE_URL; ?>">Perpustakaan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link <?= ($data["active"] == "home" ? "active" : "") ?>" aria-current="page"
                    href="<?= BASE_URL; ?>">Home</a>
                <a class="nav-link <?= ($data["active"] == "daftar-buku" ? "active" : "") ?>"
                    href="<?= BASE_URL; ?>/buku">Daftar Buku</a>
                <a class="nav-link <?= ($data["active"] == "daftar-kelas" ? "active" : "") ?>"
                    href="<?= BASE_URL; ?>/kelas">Daftar Kelas</a>
            </div>
        </div>
    </div>
</nav>
<?php if ($data["title"] == "Home") : ?>
<?php else : ?>
<div class="container mt-4 mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="<?= BASE_URL; ?>"><small>Home</small></a>
            </li>
            <?php if ($data["title"] != "Home") : ?>
            <li class="breadcrumb-item active" aria-current="page"><small><?= $data["title"] ?></small></li>
            <?php endif; ?>
        </ol>
    </nav>
</div>
<?php endif; ?>