<div class="container-fluid">
    <div class="row justify-content-center mt-3">
        <?php foreach ($microsoft_office as $brg) : ?>
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 100%;">
                    <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top" alt="..." style="max-width: 100%; height: auto;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-1"><?php echo $brg->nama_kursus ?></h5>
                        <small class="text-muted"><?php echo $brg->mentor ?></small>
                    </div>
                    <div class="card-footer text-center">
                        <div class="d-flex flex-column align-items-center">
                            <span class="btn btn-sm btn-secondary mb-2">Rp.<?php echo number_format($brg->harga, 0,',','.') ?></span>
                            <?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_kursus,'<button type="button" class="btn btn-sm btn-primary mb-2">Tambah ke keranjang</button>') ?>
                            <?php echo anchor('dashboard/detail/'.$brg->id_kursus,'<button type="button" class="btn btn-sm btn-success">Detail</button>') ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>
