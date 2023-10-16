<?php 

$title = 'Transaksi Belanja';

require 'adminControl.php';
require 'template/headerAdmin.php';
require 'template/sidebarAdmin.php';

$idTransaksi = $_GET["idTransaksi"];

// memanggil function rejectTransaksi() yang ada di adminControl.php
if(rejectTransaksi($idTransaksi) > 0) {
    echo "
        <script>
            alert('Transaksi berhasil ditolak!');
            document.location.href = 'viewTransaksi.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Transaksi gagal ditolak!');
            document.location.href = 'viewTransaksi.php';
        </script>
    ";
}

?>