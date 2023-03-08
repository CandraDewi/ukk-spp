<?php

class Siswa extends Controller 
{
    public function index()
    {
        $data['title'] = 'Siswa';
        $data['siswa'] = $this->model('Siswa_models')->getDataSiswa();

        $this->view("layouts/dashboard/header", $data);
        $this->view("layouts/dashboard/sidebar", $data);
        $this->view("pages/siswa/index", $data);
        $this->view("layouts/dashboard/footer", $data);

    }

    public function create()
    {
        $data['title'] = 'Siswa';
        $data['kelas'] = $this->model('Kelas_models')->getDataKelas();
        $data['pembayaran'] = $this->model('Pembayaran_models')->getDataPembayaran();


        $this->view("layouts/dashboard/header", $data);
        $this->view("layouts/dashboard/sidebar", $data);
        $this->view("pages/siswa/create", $data);
    }

    public function add()
    {
        if ($this->model('Siswa_models')->addSiswa($_POST) > 0) {
            header("Location:" . BASE_URL . "/siswa");
            exit;
        } else {
            header("Location:" . BASE_URL . "/siswa");
            exit;
        }
    }

    public function editForm($id)
    {
        $data['title'] = 'siswa';
        $data['siswa'] = $this->model('Siswa_models')->getSiswaById($id);

        $this->view("layouts/dashboard/header", $data);
        $this->view("layouts/dashboard/sidebar", $data);
        $this->view("pages/siswa/edit", $data);
    }

    public function edit()
    {
        if ($this->model('Siswa_models')->editDataSiswa($_POST) > 0 ) {
            header("Location:" . BASE_URL . "/siswa");
            exit;
        } else {
            header("Location:" . BASE_URL . "/siswa");
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('Siswa_models')->deleteDataSiswa($id) > 0 ) {
            header("Location:" . BASE_URL . "/siswa");
            exit;
        } else {
            header("Location:" . BASE_URL . "/siswa");
            exit;
        }
    }

}