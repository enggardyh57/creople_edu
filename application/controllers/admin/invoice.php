<?php

class Invoice extends CI_Controller
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
		$data['invoice'] = $this->model_invoice->tampil_data();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/invoice', $data);
		$this->load->view('templates_admin/footer');
	}

	public function detail($id_invoice)
	{
		$data['invoice']=  $this->model_invoice->ambil_id_invoice($id_invoice);
		$data['pesanan']=  $this->model_invoice->ambil_id_pesanan($id_invoice);

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_invoice', $data);
		$this->load->view('templates_admin/footer');
	}

	public function status() {
        // Ambil data invoice dari model (gantilah 'InvoiceModel' dengan nama model yang sesuai)
        $data['invoice'] = $this->model_invoice->getInvoices();
        
        // Load view
        $this->load->view('admin/invoice/status', $data);
    }

    public function confirm_payment($invoice_id) {
        // Logika untuk mengonfirmasi pembayaran (gantilah 'InvoiceModel' dengan nama model yang sesuai)
        $this->model_invoice->confirmPayment($invoice_id);

        // Redirect kembali ke halaman invoice setelah konfirmasi pembayaran
        redirect('admin/invoice');
    }

	


	
}