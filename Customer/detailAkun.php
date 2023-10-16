<?php 

$title = 'Detail Akun';

require 'custControl.php';
require 'template/headerCust.php';
require 'template/sidebarCust.php';

$username = $_SESSION["username"];
$customer = query("SELECT * FROM customer WHERE username = '$username'")[0];

$tanggalLahir = strtotime($customer["dob"]);
$tanggalFormatted = date("j F Y", $tanggalLahir);

?>

    <style>
        .card:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }
    </style>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1 class="text-danger">Detail Akun</h1>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="card p-3 shadow-lg rounded">
                <div class="card-body pt-3">
                    <div class="tab-pane fade show active profile-overview" id="profile-overview">

                        <!-- Detail Akun -->
                        <div class="row mb-3">
                            <div class="col-lg-3 col-md-4 text-danger fw-bold">Username</div>
                            <div class="col-lg-9 col-md-8">: <?= $customer["username"]; ?></div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-3 col-md-4 text-danger fw-bold">Nama Lengkap</div>
                            <div class="col-lg-9 col-md-8">: <?= $customer["namaLengkap"]; ?></div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-3 col-md-4 text-danger fw-bold">Email</div>
                            <div class="col-lg-9 col-md-8">: <?= $customer["email"]; ?></div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-3 col-md-4 text-danger fw-bold">Tanggal Lahir</div>
                            <div class="col-lg-9 col-md-8">: <?= $tanggalFormatted; ?></div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-3 col-md-4 text-danger fw-bold">Gender</div>
                            <div class="col-lg-9 col-md-8">: <?= $customer["gender"]; ?></div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-3 col-md-4 text-danger fw-bold">Alamat</div>
                            <div class="col-lg-9 col-md-8">: <?= $customer["alamat"]; ?></div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-3 col-md-4 text-danger fw-bold">Kota</div>
                            <div class="col-lg-9 col-md-8">: <?= $customer["kota"]; ?></div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-3 col-md-4 text-danger fw-bold">Contact</div>
                            <div class="col-lg-9 col-md-8">: <?= $customer["contact"]; ?></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 text-danger fw-bold">Paypal ID</div>
                            <div class="col-lg-9 col-md-8">: <?= $customer["paypalID"]; ?></div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
