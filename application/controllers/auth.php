<?php

class Auth extends CI_Controller
{
    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', ['required' => "Username wajib diisi"]);
        $this->form_validation->set_rules('password', 'Password', 'required', ['required' => "Password wajib diisi"]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('form_login.php');
            $this->load->view('template/footer');
        } else {
            $auth = $this->model_auth->cek_login();

            if ($auth == NULL) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  Username atau password anda salah!!!
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>');
                redirect('auth/login');
            } else {
                $this->session->set_userdata('username', $auth->username);
                $this->session->set_userdata('id_user', $auth->id_user);

                // Tidak ada pengecekan login yang memaksa pengguna untuk login sebelum dapat mengakses halaman lain.

                redirect('welcome'); // Mengarahkan ke halaman selamat datang.
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
