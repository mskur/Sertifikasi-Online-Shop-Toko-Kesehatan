<?php 

$title = 'Edit Produk';

require 'adminControl.php';
require 'template/headerAdmin.php';
require 'template/sidebarAdmin.php';


$idProduk = $_GET["id"];

$produk = query("SELECT * FROM produk WHERE idProduk = '$idProduk'")[0];

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

// memanggil function updateProduk() yang ada di adminControl.php
if(isset($_POST["submit"])){
    if(updateProduk($_POST) > 0){
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'produkAdmin.php';
            </script>
        ";
    }
    else{
        echo "
            <script>
                alert('Data gagal diubah!');
                document.location.href = 'produkAdmin.php';
            </script>
        ";
    }
}

?>

<main id="main" class="main">

    <div class="pagetitle ">
      <h1 class="text-danger">Update Produk</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Update Produk</h5>

                    <!-- Vertical Form -->
                    <form class="row g-3" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="idProduk" value="<?= $produk["idProduk"]; ?>">
                        <input type="hidden" name="beforeupdate" value="<?= $produk["gambarProduk"]; ?>">

                        <div class="col-12">
                            <label for="namaProduk" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" id="namaProduk" name="namaProduk" required value="<?= $produk["namaProduk"]; ?>">
                        </div>

                        <div class="col-12">
                            <label for="kategoriProduk" class="form-label">Kategori Produk</label>
                            <select class="form-select" id="kategoriProduk" name="kategoriProduk" required>
                                <option value="">-- Pilih Kategori --</option>
                                <?php foreach($kategori as $k) : ?>
                                    <?php if($k == $produk["kategoriProduk"]) : ?>
                                        <option value="<?= $k; ?>" selected><?= $k; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $k; ?>"><?= $k; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="col-12">
                            <label for="hargaProduk" class="form-label">Harga Produk</label>
                            <input type="number" class="form-control" id="hargaProduk" name="hargaProduk" required value="<?= $produk["hargaProduk"]; ?>">
                        </div>

                        <div class="col-12">
                            <label for="stokProduk" class="form-label">Stok Produk</label>
                            <input type="number" class="form-control" id="stokProduk" name="stokProduk" required value="<?= $produk["stokProduk"]; ?>">
                        </div>

                        <div class="col-12">
                            <label for="gambarProduk" class="form-label">Gambar Produk</label><br>
                            <img src="../img/<?= $produk["gambarProduk"]; ?>" width="300" class="mb-2"><br>
                            <input type="file" class="form-control" id="gambarProduk" name="gambarProduk">
                        </div>
                        
                        <div class="col-lg-6">
                            <button type="submit" class="btn btn-primary" name="submit">Update</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                        </div>
                    </form><!-- Vertical Form -->

                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->
