<?php 

//Koneksi ke database
$connect = mysqli_connect("localhost", "root", "", "onlineshop");

//Function untuk query
function query($query){
    global $connect;
    $result = mysqli_query($connect, $query);
    $rows = [];
    //Mengambil data dari database dan memasukkannya ke array
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

//Function untuk registrasi
function registrasi($data){
    global $connect;

    $username = htmlspecialchars(strtolower(stripslashes($data["username"])));
    $password = mysqli_real_escape_string($connect, $data["password"]);
    $password2 = mysqli_real_escape_string($connect, $data["password2"]);

    //Cek username sudah ada atau belum
    $result = mysqli_query($connect, "SELECT username FROM customer WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>
                alert('Username sudah terdaftar!');
            </script>";
        return false;
    }

    //Cek konfirmasi password
    if($password !== $password2){
        echo "<script>
                alert('Konfirmasi password tidak sesuai!');
            </script>";
        return false;
    }

    $namaLengkap = htmlspecialchars($data["namaLengkap"]);
    $email = htmlspecialchars(strtolower(stripslashes($data["email"])));
    $dob = htmlspecialchars($data["dob"]);
    $gender = $data["gender"];
    $alamat = htmlspecialchars($data["alamat"]);
    $kota = htmlspecialchars($data["kota"]);
    $contact = htmlspecialchars($data["contact"]);
    $paypalID = htmlspecialchars($data["paypalID"]);

    //Enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //Tambahkan user baru ke database
    mysqli_query($connect, "INSERT INTO customer VALUES('$username', '$password', '$namaLengkap', '$email', '$dob', '$gender', '$alamat', '$kota', '$contact', '$paypalID')");

    return mysqli_affected_rows($connect);
}

// Function untuk menambah guest Book
function addGuestBook($data){
    global $connect;

    $idGuest = 'GUEST-' . time();
    $namaGuest = htmlspecialchars($data["namaGuest"]);
    $emailGuest = htmlspecialchars($data["emailGuest"]);
    $pesanGuest = $data["pesanGuest"];

    mysqli_query($connect, "INSERT INTO guestbook VALUES('$idGuest', '$namaGuest', '$emailGuest', '$pesanGuest')");
    return mysqli_affected_rows($connect);
}


?>