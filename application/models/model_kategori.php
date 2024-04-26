<?php
class Model_kategori extends CI_Model
{
	public function data_softskill()
	{
		return $this->db->get_where('tb_kursus',array('kategori'=>'softskill'));
	}


	public function data_desain()
	{
		return $this->db->get_where('tb_kursus',array('kategori'=>'desain'));
	}


	public function data_marketing()
	{
		return $this->db->get_where('tb_kursus',array('kategori'=>'marketing'));
	}


	public function data_microsoft_office()
	{
		return $this->db->get_where('tb_kursus',array('kategori'=>'microsoft office'));
	}


	public function data_programming()
	{
		return $this->db->get_where('tb_kursus',array('kategori'=>'programming'));
	}
}