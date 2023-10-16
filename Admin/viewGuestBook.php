<?php 

$title = 'Guest Book';

require 'adminControl.php';
require 'template/headerAdmin.php';
require 'template/sidebarAdmin.php';

$allGuestBook = query("SELECT * FROM guestbook ORDER BY idGuest DESC");

?>

<main id="main" class="main">
    <div class="pagetitle ">
      <h1 class="text-danger">Guest Book</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Semua Guest Book</h5>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Guest</th>
                    <th scope="col">Email Guest</th>
                    <th scope="col">Pesan Guest</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach($allGuestBook as $guestBook) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $guestBook["namaGuest"]; ?></td>
                        <td><?= $guestBook["emailGuest"]; ?></td>
                        <td><?= $guestBook["pesanGuest"]; ?></td>
                        <td>
                            <a href="deleteGuestBook.php?idGuest=<?= $guestBook["idGuest"]; ?>" class="btn btn-warning" onclick="return confirm('Yakin ingin menghapus pesan dari <?= $guestBook["namaGuest"]; ?>?');">Delete</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
                </table>
            </div>
          </div>
        </div>
    </div>
    </section>
</main>
