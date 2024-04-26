<?php
class Dashboard_admin extends CI_Controller 
{
    public function __construct()
    {
        // Memanggil konstruktor dari kelas induk (CI_Controller)
        parent::__construct();
        // Memeriksa apakah pengguna sudah login
        if (!$this->session->userdata('id_admin')) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  Anda Belum Login
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>');
            // Redirect pengguna ke halaman login
            redirect('auth_admin/login_admin');
        } 
    }

    public function index()
    {
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('templates_admin/footer');
    }
}
