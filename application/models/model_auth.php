<?php

class Model_auth extends CI_Model
{
    public function cek_login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $result = $this->db->where('username', $username)
                           ->where('password', $password)
                           ->limit(1)
                           ->get('tb_user');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return null;
        }
    }
}
