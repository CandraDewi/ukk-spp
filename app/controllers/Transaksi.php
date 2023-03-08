<?php

class Transaksi extends Controller 
{
    public function index()
    {
        $data['title'] = 'Transaksi';
        $data['siswa'] = $this->model('Siswa_models')->getDataSiswa();

        $this->view("layouts/dashboard/header", $data);
        $this->view("layouts/dashboard/sidebar", $data);
        $this->view("pages/transaksi/index", $data);
    }

    public function tambahForm($siswa_id, $pembayaran_id)
    {
        $data['page'] = "Siswa";

        $data['pembayaran'] = $this->model('Transaksi_models')->getTransaksi();
        $data['siswa'] = $this->model('Siswa_models')->getSiswaById($siswa_id);
        $data['pembayaran'] = $this->model('Pembayaran_models')->getPembayaranById($pembayaran_id);

        $this->view('layouts/dashboard/header', $data);
        $this->view('layouts/dashboard/sidebar', $data);
        $this->view('pages/transaksi/create', $data);
    }

    public function tambah()
    {
        // if ($this->model('Transaksi_model')->checkTransaksi($_POST) > 0) {
        //     header("Location:" . BASEURL . "/spp");
        //     exit;
        // } else {
            if ($this->model('Transaksi_models')->createTransaksi($_POST) > 0) {
                header("Location:" . BASEURL . "/laporan");
                exit;
            } else {
                header("Location:" . BASEURL . "/laporan");
                exit;
            }
        // }
    }

}