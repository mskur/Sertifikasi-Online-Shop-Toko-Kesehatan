<?php 

$title = 'Customer';

require 'adminControl.php';
require 'template/headerAdmin.php';
require 'template/sidebarAdmin.php';

$username = $_GET["username"];

// memanggil function deleteCustomer() yang ada di adminControl.php
if (deleteCustomer($username) > 0){
    echo "
        <script>
            alert('Customer berhasil dihapus!');
            document.location.href = 'viewCustomer.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Customer gagal dihapus!');
            document.location.href = 'viewCustomer.php';
        </script>
    ";
}


?>