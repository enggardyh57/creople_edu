<?php
class Dashboard extends CI_Controller 
{
    public function __construct()
    {
        // Memanggil konstruktor dari kelas induk (CI_Controller)
        parent::__construct();
        // Memeriksa apakah pengguna sudah login
        if (!$this->session->userdata('id_user')) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  Anda Belum Login
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>');
            // Redirect pengguna ke halaman login
            redirect('auth/login');
        } 
    }

    


    public function tambah_ke_keranjang($id)
    {
        $barang = $this->model_barang->find($id);

        $data = array(
            'id'      => $barang->id_kursus,
            'qty'     => 1,
            'price'   => $barang->harga,
            'name'    => $barang->nama_kursus,
            
        );

        $this->cart->insert($data);
        redirect('welcome');
    }

    public function detail_keranjang()
    {

        $this->load->view('baru/header');
         $this->load->view('baru/sidebar');
        $this->load->view('keranjang');
        
    }

    public function hapus_item($row_id)
    {
        $data = array(
            'rowid' => $row_id,
            'qty' => 0,
        );

        $this->cart->update($data);
        redirect('dashboard/detail_keranjang');
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('welcome/index');
    }



    public function pembayaran()
    {
        $this->load->view('baru/header');
        $this->load->view('baru/sidebar');
        $this->load->view('pembayaran');
        
    }
    
    public function proses_pesanan()
{
    $this->load->library('form_validation');

    // Aturan validasi
    $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('no_telepon', 'No Telepon', 'required');

    // Jalankan validasi
    if ($this->form_validation->run() == FALSE) {
        // Jika validasi gagal, tampilkan kembali halaman input data
        $this->load->view('baru/header');
        $this->load->view('baru/sidebar');
        $this->load->view('pembayaran');
        
    } else {
        // Jika validasi berhasil, lanjutkan proses pesanan
        $is_processed = $this->model_invoice->index();

        if ($is_processed) {
            $this->cart->destroy();
            $this->load->view('baru/header');
            $this->load->view('baru/sidebar');
            $this->load->view('proses_pesanan');
            
        } else {
            echo "Maaf, pesanan anda gagal diproses!!";
        }
    }
}


    public function detail($id_kursus)
    {
        $data['barang'] = $this->model_barang->detail_brg($id_kursus);
        $this->load->view('baru/header');
        $this->load->view('baru/sidebar');
        $this->load->view('detail_barang',$data);
        
    }
    
}