<?php

class Siswa_models extends Model {
    private $tabel = "siswa",
            $db;
    
    public function __construct() 
    {
        $this->db = new Model();
    }

    public function getTotalSiswa()
    {
       $query = "SELECT COUNT(*) as totalSiswa FROM siswa;";
       $this->db->query($query);
       $this->db->execute();
       return $this->db->single();
    }

    public function getDataSiswa()
    {
        $query = "SELECT * FROM siswa";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->All();
    }

    public function getSiswaById($id)
    {
        $query = "SELECT siswa.*, pembayaran.tahun_ajaran, pembayaran.nominal FROM siswa INNER JOIN pembayaran ON pembayaran.pembayaran_id = siswa.pembayaran_id WHERE siswa_id=:siswa_id";
        $this->db->query($query);
        $this->db->bind('siswa_id', $id);
        $this->db->execute();
        return $this->db->single();
    }

    public function addSiswa($data)
    {
        $this->db->query("INSERT into pengguna values(null, :username, :password, 'siswa')");
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->execute();

        $siswa=$this->getPenggunaLimit1();

        $query = "INSERT INTO siswa(nisn, nis, nama, alamat, telepon, kelas_id, pengguna_id, Pembayaran_id)
        VALUES(:nisn,:nis,:nama,:alamat,:telepon,:kelas_id,:pengguna_id,:pembayaran_id)";
        $this->db->query($query);
        $this->db->bind('nisn', $data['nisn']);
        $this->db->bind('nis', $data['nis']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('telepon', $data['telepon']);
        $this->db->bind('kelas_id', $data['kelas_id']);
        $this->db->bind('pengguna_id', $siswa['pengguna_id']);
        $this->db->bind('pembayaran_id', $data['pembayaran_id']);
        $this->db->execute();
        return $this->db->rowcount();
    }

    public function getPenggunaLimit1()
    {
        $this->db->query("SELECT * from siswa order by `siswa_id` desc limit 1");
        return $this->db->single();   
    }

    public function getTahunAjaran($id)
    {
        $query = "SELECT pembayaran.tahun_ajaran, pembayaran.nominal from siswa join pembayaran on siswa.siswa_id=:siswa_id && siswa.pembayaran_id=pembayaran.pembayaran_id";
        $this->db->query($query);
        $this->db->bind('siswa_id', $id);   
        $this->db->execute();
        return $this->db->single();

    }

    public function editDataSiswa($data)
    {
        $query = "UPDATE siswa SET `nisn`=:nisn,`nis`=:nis, `nama`=:nama, `alamat`=:alamat, `telepon`=:telepon WHERE `siswa_id`=:siswa_id";
        $this->db->query($query);
        $this->db->bind('siswa_id', $data['siswa_id']);
        $this->db->bind('nisn', $data['nisn']);
        $this->db->bind('nis', $data['nis']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('telepon', $data['telepon']);
        $this->db->execute();
        return $this->db->rowcount();
    }

    public function deleteDataSiswa($id)
    {
        $query = "DELETE FROM siswa WHERE siswa_id=:siswa_id";
        $this->db->query($query);
        $this->db->bind('siswa_id', $id);
        $this->db->execute();
        return $this->db->rowcount();        

    }

}