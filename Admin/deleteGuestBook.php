<?php 

$title = 'Guest Book';

require 'adminControl.php';
require 'template/headerAdmin.php';
require 'template/sidebarAdmin.php';

$idGuest = $_GET["idGuest"];

// memanggil function deleteGuestBook() yang ada di adminControl.php
if (deleteGuestBook($idGuest) > 0){
    echo "
        <script>
            alert('Guest Book berhasil dihapus!');
            document.location.href = 'viewGuestBook.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Guest Book gagal dihapus!');
            document.location.href = 'viewGuestBook.php';
        </script>
    ";
}

?>