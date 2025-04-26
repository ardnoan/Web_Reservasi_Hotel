<?php
class Reservasi {
    private $conn;
    private $table = "tabel_reservasi";

    public $id;
    public $nama_tamu;
    public $email;
    public $telepon;
    public $jenis_kamar;
    public $checkin;
    public $checkout;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO $this->table 
        (nama_tamu, email, telepon, jenis_kamar, tgl_checkin, tgl_checkout) 
        VALUES (:nama, :email, :telp, :kamar, :in, :out)";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nama', $this->nama_tamu);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':telp', $this->telepon);
        $stmt->bindParam(':kamar', $this->jenis_kamar);
        $stmt->bindParam(':in', $this->checkin);
        $stmt->bindParam(':out', $this->checkout);

        return $stmt->execute();
    }

    public function checkIn() {
        $query = "UPDATE $this->table SET status='checkin' WHERE id=:id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $this->id);
        return $stmt->execute();
    }

    public function checkOut() {
        $query = "UPDATE $this->table SET status='checkout' WHERE id=:id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $this->id);
        return $stmt->execute();
    }
}
