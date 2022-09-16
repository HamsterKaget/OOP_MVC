<?php 
$db = mysqli_connect("localhost", "root", "", "nebrazka");
//  Cek Koneksi Database
if(mysqli_connect_errno()) {
    echo "Koneksi Database Gagal" . mysqli_connect_error();
} else {
    echo "Koneksi Database Berhasil";
}


?>