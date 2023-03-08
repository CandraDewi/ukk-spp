<?php

class Transaksi_models extends Model {
    private $table = "transaksi",
            $db;

    public function __construct()
    {
        $this->db = new Model();
    }

    public function getTotalTransaksi() 
    {
        $query = "SELECT COUNT(*) AS totalTransaksi FROM transaksi";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->single();
    }

    public function getTransaksi()
    {
        $query = "SELECT siswa.*,transaksi.tanggal_bayar,transaksi.bulan_dibayar,transaksi.tahun_dibayar,transaksi.petugas_id,pembayaran.tahun_ajaran FROM siswa INNER JOIN transaksi ON siswa.siswa_id=transaksi.siswa_id INNER JOIN pembayaran ON pembayaran.pembayaran_id=transaksi.pembayaran_id";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->all();
    }
    public function getTransaksiSiswa($id)
    {
        $query = "SELECT transaksi.*, siswa.nama AS nama_siswa, petugas.nama AS nama_petugas    , pembayaran.nominal FROM transaksi INNER JOIN siswa ON siswa.siswa_id=transaksi.siswa_id INNER JOIN pembayaran ON pembayaran.pembayaran_id=transaksi.pembayaran_id INNER JOIN petugas ON petugas.petugas_id=transaksi.petugas_id WHERE transaksi.siswa_id=:siswa_id";
        $this->db->query($query);
        $this->db->bind('siswa_id', $id);
        $this->db->execute();
        return $this->db->all();
    }

    public function createTransaksi($data)
    {
        $query = "INSERT INTO transaksi(tanggal_bayar,bulan_dibayar,tahun_dibayar,siswa_id,petugas_id,pembayaran_id) VALUES(:tanggal_bayar,:bulan_dibayar,:tahun_dibayar,:siswa_id,:petugas_id,:pembayaran_id)";
        $this->db->query($query);
        $this->db->bind('tanggal_bayar', date('Y-m-d H:i:s'));
        $this->db->bind('bulan_dibayar', $data['bulan_dibayar']);
        $this->db->bind('tahun_dibayar', $data['tahun_dibayar']);
        $this->db->bind('siswa_id', $data['siswa_id']);
        $this->db->bind('petugas_id', $data['petugas_id']);
        $this->db->bind('pembayaran_id', $data['pembayaran_id']);
        $this->db->execute();
        return $this->db->rowcount();
    }


    
}