<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link <?php echo($title == 'Daftar Produk') ? 'text-danger' : 'collapsed'; ?>" href="produkCust.php">
            <i class="bi bi-grid"></i>
            <span>Daftar Produk</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link <?php echo($title == 'Keranjang Belanja') ? 'text-danger' : 'collapsed'; ?>" href="viewKeranjang.php">
            <i class="bi bi-basket-fill"></i><span>Keranjang Belanja</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link <?php echo($title == 'Transaksi Belanja') ? 'text-danger' : 'collapsed'; ?>" href="viewTransaksi.php">
            <i class="bi bi-file-text"></i><span>Transaksi Belanja</span>
        </a>
    </li>
    
</ul>


    

</aside><!-- End Sidebar-->



<!-- 
<a href="viewKeranjang.php">Keranjang</a>
<a href="produkCust.php">Produk</a>
<a href="viewTransaksi.php">Transaksi</a>
<a href="detailAkun.php">Akun</a>

<!-- LOGOUT -->
<!-- <a href="../logout.php">Logout</a> --> -->