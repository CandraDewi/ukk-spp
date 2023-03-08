<?php

class Kelas extends Controller
{
    public function index()
    {
        $data['title'] = 'Kelas';
        $data['kelas'] = $this->model('Kelas_models')->getDataKelas();


        $this->view("layouts/dashboard/header", $data);
        $this->view("layouts/dashboard/sidebar", $data);
        $this->view("pages/kelas/index", $data);
        $this->view("layouts/dashboard/footer", $data);
    }

    public function create()
    {
        $data['title'] = 'Kelas';

        $this->view("layouts/dashboard/header", $data);
        $this->view("layouts/dashboard/sidebar", $data);
        $this->view("pages/kelas/create", $data);
        // $this->view("layouts/dashboard/footer", $data);
    }

    public function add()
    {
        if ($this->model('Kelas_models')->addKelas($_POST) > 0) {
            header("Location:" . BASE_URL . "/kelas");
            exit;
        } else {
            header("Location:" . BASE_URL . "/kelas");
            exit;
        }
    }

    public function editForm($id)
    {
        $data['title'] = 'Kelas';
        $data['kelas'] = $this->model('Kelas_models')->getKelasById($id);

        $this->view("layouts/dashboard/header", $data);
        $this->view("layouts/dashboard/sidebar", $data);
        $this->view("pages/kelas/edit", $data);
    }

    public function edit()
    {
        if($this->model('Kelas_models')->editKelas($_POST) > 0) {
            header("Location:" . BASE_URL . "/kelas");
            exit;
        } else {
            header("Location:" . BASE_URL . "/kelas");
            exit;
        }
    }

    public function delete($id)
    {
        if($this->model('Kelas_models')->deleteDataKelas($id) > 0) {
            header("Location:" . BASE_URL . "/kelas");
            exit;
        } else {
            header("Location:" . BASE_URL . "/kelas");
        }
    }


}