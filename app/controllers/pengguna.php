<?php

class Pengguna extends Controller
{
    public function index()
    {
        $data['title'] = "Pengguna";
        $data['pengguna'] = $this->model('Pengguna_models')->getDataPengguna();

        $this->view("layouts/dashboard/header", $data);
        $this->view("layouts/dashboard/sidebar", $data);
        $this->view("pages/pengguna/index", $data);
        $this->view("layouts/dashboard/footer", $data);
    }

    public function create()
    {
        $data['title'] = 'Pengguna';

        $this->view("layouts/dashboard/header", $data);
        $this->view("layouts/dashboard/sidebar", $data);
        $this->view("pages/pengguna/create", $data);
    }

    public function add()
    {
        if ($this->model('Pengguna_models')->addPengguna($_POST) > 0 ) {
            header("Location:" . BASE_URL . "/pengguna");
            exit;
        } else {
            header("Location:" . BASE_URL . "/pengguna");
            exit;
        }
    }

    public function editForm($id)
    {
        
        $data['title'] = 'Pengguna';
        $data['pengguna'] = $this->model('Pengguna_models')->getPenggunaById($id);

        $this->view("layouts/dashboard/header", $data);
        $this->view("layouts/dashboard/sidebar", $data);
        $this->view("pages/pengguna/edit", $data);

    }

    public function edit()
    {
        
        if ($this->model('Pengguna_models')->editPengguna($_POST) > 0 ) {
            header("Location:" . BASE_URL . "/pengguna");
            exit;
        } else {
            header("Location:" . BASE_URL . "/pengguna");
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('Pengguna_models')->deletePengguna($id) > 0 ) {
            header("Location:" . BASE_URL . "/pengguna");
            exit;
        } else {
            header("Location:" . BASE_URL . "/pengguna");
            exit;
        }
    }
}