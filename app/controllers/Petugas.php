<?php

class Petugas extends Controller 
{
    public function index()
    {
        $data['title'] = 'Petugas';
        $data['petugas'] = $this->model('Petugas_models')->getDataPetugas();

        $this->view("layouts/dashboard/header", $data);
        $this->view("layouts/dashboard/sidebar", $data);
        $this->view("pages/petugas/index", $data);
        $this->view("layouts/dashboard/footer", $data);
        
    }

    public function create()
    {
        $data['title'] = 'Petugas';
        
        $this->view("layouts/dashboard/header", $data);
        $this->view("layouts/dashboard/sidebar", $data);
        $this->view("pages/petugas/create", $data);
    }

    public function add()
    {
        if ($this->model('Petugas_models')->addPetugas($_POST) > 0) {
            header("Location:" . BASE_URL . "/petugas");
            exit;
        } else {
            header("Location:" . BASE_URL . "/petugas");
            exit;
        }
    }

    public function editForm($id)
    {
        // var_dump($id); die;
        $data['title'] = 'Petugas';
        $data['petugas'] = $this->model('Petugas_models')->getPetugasById($id);

        $this->view("layouts/dashboard/header", $data);
        $this->view("layouts/dashboard/sidebar", $data);
        $this->view("pages/petugas/edit", $data);
    }

    public function edit()
    {
        // var_dump($_POST); die;
        if ($this->model('Petugas_models')->editPetugas($_POST) > 0 ) {
            header("Location:" . BASE_URL . "/petugas");
            exit;
        } else {
            header("Location:" . BASE_URL . "/petugas");
            exit;
        }
    }

    public function delete($id)
    {
       if ($this->model('Petugas_models')->deleteDataPetugas($id) > 0 ) {
        header("Location:" . BASE_URL . "/petugas");
        exit;
       } else {
        header("Location:" . BASE_URL . "/petugas");
        exit;
       }
    }
}