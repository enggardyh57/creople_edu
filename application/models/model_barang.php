<?php

class Model_barang extends CI_Model
{
    public function tampil_data() 
    {
        return $this->db->get('tb_kursus');
    }

    public function tambah_barang($data,$table)
    {
        $this->db->insert($table,$data);
    }

    public function edit_barang($where,$table)
    {
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_data($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    
    public function find($id)
    {
        $result = $this->db->where('id_kursus',$id)
                           ->limit(1)
                           ->get('tb_kursus');
        if($result->num_rows() > 0){
            return $result->row(); 
        }else{
            return array();
        }
    }

    public function detail_brg($id_kursus)
    {
        $result = $this->db->where('id_kursus', $id_kursus)->get('tb_kursus');
        if($result->num_rows()>0){
            return $result->result();
        } else{
            return FALSE;
        }
    }
    
}