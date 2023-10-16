<?php 

$title = 'Registrasi';

require 'connect.php';

if(isset($_POST["submit"])){
    if(registrasi($_POST) > 0){
        echo "<script>
                alert('user baru berhasil ditambahkan');
                header('Location: login.php');
                </script>";
    }else{
        echo "<script>
                alert('user baru gagal ditambahkan');
                </script>";
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

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="img/logo.png" alt="">
                  <span class="d-none d-lg-block text-danger">MSKR Health Care</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4 text-danger">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate method="POST">
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please choose a username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Retype Password</label>
                      <input type="password" name="password2" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please Re-Type your password!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourName" class="form-label">Your Name</label>
                      <input type="text" name="namaLengkap" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                      <label for="dob" class="form-label">Date of Birth</label>
                      <input type="date" name="dob" class="form-control" id="dob" required>
                      <div class="invalid-feedback">Please enter a valid Date of Birth!</div>
                    </div>

                    <div class="col-12">
                      <label for="gender" class="form-check-label">Gender</label><br>
                      <input class="form-check-input" type="radio" name="gender" class="form-control" id="gender" value="male" required> Male
                      <input class="form-check-input" type="radio" name="gender" class="form-control" id="gender" value="female" required> Female
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                      <label for="alamat" class="form-label">Address</label>
                      <input type="text" name="alamat" class="form-control" id="alamat" required>
                      <div class="invalid-feedback">Please, enter your address!</div>
                    </div>

                    <div class="col-12">
                      <label for="kota" class="form-label">City</label>
                      <input type="text" name="kota" class="form-control" id="kota" required>
                      <div class="invalid-feedback">Please, enter your City!</div>
                    </div>

                    <div class="col-12">
                      <label for="contact" class="form-label">Contact</label>
                      <input type="number" name="contact" class="form-control" id="contact" required pattern="[0-9]*">
                      <div class="invalid-feedback">Please, enter your Contact!</div>
                    </div>

                    <div class="col-12">
                      <label for="paypalID" class="form-label">paypal ID</label>
                      <input type="number" name="paypalID" class="form-control" id="paypalID" required pattern="[0-9]*">
                      <div class="invalid-feedback">Please, enter your paypalID!</div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-danger" name="submit">Submit</button>
                      <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="login.php">Log in</a></p>
                      <p class="small mb-0">You're administator? <a href="loginAdmin.php">Administator Login</a></p>
                      <p class="small mb-0">Want to send guest book? <a href="guestBook.php">guestBook</a></p>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>



<!-- <h1>REGISTASI</h1>

<form action="" method="post">
    <!-- username, password, retype password, email, date of birth, gender, addres, city, contct no, paypal  -->
    <!-- Username : <input type="text" name="username" placeholder="Username"><br>
    Password : <input type="password" name="password" placeholder="Password"><br>
    Retype Password : <input type="password" name="password2" placeholder="Retype Password"><br>
    Nama Lengkap : <input type="text" name="namaLengkap" placeholder="Nama Lengkap"><br>
    E-Mail : <input type="email" name="email" placeholder="Email"><br>
    Tanggal Lahir : <input type="date" name="dob" placeholder="Date of Birth"><br>
    <!-- input radio gender -->
    <!-- Gender :
    <label for="male">Laki-laki:</label>
    <input type="radio" id="male" name="gender" value="male">

    <label for="female">Perempuan:</label>
    <input type="radio" id="female" name="gender" value="female"><br>

    Alamat :<input type="text" name="alamat" placeholder="alamat"><br>
    Kota : <input type="text" name="kota" placeholder="kota"><br>
    Contact :<input type="text" name="contact" placeholder="Contact No" pattern="[0-9]*"><br>
    Pay-pal id : <input type="text" name="paypalID" placeholder="PaypalID" pattern="[0-9]*"><br>

    <button type="submit" name="submit">Register</button> -->

<!-- </form> -->

<!-- sudah punya akun? <a href="login.php">Login</a>
Anda administator? <a href="loginAdmin.php">Login Admin</a> -->