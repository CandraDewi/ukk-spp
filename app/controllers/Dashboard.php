<?php 

class Dashboard  extends Controller {
    public function index () 
    {
        if(isset($_SESSION['userSession'])) {
            $data['title'] = "Dashboard";
            $data['Kelas'] = $this->model("Kelas_models")->getTotalKelas();
            $data['Siswa'] = $this->model("Siswa_models")->getTotalSiswa();
            $data['Petugas'] = $this->model("Petugas_models")->getTotalPetugas();
            $data['Transaksi'] = $this->model("Transaksi_models")->getTotalTransaksi();
            
            

            $this->view("layouts/dashboard/header", $data);
            $this->view("layouts/dashboard/sidebar", $data);
            $this->view("pages/dashboard/index", $data);
            $this->view("layouts/dashboard/footer", $data);
        } else {
            redirect("login");
        }

    }
}