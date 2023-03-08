<?php

class Pembayaran extends Controller
{
    public function index()
    {
        $data['title'] = "Pembayaran";
        $data['Pembayaran'] = $this->model('Pembayaran_models')->getDataPembayaran();

        $this->view("layouts/dashboard/header", $data);
        $this->view("layouts/dashboard/sidebar", $data);
        $this->view("pages/pembayaran/index", $data);
        $this->view("layouts/dashboard/footer", $data);
    }  
    
    public function create()
    {
        $data['title'] = 'Pembayaran';
        
        
        $this->view("layouts/dashboard/header", $data);
        $this->view("layouts/dashboard/sidebar", $data);
        $this->view("pages/pembayaran/create", $data);
    }

    public function add()
    {
        if ($this->model('Pembayaran_models')->addDataPembayaran($_POST) > 0 ) {
            header("Location:" . BASE_URL . "/pembayaran");
            exit;
        } else {
            header("Location:" . BASE_URL . "/pembayaran");
            exit;
        }
    }

    public function editForm($id)
    {
        $data['title'] = 'Pembayaran';
        $data['pembayaran'] = $this->model('Pembayaran_models')->getPembayaranById($id);


        $this->view("layouts/dashboard/header", $data);
        $this->view("layouts/dashboard/sidebar", $data);
        $this->view("pages/pembayaran/edit", $data);
    }

    public function edit()
    {
        if ($this->model('Pembayaran_models')->editDataPembayaran($_POST) > 0 ) {
            header("Location:" . BASE_URL . "/pembayaran");
            exit;
        } else {
            header("Location:" . BASE_URL . "/pembayaran");
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('Pembayaran_models')->deleteDataPembayaran($id) > 0 ) {
            header("Location:" . BASE_URL . "/pembayaran");
            exit;
        } else {
            header("Location:" . BASE_URL . "/pembayaran");
            exit;
        }
    }

}