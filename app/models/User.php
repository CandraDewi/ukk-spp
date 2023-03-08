<?php 
class User {
    private $table = 'pengguna',
            $db;

    public function __construct()
    {
        $this->db = new Model();
    }

    public function all()
    {
        $this->db->query("SELECT * FROM {$this->table}");
        return $this->db->all();
    }

    public function findUserByUsername($username)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE username=:username");
        $this->db->bind("username", $username);
        $row = $this->db->single();

        if($this->db->rowCount()>0){
            return $row;
        } else {
            return false;
        }
        
    }

    public function findSiswaByPenggunaId($pengguna_id)
    {
        $this->db->query("SELECT siswa.*, pengguna.username, pengguna.role FROM pengguna
                            INNER JOIN siswa ON siswa.pengguna_id=pengguna.pengguna_id
                            WHERE siswa.pengguna_id=:pengguna_id");
        $this->db->bind("pengguna_id", $pengguna_id);
        $row = $this->db->single();

        if($this->db->rowCount()>0){
            return $row;
        } else {
            return false;
        }
    }

    public function findPetugasByPenggunaId($pengguna_id)
    {
        $this->db->query("SELECT petugas.*, pengguna.username, pengguna.role FROM pengguna
                            INNER JOIN petugas ON petugas.pengguna_id=pengguna.pengguna_id
                            WHERE petugas.pengguna_id=:pengguna_id");
        $this->db->bind("pengguna_id", $pengguna_id);
        $row = $this->db->single();

        if($this->db->rowCount()>0){
            return $row;
        } else {
            return false;
        }
    }

    public function login ($data) {
        $user = $this->findUserByUsername($data['username']);
        if(!$user)return false;
        
        $siswa = $this->findSiswaByPenggunaId($user['pengguna_id']);
        $petugas = $this->findPetugasByPenggunaId($user['pengguna_id']);

        // var_dump($petugas, $siswa); die;
        if($user['password'] == $data ['password']) {
            if($siswa) {
                $_SESSION['userSession'] = $siswa;
            } else if ($petugas) {
                $_SESSION['userSession'] = $petugas;
            } else {
                $_SESSION['userSession'] = $user;
            }
            return true;
        } else {
            return false;
        }
    }
}