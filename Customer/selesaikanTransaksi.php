<?php 

$title = "Selesaikan Transaksi";

require 'custControl.php';
require 'template/headerCust.php';
require 'template/sidebarCust.php';

$idTransaksi = $_GET["id"];

// memanggil function selesaikanTransaksi() yang ada di custControl.php
if(selesaikanTransaksi($idTransaksi) > 0){
    echo "<script>
            alert('Transaksi Berhasil Diterima!');
            document.location.href = 'viewTransaksi.php';
        </script>";
} else {
    echo "<script>
            alert('Transaksi Gagal Diterima!');
            document.location.href = 'viewTransaksi.php';
        </script>";
}


?>