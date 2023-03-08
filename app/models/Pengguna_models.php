<?php

class Pengguna_models extends Model
{
    private $tabel = "pengguna",
            $db;

    public function __construct()
    {
        $this->db = new Model();
    }

    public function getDataPengguna()
    {
        $query = "SELECT * FROM pengguna";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->All();
    }

    public function getPenggunaById($id)
    {
        $query = "SELECT * FROM pengguna WHERE pengguna_id=:pengguna_id";
        $this->db->query($query);
        $this->db->bind('pengguna_id', $id);
        $this->db->execute();
        return $this->db->single();
    }

    public function addPengguna($data)
    {
        $query = "INSERT INTO pengguna(username,password,role) VALUES(:username,:password,:role)";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('role', $data['role']);
        $this->db->execute();
        return $this->db->rowcount();
    }

    public function editPengguna($data)
    {
        $query = "UPDATE pengguna SET `username`=:username, `password`=:password WHERE `pengguna_id`=:pengguna_id";
        $this->db->query($query);
        $this->db->bind('pengguna_id', $data['pengguna_id']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->execute();
        return $this->db->rowcount();
    }

    public function deletePengguna($id)
    {
        $query = "DELETE FROM pengguna WHERE pengguna_id=:pengguna_id";
        $this->db->query($query);
        $this->db->bind('pengguna_id', $id);
        $this->db->execute();
        return $this->db->rowcount();
    }


       
}