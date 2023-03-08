<?php

class Kelas_models extends Model 
{
    private $tabel = "kelas",
            $db;
    
    public function __construct() {
        $this->db = new Model();
    }

    public function getTotalKelas() 
    {
        $query = "SELECT COUNT(*) as totalKelas FROM kelas;";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->single();
    }

    public function getDataKelas()
    {
        $query = "SELECT * FROM kelas";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->All();
    }

    public function getKelasById($id)
    {
        $query = "SELECT * FROM kelas WHERE kelas_id=:kelas_id";
        $this->db->query($query);
        $this->db->bind('kelas_id', $id);
        $this->db->execute();
        return $this->db->single();
    }

    public function addKelas($data)
    {
        $query = "INSERT INTO kelas(nama,kompetensi_keahlian) VALUES(:nama,:kompetensi_keahlian)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kompetensi_keahlian', $data['kompetensi_keahlian']);
        $this->db->execute();
        return $this->db->rowcount();
    }

    public function editKelas($data)
    {
        $query = "UPDATE kelas SET `nama`=:nama, `kompetensi_keahlian`=:kompetensi_keahlian WHERE `kelas_id`=:kelas_id";
        $this->db->query($query);
        $this->db->bind('kelas_id', $data['kelas_id']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kompetensi_keahlian', $data['kompetensi_keahlian']);
        $this->db->execute();
        return $this->db->rowcount();
    }

    public function deleteDataKelas($id)
    {
        $query = "DELETE FROM kelas WHERE kelas_id=:kelas_id";
        $this->db->query($query);
        $this->db->bind('kelas_id', $id);
        $this->db->execute();
        return $this->db->rowcount();
    }
}