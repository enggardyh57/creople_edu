<div class="container-fluid">
	<div class="card">
	  <div class="card-header">
	    Detail Kursus
	  </div>
	  <div class="card-body">
	  <?php foreach($barang as $brg): ?>
	    <div class="row">
	    	<div class="col-md-4">
	    		<img src="<?php echo base_url().'/uploads/'.$brg->gambar?>" class="card-img-top img-thumbnail" >
	    	</div>
	    	<div class="col-md-8">
	    		<table class="table">
	    			<tr>
	    				<td>Nama Kursus</td>
	    				<td><strong><?php echo $brg->nama_kursus?></strong></td>
	    			</tr>

	    			<tr>
	    				<td>Mentor</td>
	    				<td><strong><?php echo $brg->mentor?></strong></td>
	    			</tr>

	    			<tr>
	    				<td>Kategori</td>
	    				<td><strong><?php echo $brg->kategori?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Sisa Peserta</td>
	    				<td><strong><?php echo $brg->sisa_peserta?></strong></td>
	    			</tr>

	    			<tr>
	    				<td>Harga</td>
	    				<td><strong><div class="btn btn-sm btn-success">Rp.<?php echo number_format ($brg->harga, 0,',','.')?></div></strong></td>
	    			</tr>

	    		</table>
	    	</div>
	    </div>
	  <?php endforeach; ?>
	  </div>
			  <center>
		    <?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_kursus, '<div class="btn btn-sm btn-primary">Tambah ke keranjang</div>', array('onclick' => 'return confirmTambahKeranjang();')); ?>
		</center>

		<script>
		    function confirmTambahKeranjang() {
		        var confirmTambah = confirm("Apakah Anda yakin ingin menambahkan ke keranjang?");
		        return confirmTambah;
		    }
		</script>
</div>
</div>