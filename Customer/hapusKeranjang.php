<?php 

$title = 'Hapus Keranjang';

require 'custControl.php';
require 'template/headerCust.php';
require 'template/sidebarCust.php';

$username = $_SESSION["username"];

// delete keranjang
if(hapusKeranjang($username) > 0) {
    echo "
        <script>
            alert('Keranjang berhasil dihapus!');
            document.location.href = 'viewKeranjang.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Keranjang gagal dihapus!');
            document.location.href = 'viewKeranjang.php';
        </script>
    ";
}


?>