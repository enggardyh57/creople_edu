<?php
class Registrasi extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => "Nama wajib diisi"]);
        $this->form_validation->set_rules('username', 'Username', 'required', ['required' => "Username wajib diisi"]);
        $this->form_validation->set_rules('password_1', 'Password', 'required|matches[password_2]', [
            'required' => 'Password wajib diisi',
            'matches'  => 'Password tidak cocok'
        ]);
        $this->form_validation->set_rules('password_2', 'Password', 'required|matches[password_1]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('registrasi');
            $this->load->view('template/footer');
        } else {
            $data = array(
                'id_user'    => '', // Sesuaikan dengan nama kolom yang benar
                'nama'       => $this->input->post('nama'),
                'username'   => $this->input->post('username'),
                'password'   => md5($this->input->post('password_1')), // Encrypt password
            );

            $this->db->insert('tb_user', $data);
            redirect('auth/login');
        }
    }
}
