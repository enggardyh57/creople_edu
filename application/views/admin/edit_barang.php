<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>Edit Data Kursus</h3>


    <?php foreach($barang as $brg): ?>
        <form method="post" action="<?php echo base_url().'admin/data_barang/update' ?>">
        
        <div class="for-group">
            <label >Nama Kursus</label>
            <input type="text"name="nama_kursus" class="form-control" value="<?php  echo $brg->nama_kursus?>">
        </div>

        <div class="for-group">
            <label >Mentor</label>
            <input type="hidden"name="id_kursus" class="form-control" value="<?php  echo $brg->id_kursus?>">
            <input type="text"name="mentor" class="form-control" value="<?php  echo $brg->mentor?>">
        </div>

        <div class="for-group">
            <label >Kategori</label>
            <input type="text"name="kategori" class="form-control" value="<?php  echo $brg->kategori?>">
        </div>

        <div class="for-group">
            <label >Harga</label>
            <input type="text"name="harga" class="form-control" value="<?php  echo $brg->harga?>">
        </div>
        <div class="for-group">
            <label >Sisa Peserta</label>
            <input type="text"name="stok" class="form-control" value="<?php  echo $brg->stok?>">
        </div>

         

        <button type="submit" class="btn btn-primary btn-sm mt-3"> Simpan</button>
        </form>
    <?php endforeach; ?>
</div>