<?php

class Model_auth_admin extends CI_Model
{
    public function cek_login_admin($username, $password)
    {
        $result = $this->db->where('username', $username)
            ->where('password', md5($password))
            ->limit(1)
            ->get('tb_admin');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return null;
        }
    }
}
