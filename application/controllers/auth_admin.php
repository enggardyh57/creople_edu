<?php

class Auth_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_auth_admin', 'model_auth_admin');
    }

    public function login_admin()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', ['required' => "Username wajib diisi"]);
        $this->form_validation->set_rules('password', 'Password', 'required', ['required' => "Password wajib diisi"]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('admin/login_admin');
            $this->load->view('template/footer');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $auth = $this->model_auth_admin->cek_login_admin($username, $password);

            if ($auth == null) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  Username atau password anda salah!!!
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>');
                redirect('auth_admin/login_admin');
            } else {
                $this->session->set_userdata('username', $auth->username);
                $this->session->set_userdata('id_admin', $auth->id_admin);

                switch ($auth->id_admin) {
                    case 1:
                        redirect('admin/dashboard_admin');
                        break;
                }
            }
        }
    }

    public function logout_admin()
    {
        $this->session->sess_destroy();
        redirect('auth_admin/login_admin');
    }
}
