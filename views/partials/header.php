<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?? 'Hotel Reservasi' ?></title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>

<body>

    <header>
        <h1><?= $page_title ?? 'Hotel Kami' ?></h1>
        <nav>
            <a href="/views/home.php">Home</a>
            <a href="/views/reservasi.php">Reservasi</a>
            <a href="/views/checkin.php">Check-In</a>
            <a href="/views/checkout.php">Check-Out</a>
            <a href="/views/laporan.php">Laporan</a>
        </nav>
    </header>

    <main>