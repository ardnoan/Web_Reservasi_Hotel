<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan Pembayaran</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>

<body>

    <header>
        <h1>Laporan Pembayaran</h1>
    </header>

    <main>
        <table border="1" width="100%" class="form-container">
            <thead>
                <tr>
                    <th>ID Pembayaran</th>
                    <th>Nama Tamu</th>
                    <th>Total Bayar</th>
                    <th>Tanggal Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data pembayaran diisi dari backend (PHP Loop) -->
                <tr>
                    <td>001</td>
                    <td>Andi</td>
                    <td>Rp 1.000.000</td>
                    <td>2025-04-26</td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>Budi</td>
                    <td>Rp 1.500.000</td>
                    <td>2025-04-27</td>
                </tr>
            </tbody>
        </table>
    </main>

</body>

</html>