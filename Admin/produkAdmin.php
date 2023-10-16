<?php 

$title = "Daftar Produk";

require 'adminControl.php';
require 'template/headerAdmin.php';
require 'template/sidebarAdmin.php';

$allProduk = query("SELECT * FROM produk");

?>

<main id="main" class="main">

    <div class="pagetitle ">
      <h1 class="text-danger">Produk</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Semua Produk</h5>
                <a href="tambahProduk.php" class="btn btn-danger mb-2">Tambah Produk</a><br>
                <div class="col-md-6 mt-2 mb-2">
                  <input type="text" placeholder="Cari sesuatu di produk..." class="form-control" id="searchingTable">
                </div>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID Produk</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach($allProduk as $produk) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $produk["idProduk"]; ?></td>
                        <td><?= $produk["namaProduk"]; ?></td>
                        <td><?= $produk["kategoriProduk"]; ?></td>
                        <td>Rp<?= number_format($produk["hargaProduk"], 0, ',', '.'); ?></td>
                        <td><?= $produk["stokProduk"]; ?></td>
                        <td><img src="../img/<?= $produk["gambarProduk"]; ?>" width="100px"></td>
                        <td>
                            <a href="editProduk.php?id=<?= $produk["idProduk"]; ?>" class="btn btn-warning">Edit</a>
                            <a href="deleteProduk.php?id=<?= $produk["idProduk"]; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus produk <?= $produk["namaProduk"]; ?>?');">Delete</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>


</main><!-- End #main -->


