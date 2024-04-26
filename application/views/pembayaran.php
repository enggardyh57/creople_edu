<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success mt-3">
                <?php 
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "<h5>Total Belanja Anda : Rp.".number_format($grand_total, 0,',','.');
                ?>
            </div>
            <br><br>
            <h3>Input Data dan Pembayaran</h3>
            <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">

                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="nama lengkap anda" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="email anda" class="form-control" required>
                    <?php
                    if (isset($_POST['email'])) {
                        $email = $_POST['email'];
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !strpos($email, '@gmail.com')) {
                            echo '<p style="color: red;">Alamat email harus valid dan menggunakan domain @gmail.com</p>';
                        }
                    }
                    ?>
                </div>

                <div class="form-group">
                <label>No Telepon</label>
                <input type="tel" name="no_telepon" pattern="[0-9]+" placeholder="no telepon anda" class="form-control" required>
                <?php
                if (isset($_POST['no_telepon'])) {
                    $no_telepon = $_POST['no_telepon'];
                    if (!ctype_digit($no_telepon)) {
                        echo '<p style="color: red;">Nomor telepon hanya boleh berisi angka</p>';
                    }
                }
                ?>
                </div>


                <div class="form-group">
                    <label>Pilih Bank</label>
                    <select class="form-control">
                        <option>BRI - 129229292920</option>
                        <option>BCA - 911022020000</option>
                        <option>Dana - 085767282828</option>
                    </select>
                </div>
                <br>
                
                <button type="submit" class="btn btn-sm btn-primary mt=3">Pesan Sekarang</button>

            </form>

            <?php 
            } else {
                echo "<h5>Keranjang Belanja Anda Masih Kosong";
            }
            ?>
        </div>

        <div class="col-md-2"></div>
    </div>
</div>
