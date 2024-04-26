<div class="container-fluid">
    <div class="row text-center mt-3 mb-5 justify-content-center">
        <?php foreach ($barang as $brg) : ?>
            <div class="card ml-5 mt-3" style="width: 16rem;">
                <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $brg->nama_kursus ?></h5>
                    <small><?php echo $brg->mentor ?></small>
                    <br>
                    <span class="badge badge-success mb-3">Rp. <?php echo number_format($brg->harga, 0, ',', '.') ?></span>

                    <?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_kursus,'<div class="btn btn-sm btn-primary mr-2 mb-2">Tambah ke keranjang</div>') ?>
                    <?php echo anchor('dashboard/detail/'.$brg->id_kursus,'<div class="btn btn-sm btn-success mb-2">Detail</div>') ?>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>
