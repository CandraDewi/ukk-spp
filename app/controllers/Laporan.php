<?php

class Laporan extends Controller
{
    public function index()
    {
        $data['title'] = 'Laporan';

        if($_SESSION['userSession']['role'] !== 'siswa') {
            $data['transaksi'] = $this->model('Transaksi_models')->getTransaksi();
        } else {
            $data['transaksi'] = $this->model('Transaksi_models')->getTransaksiSiswa($_SESSION['userSession']['siswa_id']);
        }

        $this->view("layouts/dashboard/header", $data);
        $this->view("layouts/dashboard/sidebar", $data);
        $this->view("pages/laporan/index", $data);
    }
}