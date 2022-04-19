<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= BASE_URL; ?>/assets/node_modules/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?= BASE_URL; ?>/assets/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet"
        href="<?= BASE_URL; ?>/assets/node_modules/datatables.net-bs5/css/dataTables.bootstrap5.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins&display=swap" rel="stylesheet">

    <title><?= $data["title"] ?></title>
</head>
<style>
body {
    font-family: 'Poppins', sans-serif;
}
</style>

<body class="<?= (empty($data["bg-body"]) ? "" : $data["bg-body"]) ?>">