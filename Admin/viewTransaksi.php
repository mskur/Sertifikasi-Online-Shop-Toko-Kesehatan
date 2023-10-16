<?php 

$title = 'Transaksi Belanja';

require 'adminControl.php';
require 'template/headerAdmin.php';
require 'template/sidebarAdmin.php';

$allTransaksi = query("SELECT * FROM transaksi ORDER BY idTransaksi DESC");

?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1 class="text-danger">Data Transaksi</h1>
    </div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Semua Daftar Transaksi Customer</h5>
                <div class="col-md-6 mt-2 mb-2">
                  <input type="text" placeholder="Cari sesuatu di transaksi..." class="form-control" id="searchingTable">
                </div>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID Transaksi</th>
                    <th scope="col">Username</th>
                    <th scope="col">Tanggal Transaksi</th>
                    <th scope="col">Cara Bayar</th>
                    <th scope="col">Bank</th>
                    <th scope="col">Status Transaksi</th>
                    <th scope="col">Status Pengiriman</th>
                    <th scope="col">Total Harga</th>
                    <th scope="col">Aksi</th>
                    <th scope="col">Detail</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach($allTransaksi as $transaksi) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $transaksi["idTransaksi"]; ?></td>
                        <td><?= $transaksi["username"]; ?></td>
                        <td><?= $transaksi["tanggalTransaksi"]; ?></td>
                        <td><?= $transaksi["caraBayar"]; ?></td>
                        <td><?= $transaksi["bank"]; ?></td>
                        <td><?= $transaksi["statusTransaksi"]; ?></td>
                        <td><?= $transaksi["statusPengiriman"]; ?></td>
                        <td>Rp<?= number_format($transaksi["totalHarga"], 0, ',', '.'); ?></td>
                        <td>
                            <?php if($transaksi["statusTransaksi"] == 'Accepted' || $transaksi["statusTransaksi"] == 'Rejected' || $transaksi["statusTransaksi"] == 'Cancelled') : ?>
                                Disabled!
                            <?php else : ?>
                                <a href="acceptTransaksi.php?idTransaksi=<?= $transaksi["idTransaksi"]; ?>" class="btn btn-success" onclick="return confirm('Yakin menerima pesanan dengan id <?= $transaksi["idTransaksi"]; ?>?');">Accept</a>
                                <a href="rejectTransaksi.php?idTransaksi=<?= $transaksi["idTransaksi"]; ?>" class="btn btn-danger" onclick="return confirm('Yakin menolak pesanan dengan id <?= $transaksi["idTransaksi"]; ?>?');">Reject</a>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="cetakTransaksi.php?idTransaksi=<?= $transaksi["idTransaksi"]; ?> &username=<?= $transaksi["username"]; ?>" class="btn btn-primary">Detail</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</endsection><!-- End Section -->
