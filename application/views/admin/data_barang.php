<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambahbarang"><i class="fas fa-plus fa-sm"></i>Tambah Kursus</button>
    <table class="table table-bordered">
        <tr>
            <th>Id Kursus</th>
            <th>Nama Kursus</th>
            <th>Mentor</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Sisa Peserta</th>
            <th colspan="3">Aksi</th>
        </tr>

        <?php 
        
        foreach($barang as $brg)   : ?>
        <tr>
            <td><?php echo $brg->id_kursus ?></td>
            <td><?php echo $brg->nama_kursus ?></td>
            <td><?php echo $brg->mentor ?></td>
            <td><?php echo $brg->kategori ?></td>
            <td>Rp.<?php echo number_format($brg->harga, 0,',','.') ?></td>
            <td><?php echo $brg->sisa_peserta ?></td>
            <td> <?php echo anchor('admin/data_barang/edit/' .$brg->id_kursus,' <div class= "btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
            <td> <?php echo anchor('admin/data_barang/hapus/' .$brg->id_kursus,'<div class= "btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?> </td>
        <?php endforeach;  ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahbarang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Kursus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form method="post" action="<?= base_url('admin/data_barang/tambah_aksi') ?>" enctype="multipart/form-data">
            
            <div class="form-group">
                <label >Nama Kursus</label>
                <input type="text" name="nama_kursus" class="form-control">
            </div>
            
            <div class="form-group">
                <label >Mentor</label>
                <input type="text" name="mentor" class="form-control">
            </div>

            <div class="form-group">
                <label >Kategori</label>
                <select class="form-control" name="kategori">
                    <option>SoftSkill</option>
                    <option>Desain</option>
                    <option>Marketing</option>
                    <option>Microsoft Office</option>
                    <option>Programming</option>
                </select>
            </div>

            <div class="form-group">
                <label >Harga</label>
                <input type="text" name="harga" class="form-control">
            </div>

            <div class="form-group">
                <label >Sisa Peserta</label>
                <input type="text" name="sisa_peserta" class="form-control">
            </div>

            <div class="form-group">
                <label >Gambar</label>
                <input type="file" name="gambar" class="form-control">
            </div>

      </div>
      <div class="modal-footer" enctype="multipart/form-data">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
      </div>

      <?  echo form_close(); ?>
    </div>
  </div>
</div>
