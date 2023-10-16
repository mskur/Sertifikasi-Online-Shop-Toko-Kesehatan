<?php 

$title = 'Detail Produk';

require 'custControl.php';
require 'template/headerCust.php';
require 'template/sidebarCust.php';

$id = $_GET["id"];

$produk = query("SELECT * FROM produk WHERE idProduk = '$id'")[0];

?>

<main id="main" class="main">

    <div class="pagetitle ">
      <h1 class="text-danger">Detail Produk</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Detail Produk <?= $produk["namaProduk"]; ?></h5>

                    <!-- Vertical Form -->
                    <form class="row g-3" method="post" enctype="multipart/form-data">
                    
                        <div class="col-12">
                            <label for="namaProduk" class="form-label">Nama Produk</label>
                            <input class="form-control" id="namaProduk" name="namaProduk" readonly value="<?= $produk["namaProduk"]; ?>">
                        </div>

                        <div class="col-12">
                            <label for="kategoriProduk" class="form-label">Kategori Produk</label>
                            <input class="form-control" id="kategoriProduk" name="kategoriProduk" readonly value="<?= $produk["kategoriProduk"]; ?>">
                        </div>

                        <div class="col-12">
                            <label for="hargaProduk" class="form-label">Harga Produk</label>
                            <input class="form-control" id="hargaProduk" name="hargaProduk" readonly value="Rp<?= number_format($produk["hargaProduk"], 0, ',', '.'); ?>">
                        </div>

                        <div class="col-12">
                            <label for="stokProduk" class="form-label">Stok Produk</label>
                            <input class="form-control" id="stokProduk" name="stokProduk" readonly value="<?= $produk["stokProduk"]; ?>">
                        </div>

                        <div class="col-12">
                            <label for="gambarProduk" class="form-label">Gambar Produk</label><br>
                            <img src="../img/<?= $produk["gambarProduk"]; ?>" width="500" class="mb-2"><br>
                        </div>

                        <center>
                            <a href="produkCust.php" class="btn btn-warning col-lg-2">Kembali</a>
                            <a href="tambahKeranjang.php?idProduk=<?= $produk["idProduk"]; ?>" class="btn btn-success col-lg-2">Beli</a>
                        </center>
                        
                        </div>
                    </form><!-- Vertical Form -->

                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->
