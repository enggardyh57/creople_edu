<?php
class Kategori extends CI_Controller
{
	public function softskill()
	{
		$data['softskill'] = $this->model_kategori->data_softskill()->result();
		$this->load->view('baru/header');
        $this->load->view('baru/sidebar');
        $this->load->view('softskill',$data);
        
	}

	public function desain()
	{
		$data['desain'] = $this->model_kategori->data_desain()->result();
		$this->load->view('baru/header');
        $this->load->view('baru/sidebar');
        $this->load->view('desain',$data);
        
	}

	public function marketing()
	{
		$data['marketing'] = $this->model_kategori->data_marketing()->result();
		$this->load->view('baru/header');
        $this->load->view('baru/sidebar');
        $this->load->view('marketing',$data);
	}

	public function microsoft_office()
	{
		$data['microsoft_office'] = $this->model_kategori->data_microsoft_office()->result();
		$this->load->view('baru/header');
        $this->load->view('baru/sidebar');
        $this->load->view('microsoft_office',$data);
	}

	public function programming()
	{
		$data['programming'] = $this->model_kategori->data_programming()->result();
		$this->load->view('baru/header');
        $this->load->view('baru/sidebar');
        $this->load->view('programming',$data);
	}
}