<?php 

$title = 'Transaksi Belanja';

require 'adminControl.php';
require 'template/headerAdmin.php';
require 'template/sidebarAdmin.php';

$idTransaksi = $_GET["idTransaksi"];

// memanggil function acceptTransaksi() yang ada di adminControl.php
if(acceptTransaksi($idTransaksi) > 0) {
    echo "
        <script>
            alert('Transaksi berhasil diterima!');
            document.location.href = 'viewTransaksi.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Transaksi gagal diterima!');
            document.location.href = 'viewTransaksi.php';
        </script>
    ";
}


?>