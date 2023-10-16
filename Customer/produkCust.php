<?php 

$title = 'Daftar Produk';

require 'custControl.php';
require 'template/headerCust.php';
require 'template/sidebarCust.php';

$allProduk = query("SELECT * FROM produk");

$kategori = array(
    "Peralatan Medis",
    "Obat dan Suplemen",
    "Alat Bantu Jalan",
    "Alat Ukur Kesehatan",
    "Alat Pemantau Kesehatan",
    "Alat Terapi dan Rehabilitasi",
    "Perlengkapan Rumah Sakit",
    "Perlengkapan Dokter",
    "Perlengkapan Perawat",
    "lain-lain"
);


?>

<style>
    .custom-card-img {
    height: 220px; /* Ganti dengan tinggi yang diinginkan */
    object-fit: cover; /* Pastikan gambar tetap proporsional tanpa distorsi */
}
</style>

<main id="main" class="main">

    <div class="pagetitle">
      <h1 class="text-danger">Semua Produk MSKR Health Care</h1>
</div><!-- End Page Title -->

<!-- live dropdown with jquery for filter kategoriProduk -->

<div class="container">
    <div class="row">
        <div class="col-md-5">
            <p>Pilih Kategori : </p>
            <select class="form-select mb-5" id="kategoriFilter">
                <option value="all">Semua Kategori</option>
                <!-- Isi dropdown dengan kategori-kategori yang diambil dari PHP -->
                <?php foreach($kategori as $k) : ?>
                <option value="<?= $k; ?>"><?= $k; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>

    <div class="row">
        <?php foreach($allProduk as $produk) : ?>
            <div id="produk" class="col-md-4 mb-4" data-kategori="<?= $produk["kategoriProduk"]; ?>">
                <div class="card" style="width: 22rem;">
                    <img src="../img/<?= $produk["gambarProduk"]; ?>" class="card-img-top custom-card-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $produk["namaProduk"]; ?></h5>
                        <p class="card-text"><?= $produk["kategoriProduk"]; ?></p>
                        <center class="text-danger mb-2">
                            Rp<?= number_format($produk["hargaProduk"], 0, ',', '.'); ?>
                        </center>
                        <p class="card-text d-flex justify-content-center">
                            <!-- if produk stok = 0 -->
                            <?php if($produk["stokProduk"] == 0) : ?>
                                <a href="#" class="btn btn-danger">Stok Kosong</a>
                            <?php else : ?>
                                <a href="tambahKeranjang.php?idProduk=<?= $produk["idProduk"]; ?>" class="btn btn-danger">Beli</a>
                            <?php endif; ?>
                            <a href="detailProduk.php?id=<?= $produk["idProduk"]; ?>" class="btn btn-warning" style="margin-left: 20px;">Detail</a>
                        </p>
                    </div>
                </div><!-- End Card with an image on top -->
            </div>
        <?php endforeach; ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function(){
        $("#kategoriFilter").on("change", function() {
            var selectedCategory = $(this).val();

            $(".col-md-4").each(function() {
                var cardCategory = $(this).data("kategori");
                var isCategoryMatch = selectedCategory === "all" || cardCategory === selectedCategory;
                
                if (isCategoryMatch) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
    });
</script>

