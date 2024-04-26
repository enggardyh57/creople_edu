<?php
class Data_barang extends CI_Controller {
    
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
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_barang', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        $id_kursus     = $this->input->post('id_kursus');
        $nama_kursus   = $this->input->post('nama_kursus');
        $mentor     = $this->input->post('mentor');
        $kategori   = $this->input->post('kategori');
        $harga      = $this->input->post('harga');
        $sisa_peserta      = $this->input->post('sisa_peserta');
        $gambar     = $_FILES['gambar']['name'];
        if($gambar == " ") {

        } else {
            $config['upload_path']='./uploads';
            $config['allowed_types']='jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar gagal diupload !";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
        $data = array (
            'id_kursus'     => $id_kursus,
            'nama_kursus'   => $nama_kursus,
            'mentor'     => $mentor,
            'kategori'   => $kategori,
            'harga'      => $harga,
            'sisa_peserta'       => $sisa_peserta,
            'gambar'     => $gambar
        );

        $this->model_barang->tambah_barang($data,'tb_kursus');
        redirect('admin/data_barang/index');
    }

    public function edit($id)
    {
        $where = array('id_kursus' => $id);
        $data['barang'] = $this->model_barang->edit_barang($where, '
            tb_kursus')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_barang', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update()
    {
        $id         = $this->input->post('id_kursus');
        $nama_kursus= $this->input->post('nama_kursus');
        $mentor     = $this->input->post('mentor');
        $kategori   = $this->input->post('kategori');
        $harga      = $this->input->post('harga');
        $sisa_peserta       = $this->input->post('sisa_peserta');
        

        $data = array(
            'nama_kursus'   => $nama_kursus,
            'mentor'     => $mentor,
            'kategori'   => $kategori,
            'harga'      => $harga,
            'sisa_peserta'       => $sisa_peserta            
        );

        $where = array(
            'id_kursus' =>$id
        );

        $this->model_barang->update_data($where,$data,'tb_kursus');
        redirect('admin/data_barang/index');
    }

    public function hapus($id)
    {
        $where = array('id_kursus' => $id);
        $this->model_barang->hapus_data($where, 'tb_kursus');
        redirect('admin/data_barang/index');
    }
    
}