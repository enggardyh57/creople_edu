<div class="container-fluid">
    <h4>Invoice Pemesanan Kursus</h4>
    <table class="table table-bordered table-hover table-striped">    
        <tr>
            <th>ID Invoice</th>
            <th>Nama Peserta</th>
            <th>Email</th>
            <th>No Telepon</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th>Aksi</th>
        </tr>

        <?php
        // Urutkan invoice berdasarkan tanggal pemesanan secara descending
        usort($invoice, function($a, $b) {
            return strtotime($b->tgl_pesan) - strtotime($a->tgl_pesan);
        });

        if (is_array($invoice) || is_object($invoice)) {
            foreach ($invoice as $inv):
                ?>
               <tr>
				    <td><?php echo $inv->id ?></td>
				    <td><?php echo $inv->nama ?></td>
				    <td><?php echo $inv->email ?></td>
				    <td><?php echo $inv->no_telepon ?></td>
				    <td><?php echo $inv->tgl_pesan ?></td>
				    <td><?php echo $inv->batas_bayar ?></td>
				    <td>
				        <?php 
				            // Tambahkan aksi untuk memberikan konfirmasi pembayaran
				            if ($inv->status_bayar == 'sudah_bayar') {
				                echo '<div class="btn btn-sm btn-success">Sudah Bayar</div>';
				            } else {
				                echo anchor('admin/invoice/confirm_payment/'.$inv->id, '<div class="btn btn-sm btn-warning">Konfirmasi</div>');
				                echo '&nbsp;'; // Tambahkan spasi di sini
				                // Tambahkan aksi untuk menampilkan status pembayaran (sudah bayar atau telat)
				                $status_pembayaran = ($inv->batas_bayar < date('Y-m-d')) ? 'Telat' : 'Belum Telat';
				                echo '<div class="btn btn-sm btn-info">'.$status_pembayaran.'</div>';
				            }
				        ?>
				        <?php echo anchor('admin/invoice/detail/'.$inv->id,'<div class="btn btn-sm btn-primary">Detail</div>')?>
				    </td>
				</tr>

                <?php
            endforeach;
        } else {
            echo "Data invoice tidak valid."; // Handle kasus ketika $invoice bukan array atau objek
        }
        ?>
    </table>
</div>
