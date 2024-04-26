<?php
class Model_invoice extends CI_Model
{
	public function index()
	{
		date_default_timezone_set('Asia/Jakarta');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$no_telepon = $this->input->post('no_telepon');


		$invoice = array (
			'nama' 			=>	$nama,
			'email' 		=> 	$email,
			'no_telepon' 	=> 	$no_telepon,
			'tgl_pesan' 	=>	date('Y-m-d H:i:s'),
			'batas_bayar' 	=>  date('Y-m-d H:i:s', mktime(date('H'),
				date('i'),date('s'),date('m'),date('d') + 1,date('Y'))
				)
		);

		$this->db->insert('tb_invoice', $invoice);
		$id_invoice = $this->db->insert_id();

		foreach ($this->cart->contents() as $item) {
			$data = array (
				'id_invoice' 	=>	$id_invoice,
				'id_kursus'  	=> 	$item['id'],
				'nama_kursus'	=>	$item['name'],
				'jumlah'		=> 	$item['qty'],
				'harga'			=> 	$item['price'],
			);

			$this->db->insert('tb_pesanan', $data);
		}
		return TRUE;
	}

	public function tampil_data()
	{
		$result = $this->db->get('tb_invoice');
		if($result->num_rows() > 0) {
			return $result->result();
		} else {
			return FALSE;
		}
	}

	public function ambil_id_invoice($id_invoice)
	{
		$result = $this->db->where('id',$id_invoice)->limit(1)->get('tb_invoice');
		if($result->num_rows() > 0) {
			return $result->row();
		} else {
			return FALSE;
		}
	}

	public function ambil_id_pesanan($id_invoice)
	{
		$result = $this->db->where('id_invoice',$id_invoice)->get('tb_pesanan');
		if($result->num_rows() > 0) {
			return $result->result();
		} else {
			return FALSE;
		}
	}
	public function getInvoices() {
        // Ambil data invoice dari basis data (sesuaikan dengan struktur tabel Anda)
        $this->db->order_by('tgl_pesan', 'DESC');
        return $this->db->get('tb_invoice')->result();
    }

    public function confirmPayment($invoice_id) {
    // Logika untuk mengonfirmasi pembayaran sesuai dengan kebutuhan
    // Update status_bayar menjadi 'sudah_bayar' atau sesuai dengan kebutuhan
    $data_invoice = array('status_bayar' => 'sudah_bayar');
    $this->db->where('id', $invoice_id);
    $this->db->update('tb_invoice', $data_invoice);

    // Selanjutnya, update status pembayaran di tabel tb_pesanan
    $data_pesanan = array('status_bayar' => 'sudah_bayar');
    $this->db->where('id_invoice', $invoice_id);
    $this->db->update('tb_pesanan', $data_pesanan);
}






}