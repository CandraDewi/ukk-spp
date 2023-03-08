<?php

class Pembayaran_models extends Model
{
    private $tabel = "pembayaran",
            $db;

    public function __construct()
    {
        $this->db = new Model();
    }

    public function getDataPembayaran()
    {
        $query = "SELECT * FROM pembayaran";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->All();
    }

    public function getPembayaranById($id)
    {
        $query = "SELECT * FROM pembayaran WHERE pembayaran_id=:pembayaran_id";
        $this->db->query($query);
        $this->db->bind('pembayaran_id', $id);
        $this->db->execute();
        return $this->db->single();
    }

    public function addDataPembayaran($data)
    {
        $query = "INSERT INTO pembayaran(tahun_ajaran,nominal) VALUES(:tahun_ajaran,:nominal)";
        $this->db->query($query);
        $this->db->bind('tahun_ajaran', $data['tahun_ajaran']);
        $this->db->bind('nominal', $data['nominal']);
        $this->db->execute();
        return $this->db->rowcount();
    }

    public function editDataPembayaran($data)
    {
        $query = "UPDATE pembayaran SET `tahun_ajaran`=:tahun_ajaran, `nominal`=:nominal WHERE `pembayaran_id`=:pembayaran_id";
        $this->db->query($query);
        $this->db->bind('pembayaran_id', $data['pembayaran_id']);
        $this->db->bind('tahun_ajaran', $data['tahun_ajaran']);
        $this->db->bind('nominal', $data['nominal']);
        $this->db->execute();
        return $this->db->rowcount();
    }

    public function deleteDataPembayaran($id)
    {
        $query = "DELETE FROM pembayaran WHERE pembayaran_id=:pembayaran_id";
        $this->db->query($query);
        $this->db->bind('pembayaran_id', $id);
        $this->db->execute();
        return $this->db->rowcount();
    }
}