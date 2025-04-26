<?php
require_once '../config/database.php';
require_once '../models/Reservasi.php';

$db = new Database();
$conn = $db->connect();

$reservasi = new Reservasi($conn);

$action = $_GET['action'] ?? 'create';

if ($action == 'create' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $reservasi->nama_tamu = $_POST['nama_tamu'];
    $reservasi->email = $_POST['email'];
    $reservasi->telepon = $_POST['telepon'];
    $reservasi->jenis_kamar = $_POST['jenis_kamar'];
    $reservasi->checkin = $_POST['checkin'];
    $reservasi->checkout = $_POST['checkout'];

    if ($reservasi->create()) {
        header("Location: ../views/home.php?status=success");
    } else {
        echo "Reservasi gagal dilakukan.";
    }
} elseif ($action == 'checkin' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $reservasi->id = $_POST['id_reservasi'];
    if ($reservasi->checkIn()) {
        echo "Check-in berhasil!";
    } else {
        echo "Gagal check-in.";
    }
} elseif ($action == 'checkout' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $reservasi->id = $_POST['id_reservasi'];
    if ($reservasi->checkOut()) {
        echo "Check-out berhasil!";
    } else {
        echo "Gagal check-out.";
    }
}
