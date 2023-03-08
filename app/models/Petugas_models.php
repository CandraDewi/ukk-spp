<?php

class Petugas_models extends Model {
    private $tabel = "petugas",
            $db;

    public function __construct() {
        $this->db = new Model;
    }

    public function getTotalPetugas() {
        $query = "SELECT COUNT(*) as totalPetugas FROM petugas";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->single(); 
    }

    public function getDataPetugas() 
    {
        $query = "SELECT * FROM petugas";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->All();
    }

    public function getPetugasById($id)
    {
        $query = "SELECT * FROM petugas WHERE `petugas_id`=:petugas_id";
        $this->db->query($query);
        $this->db->bind('petugas_id', $id);
        // $this->db->execute();
        return $this->db->single();
    }

    public function addPetugas($data)
    {
        // var_dump($data); die;
        $this->db->query("INSERT into pengguna values(null, :username, :password, 'petugas')");
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->execute();

        $pengguna=$this->getPenggunaLimit1();

        $query = " INSERT INTO petugas VALUES(null, :nama,:pengguna_id)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('pengguna_id', $pengguna['pengguna_id']);
        $this->db->execute();
        return $this->db->rowcount();
    }

    public function getPenggunaLimit1()
    {
        $this->db->query("SELECT * from pengguna order by `pengguna_id` desc limit 1");
        return $this->db->single();   
    }

    public function editPetugas($data)
    {
        // var_dump($data); die;   
        $query = "UPDATE petugas SET `nama`=:nama WHERE `petugas_id`=:petugas_id";
        $this->db->query($query);
        $this->db->bind('petugas_id', $data['petugas_id']);
        $this->db->bind('nama', $data['nama']);
        $this->db->execute();
        return $this->db->rowcount();
    }

    public function deleteDataPetugas($id)
    {
        $query = "DELETE FROM petugas WHERE petugas_id=:petugas_id";
        $this->db->query($query);
        $this->db->bind('petugas_id', $id);
        $this->db->execute();
        return $this->db->rowcount();
    }
}