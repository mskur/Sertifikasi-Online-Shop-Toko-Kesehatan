<?php 

$title = 'Delete Produk';

require 'adminControl.php';
require 'template/headerAdmin.php';
require 'template/sidebarAdmin.php';

$idProduk = $_GET["id"];

// memanggil function deleteProduk() yang ada di adminControl.php
if(deleteProduk($idProduk) > 0){
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'produkAdmin.php';
        </script>
    ";
}
else{
    echo "
        <script>
            alert('Data gagal dihapus!');
            document.location.href = 'produkAdmin.php';
        </script>
    ";
}

?>
