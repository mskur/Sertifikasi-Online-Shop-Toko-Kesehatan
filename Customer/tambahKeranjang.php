<?php 

$title = 'Tambah Keranjang';

require 'custControl.php';
require 'template/headerCust.php';
require 'template/sidebarCust.php';

$idProduk = $_GET["idProduk"];

// memanggil function tambahKeranjang() yang ada di custControl.php
if(tambahKeranjang($idProduk) > 0) {
    echo "
        <script>
            alert('Produk berhasil ditambahkan ke keranjang!');
            document.location.href = 'produkCust.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Produk gagal ditambahkan ke keranjang!');
            document.location.href = 'produkCust.php';
        </script>
    ";
}

?>
