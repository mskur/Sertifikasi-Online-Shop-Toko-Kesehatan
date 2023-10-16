<?php 

$title = 'Keranjang Belanja';

require 'custControl.php';
require 'template/headerCust.php';
require 'template/sidebarCust.php';

$username = $_SESSION["username"];
$allKeranjang = query("SELECT * FROM keranjang JOIN produk ON keranjang.idProduk = produk.idProduk WHERE username = '$username' && status = 'Belum Dibayar'");

// memanggil function checkout() yang ada di custControl.php
if(isset($_POST["submit"])) {
    if(checkout($_POST) > 0) {
        echo "
            <script>
                alert('Checkout berhasil!');
                document.location.href = 'viewTransaksi.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Checkout gagal!');
                document.location.href = 'produkCust.php';
            </script>
        ";
    }
}

$totalHarga = query("SELECT SUM(harga) AS totalHarga FROM keranjang WHERE username = '$username' && status = 'Belum Dibayar'")[0]["totalHarga"];

?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1 class="text-danger">Keranjang Anda</h1>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Semua Barang di Keranjang</h5>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID dan Nama Produk</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Total Harga</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach($allKeranjang as $keranjang) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $keranjang["idProduk"]; ?> - <?= $keranjang["namaProduk"]; ?></td>
                        <td><?= $keranjang["jumlah"]; ?></td>
                        <td>Rp<?= number_format($keranjang["harga"], 0, ',', '.') ?></td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                    <tr>
                        <td colspan="3">Total Harga</td>
                        <td>Rp<?= number_format($totalHarga, 0, ',', '.'); ?></td>
                    </tr>
                </tbody>
              </table>
              <!-- End Default Table Example -->
                <form action="" method="post">
                    <input type="hidden" name="username" value="<?= $username; ?>">
                    <input type="hidden" name="totalHarga" value="<?= $totalHarga; ?>">
                    <label for="pembayaran">Pembayaran</label>
                    <select name="bank" class="form-select" id="" required>
                        <option value="">-- Pilih Bank --</option>
                        <option value="BCA">BCA</option>
                        <option value="BNI">BNI</option>
                        <option value="BRI">BRI</option>
                        <option value="Mandiri">Mandiri</option>
                        <option value="Bayar Ditempat">Bayar Ditempat</option>
                    </select><br>
                    <input type="radio" class="form-check-input" value="Prepaid" name="caraBayar">Prepaid
                    <input type="radio" class="form-check-input" value="Postpaid" name="caraBayar">Postpaid
                    <br><br>
                    <button type="submit" class="btn btn-danger" name="submit">Checkout</button>
                    <button class="btn btn-warning" onclick="return confirm('Apakah anda yakin ingin menghapus semua produk di keranjang?')">
                        <a href="hapusKeranjang.php" style="color: white; text-decoration: none;">Hapus Keranjang</a>
                    </button>

                </form>
            </div>
          </div>
        </div><!-- End Col -->
    </div><!-- End Row -->
</section><!-- End Section -->

