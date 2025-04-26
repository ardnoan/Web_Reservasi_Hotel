<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Check-In</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>

<body>

    <header>
        <h1>Form Check-In</h1>
    </header>

    <main>
        <form action="/controllers/ReservasiController.php?action=checkin" method="POST" class="form-container">
            <label>Nomor Reservasi</label>
            <input type="text" name="id_reservasi" required>

            <label>Nama Tamu</label>
            <input type="text" name="nama_tamu" required>

            <button type="submit" class="btn">Proses Check-In</button>
        </form>
    </main>

</body>

</html>