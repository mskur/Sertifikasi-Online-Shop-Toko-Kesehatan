<?php 

$title = 'Guest Book';
require 'connect.php';

// memanggil function addGuestBook

if(isset($_POST["kirim"])){
    if(addGuestBook($_POST) > 0){
        echo "
            <script>
                alert('Pesan berhasil dikirim!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Pesan gagal dikirim!');
                document.location.href = 'index.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/logo.png" rel="icon">
  <link href="img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="card pt-3">
        <div class="card-body">
          <h2 class="card-title text-center text-danger">Guest Book</h2>

            <!-- Vertical Form -->
            <form class="row g-3" method="POST">
                <div class="col-12">
                    <label for="namaGuest" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="namaGuest" name="namaGuest" required>
                </div>
                <div class="col-12">
                    <label for="emailGuest" class="form-label">Email</label>
                    <input type="email" class="form-control" id="emailGuest" name="emailGuest" required>
                </div>
                <div class="col-12">
                    <label for="pesanGuest" class="form-label">Pesan</label>
                    <textarea name="pesanGuest" id="pesanGuest" cols="30" rows="10" required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" name="kirim" class="btn btn-danger">Submit</button>
                </div>
            </form><!-- Vertical Form -->

            </div>
            <div class="col-12">
                <p class="small mb-0">Don't have account? <a href="registrasi.php">Create an account</a></p>
                <p class="small mb-0">Already have an account? <a href="login.php">Log in</a></p>
                <p class="small mb-0">You're administator? <a href="loginAdmin.php">Administator Login</a></p>
            </div>
          </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script>
  $('#pesanGuest').summernote({
    placeholder: 'Masukkan pesan anda disini...',
    tabsize: 0,
    height: 300,
    toolbar: [
      ['style', ['style']],
      ['font', ['bold', 'underline', 'clear']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['table', ['table']],
      ['view', ['fullscreen', 'codeview', 'help']]
    ]
  });
</script>